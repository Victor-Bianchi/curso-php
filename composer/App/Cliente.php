<?php

namespace App;

class Cliente {
    private $nome;
    private $idade;
    private $prime;

    public function __construct($nome, $idade, $prime)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->prime = $prime;
    }

    public function getInfo()
    {
        echo "<br>Nome: $this->nome<br>Idade: $this->idade<br>Assinante Prime: $this->prime";
    }

    public function getPrime()
    {
        return $this->prime;
    }
}