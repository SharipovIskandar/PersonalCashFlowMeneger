<?php

namespace PM;

use Cassandra\Date;
use DateTime;
use PDO;

class Expenses
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }
    public function getExpenses()
    {
        return $this->pdo->query('SELECT * FROM expenses')->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getExpensesAmount()
    {
        return $this->pdo->query("SELECT SUM(amount) AS total_amount_exp FROM expenses;")->fetch();
    }
    public function recordExpenses(int $amount, string $description, int $category_id, int $user_id)
    {
        $stmt = $this->pdo->prepare("INSERT INTO expenses (amount, description, category_id, user_id, created_at) 
                                            VALUES (:amount, :description, :category_id, :user_id, NOW())");
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}