<?php

require_once 'PoderesRepositorio.php';
require_once 'DbConnection.php';
require_once 'models/Card.php';

// Obter todos os cards para exibir no dropdown
$cardRepository = new PoderesRepositorio($connection);
$cards = $cardRepository->getAllCards();

if (isset($_POST['excluir'])) {
    $cardRepository->deletaCard($_POST['idCard']);
    header("Location: ../index.php");
    exit();
}

?>

<div class="formWrap">
    <form action="src/ExcluiCard.php" method="POST">
        <h1 class="mainTitle">Excluir Card</h1>
        <select name="idCard" id="idCard" class="selectInput">
            <?php foreach ($cards as $card): ?>
                <option value="<?php echo $card['IdCard']; ?>">
                    <?php echo $card['Titulo']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="excluir submitButton" name="excluir">Excluir</button>
    </form>
</div>