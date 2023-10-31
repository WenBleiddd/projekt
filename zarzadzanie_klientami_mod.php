<?php
	include('baza.php');
	$id=$_GET['id'];
 
	$imie=$_POST['imie'];
	$nazwisko=$_POST['nazwisko'];
    $numer=$_POST['numer'];
	$email=$_POST['email'];
    $login=$_POST['login'];
 
	mysqli_query($conn,"update `klienci` set imie='$imie', nazwisko='$nazwisko', numer='$numer', email='$email', login='$login' where ID_klient='$id'");
	header('location:zarzadzanie_klientami.php');
?>