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
margin-top:-100px;
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
<section>
<fieldset><legend><label><h1>DODAWANIE PRODUKTÓW</h1></label></legend>
<p id="msg"></p>
<form id="userForm" method="POST">
<br>
Nazwa
<br>
<input class="pole" type="text" name="nazwa" class="w_danych">
<br>
<br>
Id kategorii
<label for="id_kategorii"></label>
    <select name="id_kategorii" required>
        <?php
        include ('baza.php');
        $sqlProducts = "SELECT * FROM kategoria";
        $resultProducts = $conn->query($sqlProducts);

        while ($row = $resultProducts->fetch_assoc()) {
            echo '<option value="' . $row['id_kategorii'] . '">' . $row['kategoria'] . '</option>';
        }
        ?>
    </select><br>
<br>
Cena
<br>
<input class="pole" type="number" name="cena" class="w_danych">
<br>
<br>
Producent
<br>
<input class="pole" type="text" name="producent" class="w_danych"></textarea>
<br>
<br>
Materiał
<br>
<input class="pole" type="text" name="materiał" class="w_danych">
<br>
<br>
<button type="submit" id="przycisk">DODAJ</button>
</form>
<a href="zarzadzanie_produktami.php"><button id="przycisk2">WRÓĆ</button></a>
</fieldset>
<br>

<section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="zarzadzanie_produktami_dod_skrypt.js"></script>
</center>
</body>
</html>