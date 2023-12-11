<div class="titulo">Argumentos & Retorno</div>

<?php

# É preferível utilizar o return ao echo para retornar valores processados dentro de uma função.

function obterMensagem(string $msg = ""): string {
    if($msg !== "") {
        return $msg;
    } else {
        return "<vazio>";
    }
}

$m = obterMensagem();
echo $m;

function trocaValor(&$var, $new_value) {
    $var = $new_value;
}

$nome = "Victor";
echo $nome;
trocaValor($nome, "Lucas");
echo $nome;