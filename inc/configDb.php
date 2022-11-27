<?php

$host = 'localhost:3306';
$Db = 'marche_ou_cepes';
$user = 'root';
$password = 'root';

$connection = "mysql:host=$host;dbname=$Db;charset=UTF8";

try {
    $pdo = new PDO($connection, $user, $password);
    if ($pdo) {
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
} catch (PDOException $error) {
    echo $error->getCode() . ' ' . $error->getMessage();
    exit;
}