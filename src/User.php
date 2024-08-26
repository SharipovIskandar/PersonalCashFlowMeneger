<?php

declare(strict_types=1);

namespace PM;

use PDO;

class User
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }

    public function createUser(
        string $name,
        string $lastName,
        string $gender,
        string $email,
        string $password,
    ): bool|array|object
    {
        $query = "INSERT INTO users (name, lastName, email, gender, password, created_at)
                  VALUES (:name, :lastName, :email, :gender, :password, NOW())";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':lastName', $lastName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':password', $password);
        if($stmt->execute())
        {
            return true;
        }
        return false;
    }


    public function getUser(int $id)
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser(
        int    $id,
        string $username,
        string $position,
        string $gender,
        string $phone
    ): void {
        $query = "UPDATE users SET username = :username, position = :position, gender = :gender, phone = :phone, updated_at = NOW()
                  WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':position', $position);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function checkUser(string $email, string $password)
    {
        $sql = "SELECT * from `users` where email = :email;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user && $password === $user['password'];

    }

    public function deleteUser(int $id): void
    {
        $query = "DELETE FROM users WHERE id = :id";
        $stmt  = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }


    public function getUserId(string $email)
    {
        $sql = "SELECT id FROM `users` WHERE email = :email;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        if($stmt->execute())
        {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user ? $user['id'] : false;
        }
        return false;
    }

}
