<?php
require 'CarroRepositorio.php';
require 'db_connection.php';
require 'Modelo/Carro.php';

$carrosRep = new CarroRepositorio($connection);
$carroDelete = new Carro($_POST['id_carro'], $_POST['marca'], $_POST['modelo'], $_POST['ano'], $_POST['preco']);
$carrosRep->updateCarro($carroDelete);

header("Location: ../admin.php");
?>