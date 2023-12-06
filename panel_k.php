<?php
include 'baza.php';
session_start();

$user_id = $_SESSION['id_klient'];

// Pobierz informacje o użytkowniku
$user_query = "SELECT * FROM klienci WHERE ID_klient = $user_id";
$user_result = mysqli_query($conn, $user_query);
$user_data = mysqli_fetch_assoc($user_result);

// Sprawdź, czy formularz został przesłany
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Pobierz dane z formularza
    $new_imie = $_POST['imie'];
    $new_nazwisko = $_POST['nazwisko'];
    $new_email = $_POST['email'];

    // Zaktualizuj dane w bazie danych
    $update_query = "UPDATE klienci SET imie = '$new_imie', nazwisko = '$new_nazwisko', email = '$new_email' WHERE ID_klient = $user_id";
    mysqli_query($conn, $update_query);

    // Odśwież dane użytkownika
    $user_result = mysqli_query($conn, $user_query);
    $user_data = mysqli_fetch_assoc($user_result);
}

?>
<html>
<head>
<meta charset="utf-8">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
<style>
<style>

html{
font-family: 'Montserrat', sans-serif;
margin:0px;
background-color:white;
}

.wyloguj{
float:right;
border:none;
background-color:#191919;
color:white;
padding:10px;
}

.przycisk{
border:none;
background-color:#191919;
color:white;
padding:10px;
width:200px;
margin-left:50px;
}

.panel{
border:none;
background-color:#1A237E;
color:white;
font-weight:bold;
margin-right:55px;
}

.wyloguj:hover, .panel:hover, .przycisk:hover{
background-color:#5C6BC0;
color:black;
}

.menu {
  background-color: #1A237E;
  overflow: auto;
  white-space: nowrap;
}

.menu a {
  display: inline-block;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

.A{
font-size:14px;
color:white;
font-weight:100;
}

.A:hover{
font-weight:900;
}
</style>
</style>
</head>
<body>
    <header>

<div class="menu">
  <a href="panel_k.php" class="panel">PANEL KLIENTA</a>
  <a href="zarzadzanie_produktami2.php" class="A">Katalog produktów</a>|
  <a href="wysylka.php" class="A">Dane wysyłki</a>|
  <a href="historia.php" class="A">Historia zamówień</a>|
  <a href="ulubione.php" class="A">Ulubione</a>|
  <a href="index.php" class="A">Produkt</a>|
  <a href="koszyk.php" class="A">Koszyk</a>
  <a href="wyloguj_a.php" class="wyloguj">WYLOGUJ</a>


</div>

</header>

<aside>

<h2 style="margin-left:30px; margin-top:30px;">Informacje o koncie:</h2>
<br>
                        <aside style="margin-left:50px;">
                        <b>Login: </b><?php echo $user_data['login']; ?>
                        <br>
                        <br>
                        <b>Imię: </b><?php echo $user_data['imie']; ?>
                        <br>
                        <br>
                        <b>Nazwisko: </b><?php echo $user_data['nazwisko']; ?>
                        <br>
                        <br>
                        <b>Numer telefonu: </b><?php echo $user_data['numer']; ?>
                        <br>
                        <br>
                        <b>Adres e-mail: </b><?php echo $user_data['email']; ?>
                        </aside>

                        <br>


</aside>
<center>
    
    <h2>Edytuj dane osobowe:</h2>
    <form method="post" action="">
        <label for="imie">Nowe imię:</label>
        <input type="text" name="imie" value="<?php echo $user_data['imie']; ?>" required><br>

        <label for="nazwisko">Nowe nazwisko:</label>
        <input type="text" name="nazwisko" value="<?php echo $user_data['nazwisko']; ?>" required><br>

        <label for="email">Nowy email:</label>
        <input type="email" name="email" value="<?php echo $user_data['email']; ?>" required><br>

        <input type="submit" class="przycisk" value="Zapisz zmiany">
    </form>

    <a href="zamowienie.php">
        <button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin-top:10px" class="przycisk">ZAMÓW</button>
    </a>
</center>
</body>
</html>
