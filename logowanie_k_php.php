<?php
session_start();

include "baza.php";

if (isset($_POST['login']) && isset($_POST['haslo'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $login = validate($_POST['login']);
    $haslo = validate($_POST['haslo']);

    if (empty($login) || empty($haslo)) {
        header("Location: logowanie_k.php?error=empty");
        
    } else {

        $sql = "SELECT * FROM klienci WHERE login='$login'";
        $result_klient = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM pracownicy WHERE login='$login'";
        $result_administrator = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result_klient) === 1) {
            $row = mysqli_fetch_assoc($result_klient);
            $hashed_password = $row['haslo']; 
            if (password_verify($haslo, $hashed_password)) {
                $_SESSION['login'] = $row['login'];
                header("Location: panel_k.php");
               exit();
            }
        } elseif (mysqli_num_rows($result_administrator) === 1) {
            $row = mysqli_fetch_assoc($result_administrator);
            $hashed_password = $row['haslo']; 
            
            if (password_verify($haslo, $hashed_password)) {
                $_SESSION['login'] = $row['login'];
                $_SESSION['rola'] = 'administrator';
                header("Location: panel_a.php");
               exit();
            }
        } else {
           echo "abc";
        }
    }

} else {
    
   
    exit();
}
?>
