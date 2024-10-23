<?php
require_once __DIR__ . '/src/PoderesRepositorio.php';
require_once __DIR__ . '/src/DbConnection.php';
$poderesRepositorio = new PoderesRepositorio($connection);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Poderes - NERDOLOGIA</title>
  <link rel="stylesheet" href="./styles/style.css" />
  <link rel="icon" href="./assets/favicon.ico" />
</head>

<body>
  <section class="mainContainer">
    <div class="mainTitleWrapper">
      <p class="titleIcon">🪄</p>
      <h1 class="mainTitle">Enciclopédia de Poderes Elementais</h1>
      <p class="mainSubtitle">
        Este site tem o propósito de listar poderes de ficção.
      </p>
    </div>
    <div class="operationsContainer">
      <?php include_once './src/CadastraCard.php' ?>
      <?php include_once './src/ExcluiCard.php' ?>
    </div>
    <div class="cardContainer">
      <?php $poderesRepositorio->listaCards() ?>
    </div>
    <div class="operationsContainer">
      <?php include_once './src/EditaCard.php' ?>
      <?php include_once './src/CardFight.php' ?>
    </div>
    
  </section>
</body>

</html>
