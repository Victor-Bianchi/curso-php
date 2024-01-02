<div class="titulo">Herança</div>

<?php 

/**
 * Reúso de código é a raíz principal da Herança.
 * a superclasse pode ser chamada com a referência parent::thing()
 */

class Pessoa {
    public $nome;
    public $idade;
    public $labor;

    function __construct($nome, $idade, $labor) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->labor = $labor;
        echo "log: Pessoa criada com sucesso <br>";
    }

    function __destruct() {
        echo "log: Pessoa destruída com sucesso <br>";
    }

    function apresentar() {
        echo "Olá! Eu sou {$this->nome}, tenho {$this->idade} anos e sou {$this->labor}.";
    }
}

class Usuario extends Pessoa {
    public $username;

    function __construct($nome, $idade, $labor, $username) {
        parent::__construct($nome, $idade, $labor);
        $this->username = $username;
        echo "log: Usuário criado com sucesso <br>";
    }

    function __destruct() {
        echo "log: Usuário destruído com sucesso <br>";
        parent::__destruct();
    }

    function apresentar() {
        echo "[@{$this->username}] ";
        parent::apresentar();
    }
}

$user = new Usuario("Victor Bianchi", 19, "Desenvolvedor Web", "vcnbianchi");
$user->apresentar();