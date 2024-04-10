<?php

namespace app\controllers;

use app\models\Post;

class PostController
{
    private $pdo;

    public function __construct() {
        $this->pdo = new \PDO("mysql:host=localhost;dbname=homework_9", "root", "root");
    }

    public function validatePost($inputData) {
        $errors = [];
        $title = $inputData['title'];
        $description = $inputData['description'];

        if ($title) {
            $title = htmlspecialchars($title, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($title) < 2) {
                $errors['titleShort'] = 'title is too short';
            }
        } else {
            $errors['titleRequired'] = 'title is required';
        }

        if ($description) {
            $description = htmlspecialchars($description, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($description) < 2) {
                $errors['descriptionShort'] = 'description is too short';
            }
        } else {
            $errors['descriptionRequired'] = 'description is required';
        }

        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        return [
            'title' => $title,
            'description' => $description,
        ];
    }

    public function getPosts($id) {
        header("Content-Type: application/json");

        if ($id) {
            $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id = ?");
            $stmt->execute([$id]);
            $post = $stmt->fetch();
            echo json_encode($post);
        } else {
            $stmt = $this->pdo->query("SELECT * FROM posts");
            $posts = $stmt->fetchAll();
            echo json_encode($posts);
        }

        exit();
    }

    public function savePost() {
        $inputData = [
            'title' => $_POST['title'] ?? false,
            'description' => $_POST['description'] ?? false,
        ];
        $postData = $this->validatePost($inputData);

        $stmt = $this->pdo->prepare("INSERT INTO posts (title, description) VALUES (?, ?)");
        $stmt->execute([$postData['title'], $postData['description']]);

        http_response_code(200);
        echo json_encode(['success' => true]);
        exit();
    }

    public function updatePost($id) {
        if (!$id) {
            http_response_code(404);
            exit();
        }

        parse_str(file_get_contents('php://input'), $_PUT);

        $inputData = [
            'title' => $_PUT['title'] ?? false,
            'description' => $_PUT['description'] ?? false,
        ];
        $postData = $this->validatePost($inputData);

        $stmt = $this->pdo->prepare("UPDATE posts SET title = ?, description = ? WHERE id = ?");
        $stmt->execute([$postData['title'], $postData['description'], $id]);

        http_response_code(200);
        echo json_encode(['success' => true]);
        exit();
    }

    public function deletePost($id) {
        if (!$id) {
            http_response_code(404);
            exit();
        }

        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$id]);

        http_response_code(200);
        echo json_encode(['success' => true]);
        exit();
    }

    public function postsView() {
        include '../public/assets/views/post/posts-view.html';
        exit();
    }

    public function postsAddView() {
        include '../public/assets/views/post/posts-add.html';
        exit();
    }

    public function postsDeleteView() {
        include '../public/assets/views/post/posts-delete.html';
        exit();
    }

    public function postsUpdateView() {
        include '../public/assets/views/post/posts-update.html';
        exit();
    }
}
