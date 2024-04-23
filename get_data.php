<?php
$host = 'localhost';
$db = 'algebra';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    echo "Ошибка подключения к БД".$e->getMessage();
    exit();
}

$stmt = $pdo->query("SELECT * FROM subject WHERE id = 1");
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt2 = $pdo->query("SELECT * FROM subject WHERE id = 2");
$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

$stmt3 = $pdo->query("SELECT * FROM subject WHERE id = 3");
$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);

$stmt4 = $pdo->query("SELECT * FROM subject WHERE id = 4");
$row4 = $stmt4->fetch(PDO::FETCH_ASSOC);

$stmt5 = $pdo->query("SELECT * FROM subject WHERE id = 5");
$row5 = $stmt5->fetch(PDO::FETCH_ASSOC);

$stmt6 = $pdo->query("SELECT * FROM subject WHERE id = 6");
$row6 = $stmt6->fetch(PDO::FETCH_ASSOC);

$stmt7 = $pdo->query("SELECT * FROM subject WHERE id = 7");
$row7 = $stmt7->fetch(PDO::FETCH_ASSOC);

$stmt8 = $pdo->query("SELECT * FROM subject WHERE id = 8");
$row8 = $stmt8->fetch(PDO::FETCH_ASSOC);

$stmt9 = $pdo->query("SELECT * FROM subject WHERE id = 9");
$row9 = $stmt9->fetch(PDO::FETCH_ASSOC);

$stmt10 = $pdo->query("SELECT * FROM subject WHERE id = 10");
$row10 = $stmt10->fetch(PDO::FETCH_ASSOC);

$stmt11 = $pdo->query("SELECT * FROM subject WHERE id = 11");
$row11 = $stmt11->fetch(PDO::FETCH_ASSOC);

$stmt12 = $pdo->query("SELECT * FROM subject WHERE id = 12");
$row12 = $stmt12->fetch(PDO::FETCH_ASSOC);

$stmt13 = $pdo->query("SELECT * FROM subject WHERE id = 13");
$row13 = $stmt13->fetch(PDO::FETCH_ASSOC);

$stmt14 = $pdo->query("SELECT * FROM subject WHERE id = 14");
$row14 = $stmt14->fetch(PDO::FETCH_ASSOC);

$stmt15 = $pdo->query("SELECT * FROM subject WHERE id = 15");
$row15 = $stmt15->fetch(PDO::FETCH_ASSOC);
?>