<?php

class Carro{

    private ?int $id_carro;
    private string $marca;
    private string $modelo;
    private int $ano;
    private float $preco;

    public function __construct(?int $id_carro, string $marca, string $modelo, int $ano, float $preco){
        $this->id_carro = $id_carro;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->preco = $preco;
    }

    
    public function getIdCarro(): int{
        return $this->id_carro;
    }

    public function getMarca(): string{
        return $this->marca;
    }

    public function getModelo(): string{
        return $this->modelo;
    }
    
    public function getAno(): int{
        return $this->ano;
    }

    public function getPreco(): float{
        return $this->preco;
    }

}

?>