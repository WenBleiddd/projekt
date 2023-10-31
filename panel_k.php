<?php
include 'baza.php';
session_start();
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
margin-left:2.2px;
margin-right:2.2px;
}

.przycisk:hover{
background-color:#5C6BC0;
}

</style>

</head>

<body>

<center>

<h2>Panel klienta</h2>

<form action="wyloguj_a.php" method="post">

<button class="przycisk" style="font-family: 'Montserrat', sans-serif; font-weight:bold;">WYLOGUJ</button>
 <br>
    
</form>
<a href="zamowienie.php"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin-top:10px"class="przycisk" style="font-weight:bold;">ZAMÓW</button></a>


</center>

</body>

</html>