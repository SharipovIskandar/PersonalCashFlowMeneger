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
        $stmt = $this->pdo->prepare("INSERT INTO expense_categories (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}