<?php
require_once 'PoderesRepositorio.php';
require_once 'DbConnection.php';
require_once 'models/Card.php';

$cardRepository = new PoderesRepositorio($connection);
$allCards = $cardRepository->getAllCards();

$displayCard = null;

if (isset($_POST['atualizar']) && isset($_POST['idCard'])) {
  $selectedCard = new Card(
    $_POST['idCard'],
    $_POST['Titulo'] ?? '',
    $_POST['Descricao'] ?? '',
    $_POST['NivelPoder'] ?? 0,
    $_POST['IdTag'] ?? 0
  );

  $cardRepository->atualizaCard($selectedCard);
  header("Location: ../index.php");
  exit();
}

if (isset($_POST['idCard'])) {
  $displayCard = $cardRepository->getOneCard($_POST['idCard']);
  var_dump($displayCard);
}
?>


<div class="formWrap">
  <form action="src/EditaCard.php" method="POST">
    <h1 class="mainTitle">Editar Card</h1>
    <select name="idCard" id="idCard" class="selectInput">
      <?php foreach ($allCards as $card): ?>
        <option value="<?php echo $card['IdCard']; ?>">
          <?php echo $card['Titulo'] ?>
        </option>
      <?php endforeach; ?>
    </select>

    <label for="Titulo">Título</label>
    <input type="text" id="Titulo" name="Titulo" class="textInput" value="<?php echo isset($displayCard) ? $displayCard->getTitulo() : ''; ?>" required>

    <label for="Descricao">Descrição</label>
    <input type="text" id="Descricao" name="Descricao" class="textInput" value="<?php echo isset($displayCard) ? $displayCard->getDescricao() : ''; ?>" required>

    <label for="NivelPoder">Nível de Poder</label>
    <input type="number" id="NivelPoder" name="NivelPoder" class="textInput" max="2147483647" value="<?php echo isset($displayCard) ? $displayCard->getNivelPoder() : ''; ?>" required>

    <label for="IdTag">Tag</label>
    <select name="IdTag" id="IdTag" class="selectInput">
      <option value="2" <?php echo isset($displayCard) && $displayCard->getIdTag() == 2 ? 'selected' : ''; ?>>Água</option>
      <option value="1" <?php echo isset($displayCard) && $displayCard->getIdTag() == 1 ? 'selected' : ''; ?>>Fogo</option>
      <option value="5" <?php echo isset($displayCard) && $displayCard->getIdTag() == 5 ? 'selected' : ''; ?>>Luz</option>
      <option value="4" <?php echo isset($displayCard) && $displayCard->getIdTag() == 4 ? 'selected' : ''; ?>>Vento</option>
      <option value="6" <?php echo isset($displayCard) && $displayCard->getIdTag() == 6 ? 'selected' : ''; ?>>Sombra</option>
      <option value="3" <?php echo isset($displayCard) && $displayCard->getIdTag() == 3 ? 'selected' : ''; ?>>Terra</option>
    </select>

    <button type="submit" class="atualizar submitButton" name="atualizar">Salvar</button>
  </form>
</div>
