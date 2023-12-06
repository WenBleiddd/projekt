<?php
include('baza.php');
$bd = $conn;
$platnosc = dod($_POST['platnosc']);

if (!empty($platnosc)) {
    echo "platnosc dodana";
    w_dane($platnosc);
} else {
    echo "<h3 style='color:red; font-size:13px; margin-top:-21px; margin-bottom:-15px;'>Należy uzupełnić wszystkie pola</h3>";
}
function dod($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

 function w_dane($platnosc){
 
    global $bd;
    $query="INSERT INTO platnosci(nazwa_platnosci) VALUES('$platnosc')";
    $execute=mysqli_query($bd,$query);
 }
?>
