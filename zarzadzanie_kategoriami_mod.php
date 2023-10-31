<<<<<<< Updated upstream
<?php
	include('baza.php');
	$id=$_GET['id'];
 
	$kategoria=$_POST['kategoria'];
 
	mysqli_query($conn,"update `kategoria` set kategoria='$kategoria' where id_kategorii='$id'");
	header('location:zarzadzanie_kategoriami.php');
=======
<?php
	include('baza.php');
	$id=$_GET['id'];
 
	$kategoria=$_POST['kategoria'];
 
	mysqli_query($conn,"update `kategoria` set kategoria='$kategoria' where id_kategorii='$id'");
	header('location:zarzadzanie_kategoriami.php');
>>>>>>> Stashed changes
?>