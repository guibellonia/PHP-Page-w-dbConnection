<?php

class PoderesRepositorio
{

    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getTag() {
        require 'DbConnection.php';
        require_once 'models/Tag.php';
        $consulta = "SELECT * FROM Tag";
        $statement = $connection->query($consulta);
        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        $tagArr = array_map(function ($tag) {
            return new Tag(
                $tag['idTag'],
                $tag['Descricao'],
            );
        }, $resultado);

        return $tagArr;
    }

    public function getAllCards(): array {
        $sql = "SELECT IdCard, Titulo FROM Card";
        $statement = $this->pdo->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCard()
    {
        require 'DbConnection.php';
        require 'models/Card.php';
        $consulta = "SELECT * FROM Card";
        $statement = $connection->query($consulta);
        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        $cardArr = array_map(function ($card) {
            return new Card(
                $card['idCard'],
                $card['Titulo'],
                $card['Descricao'],
                $card['idTag']
            );
        }, $resultado);

        return $cardArr;
    }

    public function getCardById(int $idCard): ?Card{
        $cards = $this->getCard();
        foreach($cards as $card){
            if ($card->getIdCard() === $idCard){
                return $card;
            }
        }
        return null;
    }

    public function getTagById(int $idTag): ?Tag
    {
        $tags = $this->getTag();
        foreach ($tags as $tag) {
            if ($tag->getIdTag() === $idTag) {
                return $tag;
            }
        }
        return null;
    }

    public function listaCards() {
        $cardList = $this->getCard();
        foreach ($cardList as $c) {
            
            $tag = $this->getTagById($c->getIdTag());
    
            if ($tag !== null) {
                echo "<div class='cardWrapper' style='--" . htmlspecialchars($tag->getDescricaoTag()) . ": true'>";
                echo "<div class='cardTextWrapper'>";
                echo "<p class='cardTitle'>" . htmlspecialchars($c->getTitulo()) . "</p>";
                echo "<p class='cardText'>" . htmlspecialchars($c->getDescricao()) . "</p>";
                echo "</div>";
                echo "<div class='cardTags'>";
                echo "<button class='cardTag'>";
                echo "<p>" . htmlspecialchars($tag->getDescricaoTag()) . "</p>";
                echo "</p></button>";
                echo "</div>";
                echo "</div>";
            } else {
                echo "<p>Tag não encontrada</p>";
            }
        }
    }

    public function criarCard(Card $card){
        $sql = "INSERT INTO Card (IdCard, Titulo, Descricao, IdTag) VALUES (?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $card->getIdCard());
        $statement->bindValue(2, $card->getTitulo());
        $statement->bindValue(3, $card->getDescricao());
        $statement->bindValue(4, $card->getIdTag());
        $statement->execute();
      }

    public function deletaCard(int $idCard) {
        $sql = "DELETE FROM Card WHERE IdCard = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $idCard);
        $statement->execute();
    }

}
