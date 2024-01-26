<?php
session_start();
if(!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}?>

<h1>Bem-vindo ao sistema, <?=$_SESSION['usuario']?>!</h1>
<a href="logout.php">Sair</a>