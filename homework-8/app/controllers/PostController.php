<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function createPost()
    {
        if (isset($_POST['name']) && isset($_POST['description'])) {
            $name = htmlspecialchars($_POST['name']);
            $description = htmlspecialchars($_POST['description']);
            
            // Validate name and description
            if (empty($name)) {
                $this->errorResponse('Name is required.', 400);
                return;
            }
            if (empty($description)) {
                $this->errorResponse('Description is required.', 400);
                return;
            }
            
            $postModel = new Post();
            $postModel->savePost($name, $description);
            
            // Return success message
            $this->successResponse('Post created successfully.');
        } else {
            $this->errorResponse('Name and description are required.', 400);
        }
    }

    private function errorResponse($message, $statusCode = 400)
    {
        http_response_code($statusCode);
        echo json_encode(['error' => $message]);
    }

    private function successResponse($message)
    {
        echo json_encode(['message' => $message]);
    }
}
