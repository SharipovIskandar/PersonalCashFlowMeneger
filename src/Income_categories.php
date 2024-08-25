<?php

namespace PM;

use PDO;

class Income_categories
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $name): bool|array|string|int
    {
        $finalName = strtolower($name);

        $stmt = $this->pdo->prepare("SELECT id FROM income_categories WHERE name = :name");
        $stmt->bindParam(':name', $finalName);
        $stmt->execute();

        $existing = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existing) {
            return $existing['id'];
        }
        $stmt = $this->pdo->prepare("INSERT INTO income_categories (name) VALUES (:name)");
        $stmt->bindParam(':name', $finalName);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }
}