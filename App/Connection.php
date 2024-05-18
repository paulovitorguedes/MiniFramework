<?php

namespace App;
use PDO;
use PDOException;

class Connection
{
    public function getDb()
    {
        try {
            $conn = new PDO(
                "mysql:host=localhost;
                dbname=mvc;
                charset=utf8",
                "admin","admin123"
            );
            return $conn;

        } catch (PDOException $e) {
            //Implementar tratativas
        }
    }
}