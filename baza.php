<?php

$host = 'localhost';
$dbname = 'id21332739_projekt_sklep';
$user = 'id21332739_admin';
$pass = 'zaq1@WSX';
$conn = mysqli_connect("localhost","id21332739_admin","zaq1@WSX","id21332739_projekt_sklep");

try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
    $pdo->query('SET NAMES utf8');
} catch (PDOException $e) {
    echo 'Połączenie nie zostało nawiązane: ' . $e->getMessage();
    exit();
}
?>