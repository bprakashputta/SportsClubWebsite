<?php
$host = "localhost";
$user = "admin";
$password = "";
$db = "sportsclub";

$pdo = new PDO('mysql:host=localhost;port:8888;dbname=sportsclub', 'bhanu', 'zap');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>
