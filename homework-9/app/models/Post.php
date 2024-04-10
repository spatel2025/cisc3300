<?php

namespace app\models;

class Post
{
    public $id;
    public $title;
    public $description;
    public $created_at;
    private $pdo;

    public function __construct() {
        // Set up the database connection
        $this->pdo = new \PDO("mysql:host=localhost;dbname=homework_9", "root", "root");
    }

    public function findAll() {
        $stmt = $this->pdo->query("SELECT * FROM posts");
        return $stmt->fetchAll(\PDO::FETCH_CLASS, self::class);
    }

    public function findById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM posts WHERE id = ?");
        $stmt->execute([$id]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, self::class);
        return $stmt->fetch();
    }

    public function save() {
        if ($this->id) {
            $stmt = $this->pdo->prepare("UPDATE posts SET title = ?, description = ? WHERE id = ?");
            $stmt->execute([$this->title, $this->description, $this->id]);
        } else {
            $stmt = $this->pdo->prepare("INSERT INTO posts (title, description) VALUES (?, ?)");
            $stmt->execute([$this->title, $this->description]);
            $this->id = $this->pdo->lastInsertId();
        }
    }

    public function delete() {
        $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id = ?");
        $stmt->execute([$this->id]);
    }
}
