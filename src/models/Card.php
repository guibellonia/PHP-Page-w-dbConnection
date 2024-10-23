<?php

class Card{

    private ?int $idCard;
    private string $titulo;
    private string $descricao;
    private int $nivelpoder;
    private int $idTag;

    public function __construct(?int $idCard, string $titulo, string $descricao, int $nivelpoder, int $idTag, ){
        $this->idCard = $idCard;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->nivelpoder = $nivelpoder;
        $this->idTag = $idTag;
    }

    public function getIdCard(): ?int {
        return $this->idCard;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getNivelPoder(): int {
      return $this->nivelpoder;
  }

    public function getIdTag(): int {
        return $this->idTag;
    }

}
