<?php

class CarroRepositorio{

    private PDO $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function getCarro(){
        require 'db_connection.php';
        require 'Modelo/Carro.php';
        $consulta = "SELECT * FROM Carro";
        $statement = $connection->query($consulta);
        $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
        $carro_arr = array_map(function($carro){
            return new Carro($carro['id_carro'],
                $carro['marca'],
                $carro['modelo'],
                $carro['ano'],
                $carro['preco']);
        }, $resultado);

        return $carro_arr;
    }

    public function listaCarros(){
        $carro_lst = $this->getCarro();
        foreach($carro_lst as $c){
            echo "<div class='car-item'>";
            echo "<h2>Modelo: " .$c->getModelo(). "</h2>";
            echo "<p>Marca: " . $c->getMarca() . "</p>";
            echo "<p>Ano: " . $c->getAno() . "</p>";
            echo "<p class='price'>Preço: R$ " . $c->getPreco() . "</p>";
            echo "</div>";
        }
    }

    public function deletaCarro(int $id){
        $sql = "DELETE FROM Carro WHERE id_carro = ?"; //pdo consegue lidar com '?'
        $statement = $this->pdo->prepare($sql); // função prepare é usada para constulas onde precisamos passar parâmetros, nesse caso o id
        $statement->bindValue(1, $id); // objeto retornado do prepare() possui método para passarmos o parâmetro. dizemos a posição do parâmetro e qual é
        $statement->execute();
      }

      public function salvaCarro(Carro $carro){
        $sql = "INSERT INTO Carro (marca, modelo, ano, preco) VALUES (?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $carro->getMarca());
        $statement->bindValue(2, $carro->getModelo());
        $statement->bindValue(3, $carro->getAno());
        $statement->bindValue(4, $carro->getPreco());
        $statement->execute();
      }

      public function buscaCarro(int $id){
        require 'Modelo/Carro.php';
        $sql = "SELECT * FROM Carro WHERE id_carro = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $carro = $statement->fetch(PDO::FETCH_ASSOC);

        return new Carro($carro['id_carro'],
            $carro['marca'],
            $carro['modelo'],
            $carro['ano'],
            $carro['preco']);
      }

      public function updateCarro(Carro $carro){
        $sql = "UPDATE Carro SET marca = ?, modelo = ?, ano = ?, preco = ? WHERE id_carro = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(1, $carro->getMarca());
        $statement->bindValue(2, $carro->getModelo());
        $statement->bindValue(3, $carro->getAno());
        $statement->bindValue(4, $carro->getPreco());
        $statement->bindValue(5, $carro->getIdCarro());
        $statement->execute();
      }

}

?>