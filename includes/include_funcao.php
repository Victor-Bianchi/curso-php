<div class="titulo">Include Função</div>

<?php

echo "Hello World (Include Função)";

function carregarArquivo() {
    include('include_arquivo.php');

    echo "Variável: {$var_include}<br>";
    echo soma(5, 5);
}

#carregarArquivo();

echo "<br>Depois da chamada...<br>";

echo soma(10, 10);
# echo "var: {$var_include}"; ### Warning: Undefined variable $var_include ### -- Não está disponível pois a variável só é acessível dentro da função que foi incluída.