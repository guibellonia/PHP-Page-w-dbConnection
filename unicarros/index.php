<?php 
require 'src/CarroRepositorio.php'; 
require 'src/db_connection.php';
$carroRep = new CarroRepositorio($connection);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Carros</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Carros à Venda</h1>
    <div class="car-list">
        <?php $carroRep->listaCarros(); ?>
    </div>
</body>

</html>
