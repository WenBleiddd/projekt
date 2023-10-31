<?php
include('baza.php');
$mysqli = new mysqli("localhost", "id21332739_admin", "zaq1@WSX", "id21332739_projekt_sklep");
$bd = $conn;


$imie = validateInput($_POST['imie']);
$nazwisko = validateInput($_POST['nazwisko']);
$numer = validateNumber($_POST['numer']);
$email = validateEmail($_POST['email']);
$login = validateInput($_POST['login']);
$haslo = validateInput($_POST['haslo']);


if (!empty($imie) && !empty($nazwisko) && !empty($numer) && !empty($email) && !empty($login) && !empty($haslo)) {
    echo "rejestracja udana";
    w_dane($imie, $nazwisko, $numer, $email, $login, $haslo);
} else {
    echo "<h3 style='color:red; font-size:13px; margin-top:-21px; margin-bottom:-15px;'>Należy uzupełnić wszystkie pola</h3>";
}


function validateInput($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

function validateNumber($value)
{
    $value = validateInput($value);
    if (preg_match('/^\d{9}$/', $value)) {
        return $value;
    } else {
        echo "<h3 style='color:red; font-size:13px; margin-top:-21px; margin-bottom:-15px;'>Numer musi mieć dokładnie 9 cyfr</h3>";
        exit();
    }
}


function validateEmail($value)
{
    $value = validateInput($value);
    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
        return $value;
    } else {
        echo "<h3 style='color:red; font-size:13px; margin-top:-21px; margin-bottom:-15px;'>Nieprawidłowy format adresu e-mail</h3>";
        exit(); 
}
}

function w_dane($imie, $nazwisko, $numer, $email, $login, $haslo)
{
    global $bd;

   

  
    $haslo_hashed = password_hash($haslo, PASSWORD_DEFAULT);
    
    $query = "INSERT INTO klienci(IMIE, NAZWISKO, NUMER, EMAIL, LOGIN, HASLO) VALUES('$imie', '$nazwisko', '$numer', '$email', '$login', '$haslo_hashed')";
    $execute = mysqli_query($bd, $query);
}
?>
