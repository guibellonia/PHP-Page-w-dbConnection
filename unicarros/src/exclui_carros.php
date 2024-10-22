<?php
require 'CarroRepositorio.php';
require 'db_connection.php';
require 'Modelo/Carro.php';

$carrosRep = new CarroRepositorio($connection);
//$carrosRep->deletaCarro($_GET['id']);
$carrosRep->deletaCarro($_POST['id']);

header("Location: ../admin.php");
?>