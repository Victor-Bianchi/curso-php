<div class="titulo">Funções Anônimas</div>

<?php

# Funções Anônimas (Closures)

$soma = function (int ...$numbers): int {
    $sum = 0;

    foreach($numbers as $value) {
        $sum += $value;
    }

    return $sum;
};

echo $soma(1, 1)."<br>";

# Funções dentro de Funções

function execute($a, $b, $c, $callback) {
    $result = $callback($a, $b, $c);
    return $result;
}

echo "<br>".execute(5, 5, 5, $soma)."<br>";