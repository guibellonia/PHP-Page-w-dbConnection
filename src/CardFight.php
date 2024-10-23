<?php
require_once 'PoderesRepositorio.php';
require_once 'DbConnection.php';

$cardRepository = new PoderesRepositorio($connection);
$allCards = $cardRepository->getAllCards();

if (isset($_GET['card1Id']) && isset($_GET['card2Id'])) {
  $card1 = $cardRepository->getOneCard($_GET['card1Id']);
  $card2 = $cardRepository->getOneCard($_GET['card2Id']);

  if ($card1 && $card2) {
    $result = $cardRepository->cardFight($card1, $card2);
  } else {
    $result = "Um ou ambos os cards não foram encontrados.";
  }
}
?>
<head>
  <link rel="stylesheet" href="../styles/style.css" />
  <link rel="icon" href="../assets/favicon.ico" />
</head>
<body>
<section class="mainContainer">
  <div class="formWrap">
    <form action="src/CardFight.php" method="GET">
      <?php if (!isset($result)): ?>
      <h1 class="mainTitle">Duelo de Cartas</h1>
      <label for="card1Id">Selecione o Desafiante:</label>
      <select name="card1Id" id="card1Id" class="selectInput">
        <?php foreach ($allCards as $card): ?>
          <option value="<?php echo $card['IdCard']; ?>">
            <?php echo $card['Titulo']; ?>
          </option>
        <?php endforeach; ?>
      </select>

      <label for="card2Id">Selecione o Oponente:</label>
      <select name="card2Id" id="card2Id" class="selectInput">
        <?php foreach ($allCards as $card): ?>
          <option value="<?php echo $card['IdCard']; ?>">
            <?php echo $card['Titulo']; ?>
          </option>
        <?php endforeach; ?>
      </select>

      
        <button type="submit" class="duelar submitButton" name="duelar">Lutar!</button>
      <?php endif; ?>
      <?php if (isset($result)): ?>
        <h2 class="mainTitle">Resultado do Duelo</h2>
          <p class="resultButton"><?php echo $result; ?></p>
          <a href="../index.php" class="submitButton">Voltar</a>
      <?php endif; ?>
    </form>

  </div>
</section>
</body>
