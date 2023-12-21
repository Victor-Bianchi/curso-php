<div class="titulo">Construtor e Destrutor</div>

<?php

class Pessoa {
    public $nome;
    public $idade;

    function __construct($newNome, $newIdade)
    {
        echo "Called Magic Method: __construct<br>";
        $this->nome = $newNome;
        $this->idade = $newIdade;
        echo "<br>";
    }

    public function hello() {
        echo "Hello! My name is $this->nome and I'm $this->idade years old.";
    }
}

$person = new Pessoa("Carlos Magno", 32);
$person->hello();
unset($person); # destrutor