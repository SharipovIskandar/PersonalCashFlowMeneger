<?php

namespace PM;

use Cassandra\Date;
use DateTime;
use PDO;

class Incomes
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function recordIncome(int $amount, string $description, int $category_id, int $user_id)
    {
        $stmt = $this->pdo->prepare("INSERT INTO incomes (amount, description, category_id, user_id, created_at) 
                                            VALUES (:amount, :description, :category_id, :user_id, NOW())");
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}