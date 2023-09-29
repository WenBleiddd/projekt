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
background-color:#A4A4A4;
}


.A{
position:absolute;
z-index:-2;
background-color:gray;
width:350px;
height:350px;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
}

.B{ 
position:absolute;
z-index:-1;
background-color:white;
width:300px;
height:300px;
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

<div class="reset">

<fieldset style="margin-top:40px;"><legend><label><h1 style="font-size:25px;">RESETOWANIE HASŁA</h1></label></legend>

<form action="resetowanie_php.php" method="post">


<p style="margin-top:10px;">Adres e-mail</p>

<label for="email"></label>

<input class="pole" type="email" name="email" id="email" required>

<input style="margin-top:35px; font-family: 'Montserrat', sans-serif; font-weight:bold; " type="submit" value="WYŚLIJ" name="wyslij" class="przycisk"></input>

</fieldset>

</form>

</div>

</center>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="rejestracja_skrypt.js"></script>

</body>

</html>