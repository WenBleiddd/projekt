<?php
include 'baza.php';
session_start();

$user_id = $_SESSION['id_klient'];

$order_query = "SELECT * FROM zamowienia WHERE ID_klient = $user_id";
$order_result = mysqli_query($conn, $order_query);
?>

<html>
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <style>
        html {
            margin-top: 50px;
            font-family: 'Montserrat', sans-serif;
        }
        .przycisk {
            border: none;
            background-color: #191919;
            color: white;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: -10px;
            margin-left: 2.2px;
            margin-right: 2.2px;
        }
        .przycisk:hover {
            background-color: #5C6BC0;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <center>
        <h1>Historia zamówień</h1>
        <table>
            <tr>
                <th>ID Zamówienia</th>
                <th>Produkt</th>
                <th>Ilość</th>
                <th>Cena za sztukę</th>
                <th>Cena </th>
                <th>Data</th>
                <th>Platnosc</th>
                <!-- Dodaj inne kolumny według potrzeb -->
            </tr>
            <?php while ($order = mysqli_fetch_assoc($order_result)) : ?>
                <tr>
                    <td><?php echo $order['id_zamowienia']; ?></td>
                    <td><?php echo $order['nazwa']; ?></td>
                    <td><?php echo $order['ilosc'];?></td>
                    <td><?php echo $order['cena_za_jeden'];?></td>
                    <td><?php echo $order['cena'];?></td>
                    <td><?php echo $order['data'];?></td>
                    <td><?php echo $order['platnosc'];?></td>
                    <!-- Dodaj inne komórki według potrzeb -->
                </tr>
            <?php endwhile; ?>
        </table>
        <br>
        <a href="panel_k.php">
            <button class="przycisk" style="font-family: 'Montserrat', sans-serif; font-weight:bold;">Powrót do panelu klienta</button>
        </a>
    </center>
</body>
</html>