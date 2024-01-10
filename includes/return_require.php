<div class="titulo">Return & Require</div>

<?php 

# __DIR__ é um operador que retorna o caminho absoluto da diretório atual.

/**
 * No caso de termos o retorno sendo feito indifere o nosso conhecimento do nome da variável pois por padrão ela já será retornada
 * Sim, podemos retornar fora da função normalmente o efeito disso pode ser visto nas linhas abaixo.
 */

$comRetorno = require(__DIR__.'/return_presente.php');
echo $comRetorno."<br>";
echo $variavelDeclaradaComReturn."<br>";

/**
 * Já neste caso não temos o retorno ocorrendo, o retorno "1" é uma resposta booleana dizendo que o arquivo foi incluído com sucesso
 * No entanto para termos o conteúdo da variável precisamos ter o conhecimento do nome da mesma.
 */

$semRetorno = require(__DIR__."/return_ausente.php");
echo $semRetorno . "<br>";
echo $variavelDeclaradaSemReturn;