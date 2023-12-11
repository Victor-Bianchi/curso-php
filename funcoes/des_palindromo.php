<div class="titulo">Desafio (Palíndromo)</div>

<?php

/**
 * Crie uma função que receba uma String contendo uma palavra e retorne se esta se trata de um palíndromo ou não
 * Faça isso de duas formas diferentes, uma manual e a outra utilizando funções da API das Strings
 */

function is_palindrome_manual($word) {
    $str_if = [];
    $str_fi = [];

    for($i = 0; $i < strlen($word); $i++) { 
        $str_if[$i] = strtolower($word[$i]);
    }

    for($i = strlen($word) - 1; $i >= 0; $i--) {
        $str_fi[] = strtolower($word[$i]);
    }

    for($i = 0; $i < strlen($word); $i++) {
        if($str_fi[$i] != $str_if[$i]) {
            return false;
        } else {
            return true;
        }
    }    
}

function is_palindrome_strings($str_word) {
    $str_word = strtolower($str_word);
    $arr_str = str_split($str_word);
    $reverse_arr_str = array_reverse($arr_str);

    for($i = 0; $i < count($arr_str); $i++) {
        if($arr_str[$i] === $reverse_arr_str[$i]) {
            return true;
        } else {
            return false;
        }
    }
}

$r = is_palindrome_manual("Ana");
echo $r;

$r2 = is_palindrome_strings("Arara");
echo $r2;