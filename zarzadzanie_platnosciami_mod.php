<?php
	include('baza.php');
	$id=$_GET['id'];
 
	$platnosc=$_POST['platnosc'];
 
	mysqli_query($conn,"update `platnosci` set nazwa_platnosci='$platnosc' where id_platnosc='$id'");
	header('location:zarzadzanie_platnosciami.php');
?>