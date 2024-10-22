<?php

class Card{

    private ?int $idCard;
    private string $titulo;
    private string $descricao;
    private int $idTag;

    public function __construct(?int $idCard, string $titulo, string $descricao, int $idTag){
        $this->idCard = $idCard;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
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

    public function getIdTag(): int {
        return $this->idTag;
    }

}