<?php

require_once __DIR__ . '/PoderesRepositorio.php';
require_once __DIR__ . '/DbConnection.php';
require_once 'models/Card.php';

if (isset($_POST['cadastrar'])) {
    if (isset($_POST['Titulo']) && isset($_POST['Descricao']) && isset($_POST['NivelPoder']) && isset($_POST['IdTag'])) {
        $card = new Card(null, $_POST['Titulo'], $_POST['Descricao'], $_POST['NivelPoder'], (int)$_POST['IdTag']);
        
        $cardRepository = new PoderesRepositorio($connection);
        $cardRepository->criarCard($card);
        
        header("Location: ../index.php");
        exit();
    } else {
        echo "Erro: Todos os campos são obrigatórios.";
    }
}

?>
    <div class="formWrap">
        <form action="src/CadastraCard.php" method="POST">
            <h1 class="mainTitle">Cadastrar Card</h1>
            <label for="Titulo">Título</label>
            <input type="text" id="Titulo" name="Titulo" class="textInput" required>

            <label for="Descricao">Descrição</label>
            <input type="text" id="Descricao" name="Descricao" class="textInput" required>

            <label for="Descricao">Nível de Poder</label>
            <input type="number" id="NivelPoder" name="NivelPoder" class="textInput" max="2147483647" required>

            <label for="IdTag">Tag</label>
            <select name="IdTag" id="IdTag" class="selectInput">
                <option value=2>Água</option>
                <option value=1>Fogo</option>
                <option value=5>Luz</option>
                <option value=4>Vento</option>
                <option value=6>Sombra</option>
                <option value=3>Terra</option>
            </select>

            <button type="submit" name="cadastrar" class="submitButton">Adicionar Card</button>
        </form>
    </div>
