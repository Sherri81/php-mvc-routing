<?php

class Product
{
    public function getData(): array 
    {
        
            $dsn = "mysql:
            host=localhost;
            dbname=adv_php;
            charset=utf8;
            port=3306";

            $pdo = new PDO($dsn, "adv_php_user", "QnepmMdV", [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);

            $stmt = $pdo->query("SELECT * FROM `products`");

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}