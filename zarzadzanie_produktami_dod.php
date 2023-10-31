<<<<<<< Updated upstream
<?php
include('baza.php');
$mysqli = new mysqli("localhost","root","","");
$bd = $conn;
$id_produktu = dod($_POST['id_produktu']);
$nazwa = dod($_POST['nazwa']);
$id_kategorii = dod($_POST['id_kategorii']);
$cena = dod($_POST['cena']);
$producent = dod($_POST['producent']);
$materiał = dod($_POST['materiał']);
   
if(!empty($id_produktu) && !empty($nazwa) && !empty($id_kategorii) && !empty($cena) && !empty($producent) && !empty($materiał)){
   
w_dane($id_produktu, $nazwa, $id_kategorii, $cena, $producent, $materiał);
}else{
    echo "<p style='color:red; font-size:13px; margin-top:-30px; margin-bottom:-2px;'>Należy uzupełnić wszystkie pola</p>";
   }

function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($id_produktu, $nazwa, $id_kategorii, $cena, $producent, $materiał){
 
    global $bd;
    $query="INSERT INTO produkty(id_produktu, nazwa, id_kategorii, cena, producent, materiał) VALUES('$id_produktu', '$nazwa', '$id_kategorii', '$cena', '$producent', '$materiał')";
    $execute=mysqli_query($bd,$query);
 }
=======
<?php
include('baza.php');
$bd = $conn;
$nazwa = dod($_POST['nazwa']);
$id_kategorii = dod($_POST['id_kategorii']);
$cena = dod($_POST['cena']);
$producent = dod($_POST['producent']);
$materiał = dod($_POST['materiał']);
   
if(!empty($nazwa) && !empty($id_kategorii) && !empty($cena) && !empty($producent) && !empty($materiał)){
   
w_dane($nazwa, $id_kategorii, $cena, $producent, $materiał);
echo "<p style='color:red; font-size:20x; margin-top:-30px; margin-bottom:-2px;'>Produkt dodany</p>";
}else{
    echo "<p style='color:red; font-size:20px; margin-top:-30px; margin-bottom:-2px;'>Należy uzupełnić wszystkie pola</p>";
   }

function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($nazwa, $id_kategorii, $cena, $producent, $materiał){
 
    global $bd;
    $query="INSERT INTO produkty(nazwa, id_kategorii, cena, producent, materiał) VALUES('$nazwa', '$id_kategorii', '$cena', '$producent', '$materiał')";
    $execute=mysqli_query($bd,$query);
 }
>>>>>>> Stashed changes
?>