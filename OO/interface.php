<div class="titulo">Interface</div>

<?php

# Todos os métodos e atributos são PÚBLICOS
# O uso das Interfaces não são obrigatórios, ela na realidade apenas define um padrão mínimo que será exigido para cada classe que a implementar. É como se fossem regras

interface Supermercado {
    public function comprar();
    public function verifica_preco();
    public function resumo();
}

class Compra implements Supermercado {
    public $nome_produto;
    public $valor_produto;
    public $classe_produto;

    public function __construct($nome, $valor, $classe) {
        $this->nome_produto = $nome;
        $this->valor_produto = $valor;
        $this->classe_produto = $classe;
    }
    
    public function money_format($money) {
        $valor_format = number_format($money, 2, ',', '.');
        return $valor_format;
    }

    public function resumo() {
        echo "Produto: {$this->nome_produto} <br> Preço: R$ {$this->money_format($this->valor_produto)} <br> Tipo: {$this->classe_produto} <br>";
    }

    public function comprar() {
        echo "Negócio fechado! Os detalhes da compra serão impressos a seguir. <br>";
        $this->resumo();
    }

    public function verifica_preco() {
        echo "R$ {$this->money_format($this->valor_produto)}";
    }

}

$c1 = new Compra("Cenoura", 12.98, "Legume");
$c1->comprar();