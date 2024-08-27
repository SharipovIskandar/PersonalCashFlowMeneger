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

    public function getIncomes(string $email)
    {
        $sql = 'SELECT 
                e.*, 
                u.email
            FROM 
                expenses e
            JOIN 
                users u 
            ON 
                e.user_id = u.id
            WHERE 
                u.email = :email';

        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function getIncomesAmount(string $email = null)
    {
        if($email) {
            $stmt = $this->pdo->prepare("SELECT id FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $userId = $user['id'];

                $stmt = $this->pdo->prepare("SELECT SUM(amount) AS total_amount_inc 
                                      FROM incomes 
                                      WHERE user_id = :user_id");
                $stmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetch(PDO::FETCH_ASSOC);
            }

            return ['total_amount_inc' => 0];
        }

        return null;
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