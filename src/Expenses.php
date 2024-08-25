<?php

namespace PM;

use PDO;

class Expenses
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }
}