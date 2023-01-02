<?php 

$dsn = 'mysql:host=localhost;dbname=formation;charset=UTF8';

    try {
        $pdo = new PDO($dsn, "root", "tiger", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_FOUND_ROWS => true
            ]
        )
        ;

        session_start();

    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }


?>