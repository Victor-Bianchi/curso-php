<div class="titulo">Função & Escopo</div>

<?php

# Anatomia de uma Função em PHP

function imprimirMensagem(string $msg = ""): void
{
    $msg != "" ? print($msg) : print("Insira um texto para ser impresso.");
}

imprimirMensagem("Olá mundo!");

# A Questão do Escopo

$valor = 1;
echo "<br> Valor antes da função: $valor <br>";

function trocaValor()
{
    $valor = 3; # variável local, só é válida aqui dentro
    echo "Valor durante a função: $valor <br>";
}

trocaValor();
echo "Valor depois da função: $valor <br>";

echo "<br> Valor antes da função: $valor <br>";

function trocaValorGlobal()
{
    global $valor;
    $valor = 3;

    echo "Valor durante a função: $valor <br>";
}

trocaValorGlobal();
echo "Valor depois da função: $valor <br>";
