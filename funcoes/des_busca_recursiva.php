<div class="titulo">Desafio (Busca Recursiva)</div>

<?php

$array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

function retornarArray($array, $nivel = '>') {
    foreach($array as $valor) {
        if(is_array($valor)) {
            retornarArray($valor, $nivel.$nivel[0]); # observe essa técnica
        } else {
            echo "$nivel $valor<br>";
        }
    }
}

retornarArray($array);


/*function countDepth($number_depth = 1) {
    if($number_depth < 1) {
        return;
    } else {
        echo ">";
    }

    return countDepth($number_depth - 1);
}

function returnArray($arr, $depth, $j = 0) {
    if($j <= count($arr) - 1) {
        countDepth($depth);
        echo $arr[$j];
        echo "<br>";
    } else {
        return;
    }

    return returnArray($arr, $j + 1, $depth);
}

function foreachRecursivo($arr, $i = 0, $depth = 1) {
    if($i >= count($arr) - 1) {
        return;
    } else {
        $element = $arr[$i];

        if (is_array($element)) {
            $depth++;
            returnArray($element, $depth);
            
        } else {
            countDepth($depth);
            echo $element."<br>";
        }

        return foreachRecursivo($arr, $i + 1, $depth);
    }
}

foreachRecursivo($array);*/