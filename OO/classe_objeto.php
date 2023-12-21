<div class="titulo">Classe vs Objeto</div>

<?php

/**
 * ANATOMIA DE UMA CLASSE
 * 
 * Classe é uma abstração de algo ou alguém do mundo real para o software. É um mapeamento e definição do ser dividido em atributos e comportamentos.
 * 
 * class Nome {
 *  # corpo
 * }
 * 
 * Classes definem um TIPO, uma Estruturas de Dados
 * Classes representam uma abstração
 * Objetos são o resultado, a instância, de uma classe
 * 
 * CLASSE [var & const, construtor, métodos, destrutor (processos de encerramento, fechar conexão com DB, matar variáveis etc.)]
 * acesso dos métodos é ->
 * O nome das classes devem estar no padrão de CamelCase
 */

class Cliente {
    # Atributos
    public $nome = 'Cliente';
    public $idade = 18;
    public $assinante = true;

    # Métodos
    public function apresentar() {
        $this->assinante == true ? print("✧") : "";
        echo " Olá! Meu nome é $this->nome, eu tenho $this->idade anos de idade.<br>";
    }
}

$cliente_1 = new Cliente();
$cliente_1->nome = "João";
$cliente_1->idade = 22;
$cliente_1->apresentar();

$cliente_2 = new Cliente();
$cliente_2->nome = "Maria";
$cliente_2->idade = 21;
$cliente_2->assinante = false;
$cliente_2->apresentar();