<?php
	include('baza.php');
	$id=$_GET['id'];
 
	$notatka=$_POST['notatka'];

 
	mysqli_query($conn,"update `klienci` set notatka='$notatka' where ID_klient='$id'");
	header('location:zarzadzanie_klientami.php');
?>