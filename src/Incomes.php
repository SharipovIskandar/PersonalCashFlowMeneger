<?php

namespace PM;

use PDO;

class Incomes
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function recordIncome(string $income)
    {
        $stmt = $this->pdo->prepare("INSERT INTO incomes (income) VALUES (:income)");
        $stmt->bindParam(':income', $income);
        if($stmt->execute()){
            return true;
        }
        return false;
    }
}