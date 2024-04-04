<?php

namespace app\models;

class Post
{
    private $pdo;

    public function __construct()
    {
        // Initialize database connection
        $dsn = 'mysql:host=localhost;dbname=your_database_name;charset=utf8mb4';
        $username = 'your_database_username';
        $password = 'your_database_password';
        
        try {
            $this->pdo = new \PDO($dsn, $username, $password);
            // Set PDO to throw exceptions on errors
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function savePost($name, $description)
    {
        $stmt = $this->pdo->prepare("INSERT INTO posts (name, description) VALUES (:name, :description)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);

        try {
            $stmt->execute();
            return true; // Return true on successful insertion
        } catch (\PDOException $e) {
            // Handle database error
            return false; // Return false on failure
        }
    }
}
