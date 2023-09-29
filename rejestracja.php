<html>

<head>

<meta charset="utf-8">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<style>

html{
margin-top:80px;
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
margin-bottom:10px;
margin-left:2.6px;
margin-right:2.6px;
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
height:650px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
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

</style>

</head>

<body>

<center>

<div class="A">
<div class="B"></div>
</div>

<div class="login">

<fieldset><legend><label><h1>REJESTRACJA</h1></label></legend>

<form id="userForm" method="POST">
<p id="msg"></p>

<p>Imię</p>

<label for="imie"></label>

<input class="pole" type="text" name="imie" id="imie" required>

<p>Nazwisko</p>

<label for="nazwisko"></label>

<input class="pole" type="text" name="nazwisko" id="nazwisko" required>

<p>Numer </p>

<label for="numer"></label>

<input class="pole" type="number" name="numer" id="numer" maxlength="9" required>

<p>Adres e-mail</p>

<label for="email"></label>

<input class="pole" type="email" name="email" id="email" required>

<p>Login</p>

<label for="login"></label>

<input class="pole" type="text" name="login" id="login" required>

<p>Hasło</p>

<label for="haslo"></label>

<input class="pole" type="password" name="haslo" id="haslo" required>

<br>
<br>

<a href="logowanie_k.php"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold;" class="przycisk" id="rejestracja_p" style="font-weight:bold;" type="submit">ZAREJESTRUJ</button></a>

</fieldset>

</form>

</div>

<a href="index.html"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin-right:-130px; margin-top:-53px" class="przycisk" id="logowanie_p" style="font-weight:bold;">POWRÓT</button></a>
<a href="logowanie_k.php"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin-left:-95px;" class="przycisk" id="rejestracja_p" style="font-weight:bold;" type="submit">LOGOWANIE</button></a>
</center>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="rejestracja_skrypt.js"></script>

</body>

</html>