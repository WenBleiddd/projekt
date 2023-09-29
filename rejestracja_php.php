<?php
include('baza.php');
$mysqli = new mysqli("localhost","root","","projekt_sklep");
$bd = $conn;
$imie = dod($_POST['imie']);
$nazwisko = dod($_POST['nazwisko']);
$numer = dod($_POST['numer']);
$email = dod($_POST['email']);
$login = dod($_POST['login']);
$haslo = dod($_POST['haslo']);
   
if(!empty($imie) && !empty($nazwisko) && !empty($numer) && !empty($email) && !empty($login) && !empty($haslo)){
   
w_dane($imie, $nazwisko, $numer, $email, $login, $haslo);
}else{
 echo "<h3 style='color:red; font-size:13px; margin-top:-21px; margin-bottom:-15px;'>Należy uzupełnić wszystkie pola</h3>";
}
 

function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($imie, $nazwisko, $numer, $email, $login, $haslo){
 
    global $bd;
    $query="INSERT INTO klienci(IMIE, NAZWISKO, NUMER, EMAIL, LOGIN, HASLO) VALUES('$imie', '$nazwisko', '$numer', '$email', '$login', '$haslo')";
    $execute=mysqli_query($bd,$query);
 }
?>