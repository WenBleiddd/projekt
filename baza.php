<?php

$host = 'localhost';
$dbname = 'projekt_sklep';
$user = 'root';
$pass = '';
$conn = mysqli_connect("localhost","root","","projekt_sklep");

try {
    $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
    $pdo->query('SET NAMES utf8');
} catch (PDOException $e) {
    echo 'Połączenie nie zostało nawiązane: ' . $e->getMessage();
    exit();
}
?>
