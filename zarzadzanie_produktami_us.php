<?php
	$id=$_GET['id'];
	include('baza.php');
	mysqli_query($conn,"delete from `produkty` where id_produktu='$id'");
	header('location:zarzadzanie_produktami.php');
?>