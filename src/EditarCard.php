<?php

require 'src/PoderesRepositorio.php';
require 'src/DbConnection.php';

$cardRepository = new PoderesRepositorio($connection);
$allCards = $cardRepository->getAllCards();
$specificCard = $cardRepository->getCardById($_POST['idCard']);

?>