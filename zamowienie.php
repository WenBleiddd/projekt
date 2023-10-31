<?php
session_start();
include 'baza.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['id_klient'])) {
    $loggedInUsername = $_SESSION['id_klient'];
} else {
    $loggedInUsername = '2';
}
    $productID = $_POST['id_produktu'];
    $quantity = $_POST['ilosc'];

    $sqlProduct = "SELECT * FROM produkty WHERE id_produktu = $productID";
    $resultProduct = $conn->query($sqlProduct);

    if ($resultProduct->num_rows > 0) {
        $row = $resultProduct->fetch_assoc();
        $productName = $row['nazwa'];
        $unitPrice = $row['cena'];
        $totalPrice = $unitPrice * $quantity;
        
        $sqlOrder = "INSERT INTO zamowienia (login, nazwa, ilosc, cena_za_jeden, cena) VALUES ('$loggedInUsername', '$productName', $quantity, $unitPrice, $totalPrice)";

        if ($conn->query($sqlOrder) === TRUE) {
            echo 'Zamówienie złożone dla uzytkownika o id ' . $loggedInUsername . '. Cena: ' . $totalPrice .'zł';
        } else {
            echo 'Error adding order: ' . $conn->error;
        }
    } else {
        echo 'Product not found.';
    }
}
?>
<script>
    function validateQuantity() {
        var quantity = document.getElementsByName('ilosc')[0].value;
        if (quantity <= 0) {
            alert('Podaj poprawną ilość.');
            return false;
        }
        return true;
    }
</script>

<form method="post" action="" onsubmit="return validateQuantity();">
    <label for="id_produktu">Wybierz produkt:</label>
    <select name="id_produktu" required>
        <?php
        $sqlProducts = "SELECT * FROM produkty";
        $resultProducts = $conn->query($sqlProducts);

        while ($row = $resultProducts->fetch_assoc()) {
            echo '<option value="' . $row['id_produktu'] . '">' . $row['nazwa'] . ' - $' . $row['cena'] . '</option>';
        }
        ?>
    </select><br>

    <label for="ilosc">ilosc:</label>
    <input type="number" name="ilosc" required><br>

    <button type="submit">Złóż zamówienie</button>
</form>
<a href="index.php"><button style="font-family: 'Montserrat', sans-serif; font-weight:bold; margin-top:10px"class="przycisk" style="font-weight:bold;">Powrót</button></a>
