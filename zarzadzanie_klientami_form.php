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
  margin-top:70px;
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
}

.A{
position:absolute;
z-index:-2;
background-color:#FFAB91;
width:450px;
height:650px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
margin-top:15px;
}

.B{ 
position:absolute;
z-index:-1;
background-color:white;
width:400px;
height:600px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

.pole{
border:none;
background-color:#DEDEDE;
}

</style>

</head>
<body>
    <center>
    <div class="A">
<div class="B"></div>
</div>

    <fieldset><legend><label><h1>MODYFIKACJA DANYCH KLIENTA</h1></label></legend>
	<form method="POST" action="zarzadzanie_klientami_mod.php?id=<?php echo $id; ?>"><b>
    <label style="font-weight:100" for="id">Id</label>
    <br>
      <input class="pole" type="number" name="id" id="id" value="<?php echo $row['ID_klient']; ?>" class="text ui-widget-content ui-corner-all">
      <br>
      <br>
      <label style="font-weight:100" for="imie">Imię</label>
      <br>
      <input class="pole" type="text" name="imie" id="imie" value="<?php echo $row['imie']; ?>" class="text ui-widget-content ui-corner-all">
      <br>
      <br>
      <label style="font-weight:100" for="nazwisko">Nazwisko</label>
      <br>
      <input class="pole" type="text" name="nazwisko" id="nazwisko" value="<?php echo $row['nazwisko']; ?>" class="text ui-widget-content ui-corner-all">
      <br>
      <br>
      <label style="font-weight:100" for="numer">Numer telefonu</label>
      <br>
      <input class="pole" type="tel" name="numer" id="numer" value="<?php echo $row['numer']; ?>" class="text ui-widget-content ui-corner-all">     
      <br>
      <br>
      <label style="font-weight:100" for="email">Adres e-mail</label>
      <br>
      <input class="pole" type="email" name="email" id="email" value="<?php echo $row['email']; ?>" class="text ui-widget-content ui-corner-all">
      <br>
      <br>
      <label style="font-weight:100" for="login">Login</label>
      <br>
      <input class="pole" type="text" name="login" id="login" value="<?php echo $row['login']; ?>" class="text ui-widget-content ui-corner-all">
      <br>
      <br>
      <br></b>
      <input type="submit" name="submit" id="przycisk" value="ZMIEŃ">
      <a href="zarzadzanie_klientami.php"><input type="submit" name="submit" id="przycisk2" value="WRÓĆ"></a>
	</form>
  </fieldset>
</center>
</body>
</html>