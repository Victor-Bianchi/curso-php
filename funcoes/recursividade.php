<div class="titulo">Funções Recursivas</div>

<?php

/**
 * As Funções Recursivas são uma forma mais eficiente de se realizar alguma operação que geralmente irá envolver laços de repetição.
 * Ao utilizar recursividade diminuimos as linhas de código que usamos para realizar a mesma coisa deixando o código mais enxuto mas não necessáriamente mais legível.
 * 
 * Funções recursivas devem primeiramente ter uma condição de parada, pois sem isso iremos criar um loop infinito que certamente não irá resolver o nosso problema.
 */


function somaAte($numero) {
    if($numero === 1) {
        return 1;
    } else {
        return $numero + somaAte($numero - 1);
    }
}

# Uma forma bem enxuta de se criar uma função de fatorial

function fatorial($number) {
    return $number === 1 ? 1 : $number * fatorial($number - 1);
}

echo fatorial(5).'<br>';
echo somaAte(1000);