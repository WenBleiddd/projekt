<?php
	include('baza.php');
	$id=$_GET['id'];
 
	$nazwa=$_POST['nazwa'];
	$id_kategorii=$_POST['id_kategorii'];
    $cena=$_POST['cena'];
	$producent=$_POST['producent'];
    $materiał=$_POST['materiał'];
 
	mysqli_query($conn,"update `produkty` set nazwa='$nazwa', id_kategorii='$id_kategorii', cena='$cena', producent='$producent', materiał='$materiał' where id_produktu='$id'");
	header('location:zarzadzanie_produktami.php');
?>