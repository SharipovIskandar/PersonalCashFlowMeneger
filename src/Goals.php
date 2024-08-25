<?php

namespace PM;

use PDO;

class Goals
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DB::connect();
    }
}