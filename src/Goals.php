<?php

namespace PM;

use Cassandra\Date;
use PDO;

class Goals
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function create(string $name, string $description, int $user_id, date $date)
    {
        $sql = "INSERT INTO goals(name, description ,user_id ,date  ,created_at)
                values(:name, :description, :user_id, :date, NOW())";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->bindParam(":date", $date);
        $stmt->execute();
        return $this->pdo->lastInsertId();
    }
}