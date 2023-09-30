
<html>

<head>

<meta charset="utf-8">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<style>

html{
margin-top:200px;
font-family: 'Montserrat', sans-serif;

}

p{
margin-bottom:2px;
margin-top:20px;
color:#3F3F3F;
}

fieldset{
width:200px;
}

.pole{
border:none;
background-color:#DEDEDE;
}

.przycisk{
border:none;
background-color:#191919;
color:white;
padding:10px;
margin-top:10px;
margin-bottom:-10px;
margin-left:2.2px;
margin-right:2.2px;
}

.przycisk:hover{
background-color:#5C6BC0;
}

h5{
margin-top:-20px;
margin-bottom:30px;
color:#1A237E;
}

.A{
position:absolute;
z-index:-2;
background-color:#9FA8DA;
width:450px;
height:450px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

.B{ 
position:absolute;
z-index:-1;
background-color:white;
width:400px;
height:400px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

</style>

</head>

<body>

<center>

<div class="A">
<div class="B"></div>
</div>

<div class="login">

<fieldset><legend><label><h1>LOGOWANIE</h1></label></legend>

<form action="logowanie_k_php.php" method="post">


<p>Login</p>

<label for="login"></label>

<input class="pole" type="text" name="login" id="login" required>


<p>Hasło</p>

<label for="haslo"></label>

<input class="pole" type="password" name="haslo" id="haslo" required>

<a href="resetowanie.php" style="text-decoration:none;"><h6 style="color:red; font-size:10px; margin-bottom:-35px; margin-top:5px;">Nie pamiętam hasła</h6></a>

<br>
<br>

<a href="panel_k.php"><button class="przycisk" style="font-family: 'Montserrat', sans-serif; font-weight:bold; " id="logowanie_p" style="font-weight:bold;" type="submit">ZALOGUJ</button></a>

</fieldset>

</form>

</div>
<div style="text-align: center;">
<a href="index.html"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin:10px 0" class="przycisk" id="logowanie_p" style="font-weight:bold; "  >POWRÓT</button></a>
<a href="rejestracja.php"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold;  margin:10px 0" class="przycisk" id="rejestracja_p" style="font-weight:bold;" type="submit">REJESTRACJA</button></a>
</div>
</center>


</body>

</html>