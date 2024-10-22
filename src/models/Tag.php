<?php

class Tag {
    private int $idTag;
    private string $descricao;

    public function __construct(int $idTag, string $descricao) {
        $this->idTag = $idTag;
        $this->descricao = $descricao;
    }
    
    public function getIdTag(): int {
        return $this->idTag;
    }

    public function getDescricaoTag(): string {
        return $this->descricao;
    }
}
