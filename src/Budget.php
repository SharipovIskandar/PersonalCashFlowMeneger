<?php

namespace PM;

use Cassandra\Date;
use PDO;

class Budget
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $name, string $description, int $amount, string $start_date, string $end_date, int $user_id)
    {
        $sql = "INSERT INTO budgets (name, description, amount, start_date, end_date, user_id, updated_at) values (:name, :description, :amount, :start_date, :end_date,:user_id, NOW())";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':amount', $amount);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }

    public function getBudgets()
    {
        $sql = "SELECT * FROM budgets";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete(int $id)
    {
        $query = "DELETE FROM budgets WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return true;
    }
}