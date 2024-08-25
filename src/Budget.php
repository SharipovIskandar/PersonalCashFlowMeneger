<?php

namespace PM;

use PDO;

class Budget
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }
}