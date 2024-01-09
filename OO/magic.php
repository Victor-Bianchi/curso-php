<div class="titulo">Métodos Mágicos</div>

<?php 

/**
 * Métodos mágicos são os que são precedidos por dois underlines
 */

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade) { # chamado quando chamamos o new
        echo "Construtor invocado!<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct() { # invocado quando chamamos o unset ou atribuímos null
        die("Ok, objeto destruído");
    }

    public function __toString() { # chamado quando o objeto retorna uma string
        return "Meu nome é {$this->nome} e eu tenho {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . '<br>'; # isso funciona pelo método __toString
    }

    public function __get($attr): void { # chamado quando tentamos acessar um atributo inexistente
        echo "Atributo não identificado '{$attr}'";
    }

    public function __set($name, $value): void { # chamado quando tentamos alterar o valor de um atributo inexistente
        echo "Atributo não identificado para definir {$name}";
    }

    public function __call($name, $arguments) { # chamado quando tentamos chamar um método inexistente
        echo "Método não foi encontrado dentro da classe {$name}";
        echo "<br>";
        print_r($arguments);
    }
}

$p1 = new Pessoa("João", 32);
$p1->apresentar();
$p1->ola(1, "Mundo", 2);