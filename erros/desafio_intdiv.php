<?php namespace desafio;

use DivisionByZeroError;
use Exception;
use Throwable;

ini_set('display_errors', 1);
?>

<div class="titulo">Desafio (Intdiv)</div>

<?php

/**
 * "Sobrescreva" o método intdiv, original da API do PHP, pelo seu próprio método que fará algumas funções a mais.
 * - Lançar uma exceção sempre que tentar dividir por zero.
 * - Lançar uma exceção sempre que o resultar não for um número inteiro.
 * - Dividir e retornar em casos contrários
 * 
 * Testes...
 * - intdiv com parâmetros 8 e 2 [Sucesso]
 * - intdiv com parâmetros 8 e 3 [Exceção]
 * - intdiv com parâmetros 8 e 0 [Exceção]
 * - intdiv original com parâmetros 8 e 3 [Sucesso]
 */

class NotIntegerException extends Exception {
    function __construct($message, $code = 0, $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}

function intdiv($operator_1, $operator_2) {
    if($operator_2 === 0) {
        throw new DivisionByZeroError("Não se pode dividir {$operator_1} por zero!");
    } else {
        $result = $operator_1 / $operator_2;
        if(is_int($result)) {
            return $result;
        } else {
            throw new NotIntegerException("A divisão resulta em um número não inteiro.");
        }
    }
}

try {
    echo intdiv(8, 2);
    echo '<br>';
    echo intdiv(8, 3);
    echo '<br>';
    echo intdiv(8, 0); # erro desconhecido
    echo '<br>';
    echo \intdiv(8, 3);
    echo '<br>';
} catch(Throwable $error) {
    echo $error->getMessage();
}