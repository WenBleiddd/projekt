<<<<<<< Updated upstream
<?php
	$id=$_GET['id'];
	include('baza.php');
	mysqli_query($conn,"delete from `kategoria` where id_kategorii='$id'");
	header('location:zarzadzanie_kategoriami.php');
=======
<?php
	$id=$_GET['id'];
	include('baza.php');
	mysqli_query($conn,"delete from `kategoria` where id_kategorii='$id'");
	header('location:zarzadzanie_kategoriami.php');
>>>>>>> Stashed changes
?>