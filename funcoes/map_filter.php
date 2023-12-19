<div class="titulo">Map e Filter</div>

<?php

# MAP

/**
 * O Map é uma operação que é feita sobre Arrays em que é gerado um novo Array a partir de um Array qualquer dado. Uma função é passada como parâmetro para o map que a receberá e aplicará em cada elemento da lista passada e retornará a nova lista depois de passada a função.
 * 
 * Como exemplo, veja um código abaixo que recebe uma array de notas com números de ponto flutuante. O objetivo é arredondar todas as notas e criar um novo array com as notas arredondadas.
 */

$notas = [5.8, 7.3, 9.8, 6.7, 4.5, 3.2];
$notasFinais = array_map("round", $notas); # coloque o round entre aspas
print_r($notasFinais);
echo "<br>";

# FILTER

/**
 * O filter assim como o map recebe uma função qualquer e retorna um novo Array contendo apenas os elementos que retornando verdadeiro para a função passada. Ele faz de fato uma operação de filtragem.
 * 
 * Veja abaixo uma extensão do exemplo visto no MAP
 */

$apenas_aprovados = function ($nota) {
    if ($nota >= 6 && $nota <= 10) {
        return true;
    } else {
        return false;
    }
};

$aprovados = array_filter($notasFinais, $apenas_aprovados);
print_r($aprovados);