<div class="titulo">Closures e Callables</div>

<?php

$soma = function(int $n1 = 0, int $n2 = 0): int {
    return $n1 + $n2;
};

function multiplicacao(int $n1 = 0, int $n2 = 0): int {
    return $n1 * $n2;
}

echo $soma(5, 5) . '<br>';
echo multiplicacao(10, 10) . '<br>';
echo is_callable($soma).'<br>';

/**
 * Closures nada mais são do que as funções sem nome, que são referenciadas por uma variável e armazenadas dentro de uma classe interna chamada de Closure.
 * Com relação às Callables nada mais são do que objetos dentro do PHP que são passíveis de serem chamados, ou seja, podem se comportar como uma função.
 */