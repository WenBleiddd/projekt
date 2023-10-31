<<<<<<< Updated upstream
<?php
include('baza.php');
$mysqli = new mysqli("localhost","root","","");
$bd = $conn;
$kategoria = dod($_POST['kategoria']);

   
if(!empty($kategoria)){
   
    w_dane($kategoria);
    }else{
        echo "<p style='color:red; font-size:13px; margin-top:-30px; margin-bottom:-2px;'>Należy uzupełnić wszystkie pola</p>";
       }
 

function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($kategoria){
 
    global $bd;
    $query="INSERT INTO kategoria(kategoria) VALUES('$kategoria')";
    $execute=mysqli_query($bd,$query);
 }
=======
<?php
include('baza.php');
$bd = $conn;
$kategoria = dod($_POST['kategoria']);

   
if(!empty($kategoria)){
   
    w_dane($kategoria);
    }else{
        echo "<p style='color:red; font-size:13px; margin-top:-30px; margin-bottom:-2px;'>Należy uzupełnić wszystkie pola</p>";
       }
 

function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($kategoria){
 
    global $bd;
    $query="INSERT INTO kategoria(kategoria) VALUES('$kategoria')";
    $execute=mysqli_query($bd,$query);
 }
>>>>>>> Stashed changes
?>