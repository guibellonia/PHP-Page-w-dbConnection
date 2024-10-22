<?php
require 'src/CarroRepositorio.php'; 
require 'src/db_connection.php';
require 'src/Modelo/Carro.php';

//Verificamos se a variável global POST possui valores passados pelo button 'cadastrar'
// Apenas se existir que o objeto é criado
if(isset($_POST['cadastrar'])){
    $carro = new Carro(null,
        $_POST['marca'],
        $_POST['modelo'],
        $_POST['ano'],
        $_POST['preco']);

        $carroRep = new CarroRepositorio($connection);
        $carroRep->salvaCarro($carro);

        header("Location: admin.php");
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Novo Carro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <h1>Cadastro de Novo Carro</h1>

    <form action="cadastro_carro.php" method="POST">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" required><br><br>

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" required><br><br>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" min="1900" max="2099" step="1" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" id="preco" name="preco" step="0.01" required><br><br>

        <button type="submit", name="cadastrar">Cadastrar Carro</button>
    </form>

    <a href="admin.php">Voltar para o Painel Administrativo</a>
</body>

</html>