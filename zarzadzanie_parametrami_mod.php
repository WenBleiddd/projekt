<?php
	include('baza.php');
	$id=$_GET['id'];
 
	$parametry=$_POST['parametry'];
	$id_produktu = $_POST['id_produktu'];

	mysqli_query($conn,"update `parametry` set parametry='$parametry', id_produktu='$id_produktu' where id_parametrow='$id'");
	header('location:zarzadzanie_parametrami.php');
?>