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
    <title>Painel Administrativo - Carros</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <h1>Painel Administrativo - Carros</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Ano</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($carroRep->getCarro() as $carro): ?>
                <tr>
                    <td><?php echo $carro->getIdCarro(); ?></td>
                    <td><?php echo $carro->getModelo() ?></td>
                    <td><?php echo $carro->getMarca() ?></td>
                    <td><?php echo $carro->getAno() ?></td>
                    <td>R$ <?php echo number_format($carro->getPreco(), 2, ',', '.'); ?></td>
                    <td class="action-buttons">
                        <form action="src/exclui_carros.php", method="POST">
                            <input type="hidden" name="id" value="<?php echo $carro->getIdCarro()?>">
                            <button type="submit" class="excluir">Excluir</button>
                        </form>
                        
                        <form action="edita_carros.php", method="POST">
                            <button type="submit" class="editar">Editar</button>
                            <input type="hidden" name="id_carro" value="<?php echo $carro->getIdCarro()?>">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="6" style="text-align: center;">
                    <!-- Botão de cadastro de novo carro -->
                    <a href="cadastro_carro.php" class="btn-novo-carro">Cadastrar Novo Carro</a>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
