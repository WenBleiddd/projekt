<?php
session_start();
session_destroy();

header('Location: logowanie_k.php');
?>