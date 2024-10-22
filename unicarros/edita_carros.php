<?php
require 'src/CarroRepositorio.php'; 
require 'src/db_connection.php';

$carroRep = new CarroRepositorio($connection);

$carroBuscado = $carroRep->buscaCarro($_POST['id_carro']);

var_dump($carroBuscado);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <h1>Editar Carro</h1>

    <form action="src/editar_carro.php" method="POST">
        <input type="hidden" name="id_carro" value="<?php echo $carroBuscado->getIdCarro()?>">
        
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" value="<?php echo $carroBuscado->getModelo()?>" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" value="<?php echo $carroBuscado->getMarca()?>" required>

        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano" value="<?php echo $carroBuscado->getAno()?>" required>

        <label for="preco">Preço:</label>
        <input type="text" name="preco" id="preco" value="<?php echo $carroBuscado->getPreco()?>" required>

        <button type="submit" name="atualizar">Atualizar Carro</button>
    </form>

    <a href="admin.php">Voltar ao Painel</a>
</body>
</html>
