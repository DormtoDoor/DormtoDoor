<?php 

$dsn = "mysql:host=192.168.57.128;dbname=DormToDoorMovingCompany";
$dbusername = "root";
$dbpassword = "myPassword123";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection successful";
} catch(PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}
