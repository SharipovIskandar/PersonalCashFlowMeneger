<?php

namespace PM;

use PDO;

class Expense_categories
{
    private PDO $pdo;
    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $name): bool|array|string|int
    {
        $finalName = strtolower($name);

        $stmt = $this->pdo->prepare("SELECT id FROM expense_categories WHERE name = :name");
        $stmt->bindParam(':name', $finalName);
        $stmt->execute();

        $existing = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existing) {
            return $existing['id'];
        }
        $stmt = $this->pdo->prepare("INSERT INTO expense_categories (name) VALUES (:name)");
        $stmt->bindParam(':name', $finalName);
        $stmt->execute();

        return $this->pdo->lastInsertId();
    }

}