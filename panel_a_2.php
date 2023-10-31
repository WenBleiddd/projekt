<?php
require_once 'baza.php';
?>

<?php
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
font-family: 'Montserrat', sans-serif;
margin:0px;
background-color:white;
}

.wyloguj{
float:right;
border:none;
background-color:#191919;
color:white;
padding:10px;
}

.przycisk{
border:none;
background-color:#191919;
color:white;
padding:10px;
width:200px;
margin-left:50px;
}

.panel{
border:none;
background-color:#BF360C;
color:white;
font-weight:bold;
margin-right:55px;
}

.wyloguj:hover, .panel:hover, .przycisk:hover{
background-color:#FF7043;
color:black;
}

.menu {
  background-color: #BF360C;
  overflow: auto;
  white-space: nowrap;
}

.menu a {
  display: inline-block;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.A{
font-size:14px;
color:white;
font-weight:100;
}

.A:hover{
font-weight:900;
}
</style>

</head>

<body>

<script src="strony.js"></script>

<header>

<div class="menu">
  <a href="panel_a.php" class="panel">PANEL ADMINISTRATORA</a>
  <a href="zarzadzanie_klientami.php" class="A">Zarządzanie klientami</a>|
  <a href="zarzadzanie_produktami.php" class="A">Zarządzanie produktami</a>|
  <a href="zarzadzanie_kategoriami.php" class="A">Zarządzanie kategoriami</a>|
  <a href="zarzadzanie_parametrami.php" class="A">Zarządzanie parametrami</a>|
  <a href="" class="A">Dostawa i płatność</a>
  <a href="wyloguj_a.php" class="wyloguj">WYLOGUJ</a>


</div>

</header>

<aside>

<h2 style="margin-left:30px; margin-top:30px;">Informacje o koncie:</h2>
<br>
<?php 
  include('baza.php');
 
	$imie=$_SESSION['imie'];
	$nazwisko=$_SESSION['nazwisko'];
  $numer=$_SESSION['numer'];
	$email=$_SESSION['email'];
?>
                        <aside style="margin-left:50px;">
                        <b>Login: </b><?php echo $_SESSION['login']; ?>
                        <br>
                        <br>
                        <b>Imię: </b><?php echo $imie; ?>
                        <br>
                        <br>
                        <b>Nazwisko: </b><?php echo $nazwisko; ?>
                        <br>
                        <br>
                        <b>Numer telefonu: </b><?php echo $numer; ?>
                        <br>
                        <br>
                        <b>Adres e-mail: </b><?php echo $email; ?>
                        </aside>

                        <br>
<h2 style="margin-left:30px; margin-top:30px;">Dodawanie podstron:</h2>
<br>

<button class="przycisk" onclick="pokaż()">Dodaj stronę informacyjną</button>
<br>
<br>
<button class="przycisk" onclick="pokaż2()">Dodaj regulamin</button>

</aside>

</body>

</html>