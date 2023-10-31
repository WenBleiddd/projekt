<<<<<<< Updated upstream
<?php
	$id=$_GET['id'];
	include('baza.php');
	mysqli_query($conn,"delete from `parametry` where id_parametrow='$id'");
	header('location:zarzadzanie_parametrami.php');
=======
<?php
	$id=$_GET['id'];
	include('baza.php');
	mysqli_query($conn,"delete from `parametry` where id_parametrow='$id'");
	header('location:zarzadzanie_parametrami.php');
>>>>>>> Stashed changes
?>