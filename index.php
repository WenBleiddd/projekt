<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<style>
    .przycisk{
border:none;
background-color:#191919;
color:white;
padding:10px;
margin-top:10px;
margin-bottom:10px;
margin-left:2.6px;
margin-right:2.6px;
position: relative;
}

.przycisk:hover{
background-color:#5C6BC0;
}
</style>
<body>
    <center>
    <h1>strona glowna</h1>
    <p>sklep</p>
    <?php
    include "baza.php";
    $stmt = $pdo->query('SELECT * FROM projekt_sklep.produkty');
?>
    <section class="section0">
        <table class="section0-table">
            <tr>
                <th>ID PRODUKTU</th>
                <th>NAZWA</th>
                <th>KATEGORIA</th>
                <th>CENA</th>
                
            </tr>
            <?php
                while($row = $stmt->fetch()) {
                    echo '<tr>';
                    echo '<td>'.$row['ID_pracownik'].'</td>';
                    echo '<td>'.$row['nazwa'].'</td>';
                    echo '<td>'.$row['id_kategoria'].'</td>';
                    echo '<td>'.$row['cena'].'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </section>
    <a href="rejestracja.php"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin-top:10px"class="przycisk" style="font-weight:bold;">REJESTRACJA</button></a>
    <br>
    <a href="logowanie_k.php"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin-top:10px"class="przycisk" style="font-weight:bold;">LOGOWANIE</button></a>    
</center>
</body>
</html>
