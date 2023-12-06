<?php
	include('baza.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `parametry` where id_parametrow='$id'");
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
  margin-top:150px;
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
height:500px;
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
height:450px;
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

    <fieldset><legend><label><h1>MODYFIKACJA PARAMETRÓW</h1></label></legend>
	<form method="POST" action="zarzadzanie_parametrami_mod.php?id=<?php echo $id; ?>"><b>
      <br>
      <label style="font-weight:100" for="parametry">Parametry</label>
      <br>
      <textarea class="pole" type="text" name="parametry" id="parametry" value="<?php echo $row['parametry']; ?>" class="text ui-widget-content ui-corner-all"></textarea>
      <br>
      <br>
      <label style="font-weight:100" for="id_produktu">Id produktu</label>
      <br>
      <input class="pole" type="number" name="id_produktu" id="id_produktu" value="<?php echo $row['id_produktu']; ?>" class="text ui-widget-content ui-corner-all">
      <br>
      <br>
      <br></b>
      <input type="submit" name="submit" id="przycisk" value="ZMIEŃ">
      <a href="zarzadzanie_parametrami.php"><input type="submit" name="submit" id="przycisk2" value="WRÓĆ"></a>
	</form>
  </fieldset>
</center>
</body>
</html>