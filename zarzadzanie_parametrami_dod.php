<<<<<<< Updated upstream
<?php
include('baza.php');
$mysqli = new mysqli("localhost","root","","");
$bd = $conn;
$parametry = dod($_POST['parametry']);
$id_produktu = dod($_POST['id_produktu']);

   
if(!empty($parametry) && !empty($id_produktu)){
   
w_dane($parametry, $id_produktu);
}else{
    echo "<p style='color:red; font-size:13px; margin-top:-30px; margin-bottom:-2px;'>Należy uzupełnić wszystkie pola</p>";
   }

function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($parametry, $id_produktu){
 
    global $bd;
    $query="INSERT INTO parametry(parametry, id_produktu) VALUES('$parametry', '$id_produktu')";
    $execute=mysqli_query($bd,$query);
 }
=======
<?php
include('baza.php');
$bd = $conn;
$parametry = dod($_POST['parametry']);
$id_produktu = dod($_POST['id_produktu']);

   
if(!empty($parametry) && !empty($id_produktu)){
   
w_dane($parametry, $id_produktu);
}else{
    echo "<p style='color:red; font-size:13px; margin-top:-30px; margin-bottom:-2px;'>Należy uzupełnić wszystkie pola</p>";
   }

function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($parametry, $id_produktu){
 
    global $bd;
    $query="INSERT INTO parametry(parametry, id_produktu) VALUES('$parametry', '$id_produktu')";
    $execute=mysqli_query($bd,$query);
 }
>>>>>>> Stashed changes
?>