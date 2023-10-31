<<<<<<< Updated upstream
<?php
	include('baza.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `klienci` where ID_klient='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

<style>
html{
  font-family: 'Montserrat', sans-serif;
  margin-top:100px;
}

#przycisk{
  border:none;
background-color:#191919;
color:white;
padding:10px;
margin-top:10px;
margin-bottom:-10px;
font-family: 'Montserrat', sans-serif;
font-weight:bold;
margin-bottom:10px;
margin-right:5px;
}

#przycisk:hover{
  background-color:green;
  border-color:green;
  color:white;
  text-decoration:none;
}

#przycisk2{
  border:none;
background-color:#191919;
color:white;
padding:10px;
margin-top:10px;
margin-bottom:-10px;
font-family: 'Montserrat', sans-serif;
font-weight:bold;
}

#przycisk2:hover{
  background-color:red;
  border-color:red;
  color:white;
  text-decoration:none;
}

fieldset{
width:300px;
margin-top:25px;
}

.A{
position:absolute;
z-index:-2;
background-color:#FFAB91;
width:450px;
height:550px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

.B{ 
position:absolute;
z-index:-1;
background-color:white;
width:400px;
height:500px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

.pole{
border:none;
background-color:#DEDEDE;
}

h5{
margin-top:-20px;
margin-bottom:30px;
color:#BF360C;
}

</style>

</head>
<body>
    <center>
    <div class="A">
<div class="B"></div>
</div>

    <fieldset><legend><label><h1>MODYFIKACJA DANYCH KLIENTA</h1></label></legend>
    <h5>DODAWANIE NOTATKI</h5>
	<form method="POST" action="zarzadzanie_klientami_mod_notatka.php?id=<?php echo $id; ?>"><b>

      <label style="font-weight:100" for="notatka">Notatka</label>
      <br>
      <textarea style="width:250px; height:150px;" class="pole" name="notatka" id="notatka" value="<?php echo $row['notatka']; ?>" class="text ui-widget-content ui-corner-all"></textarea>
      <br>
      <br>
      <br></b>
      <input type="submit" name="submit" id="przycisk" value="DODAJ">
      <a href="zarzadzanie_klientami.php"><input type="submit" name="submit" id="przycisk2" value="WRÓĆ"></a>
	</form>
  </fieldset>
</center>
</body>
=======
<?php
	include('baza.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `klienci` where ID_klient='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

<style>
html{
  font-family: 'Montserrat', sans-serif;
  margin-top:100px;
}

#przycisk{
  border:none;
background-color:#191919;
color:white;
padding:10px;
margin-top:10px;
margin-bottom:-10px;
font-family: 'Montserrat', sans-serif;
font-weight:bold;
margin-bottom:10px;
margin-right:5px;
}

#przycisk:hover{
  background-color:green;
  border-color:green;
  color:white;
  text-decoration:none;
}

#przycisk2{
  border:none;
background-color:#191919;
color:white;
padding:10px;
margin-top:10px;
margin-bottom:-10px;
font-family: 'Montserrat', sans-serif;
font-weight:bold;
}

#przycisk2:hover{
  background-color:red;
  border-color:red;
  color:white;
  text-decoration:none;
}

fieldset{
width:300px;
margin-top:120px;
}

.A{
position:absolute;
z-index:-2;
background-color:#FFAB91;
width:450px;
height:550px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

.B{ 
position:absolute;
z-index:-1;
background-color:white;
width:400px;
height:500px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

.pole{
border:none;
background-color:#DEDEDE;
}

h5{
margin-top:-20px;
margin-bottom:30px;
color:#BF360C;
}

</style>

</head>
<body>
    <center>
    <div class="A">
<div class="B"></div>
</div>

    <fieldset><legend><label><h1>MODYFIKACJA DANYCH KLIENTA</h1></label></legend>
    <h5>DODAWANIE NOTATKI</h5>
	<form method="POST" action="zarzadzanie_klientami_mod_notatka.php?id=<?php echo $id; ?>"><b>

      <label style="font-weight:100" for="notatka">Notatka</label>
      <br>
      <textarea style="width:250px; height:150px;" class="pole" name="notatka" id="notatka" value="<?php echo $row['notatka']; ?>" class="text ui-widget-content ui-corner-all"></textarea>
      <br>
      <br>
      <br></b>
      <input type="submit" name="submit" id="przycisk" value="DODAJ">
      <a href="zarzadzanie_klientami.php"><input type="submit" name="submit" id="przycisk2" value="WRÓĆ"></a>
	</form>
  </fieldset>
</center>
</body>
>>>>>>> Stashed changes
</html>