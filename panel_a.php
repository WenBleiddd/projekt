<?php
session_start();
if (!isset($_SESSION['login'])) {
    // Jeśli nie jest zalogowany, przekieruj go do strony logowania
    header("Location: logowanie_k.php");
    exit();
}

// Sprawdź, czy użytkownik ma poziom dostępu administratora
if ($_SESSION['rola'] !== 'administrator') {
    // Jeśli nie jest administratorem, przekieruj go gdzieś indziej lub zablokuj dostęp
    header("Location: index.html");
    exit();
}
    ?>
<html>

<head>

<meta charset="utf-8">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<style>

html{
margin-top:200px;
font-family: 'Montserrat', sans-serif;

}

.przycisk{
border:none;
background-color:#191919;
color:white;
padding:10px;
margin-top:10px;
margin-bottom:-10px;
}

.przycisk:hover{
background-color:#FF7043;
}


</style>

</head>

<body>

<center>

<h2>Panel administratora</h2>

<form action="wyloguj_a.php" method="post">

<button class="przycisk" style="font-family: 'Montserrat', sans-serif; font-weight:bold;">WYLOGUJ</button>

</form>

</center>

</body>

</html>