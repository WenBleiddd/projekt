<?php 

session_start(); 

include "baza.php";

if (isset($_POST['login']) && isset($_POST['haslo'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $login = validate($_POST['login']);

    $haslo = validate($_POST['haslo']);

    if (empty($login)) {

        header("Location: logowanie_a.php");

        exit();

    }else if(empty($haslo)){

        header("Location: logowanie_a.php");

        exit();

    }else{

        $sql = "SELECT * FROM pracownicy WHERE login='$login' AND haslo='$haslo'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['login'] === $login && $row['haslo'] === $haslo) {

                echo "Logged in!";

                $_SESSION['login'] = $row['login'];

                header("Location: panel_a.php");

                exit();

            }else{

                header("Location: logowanie_a.php");

                exit();

            }

        }else{

            header("Location: logowanie_a.php");

            exit();

        }

    }

}else{

    header("Location: logowanie_a.php");

    exit();

}