<div class="titulo">Operações com Arquivos</div>

<?php

/**
 * ESCRITA DE ARQUIVOS EM PHP
 * 'w': sobrescrita de dados
 * 'a': append de dados
 * 'x': somente para arquivos novos
 */

$arquivo = fopen(__DIR__.'/escrita.txt', 'w');
$return = fwrite($arquivo, "Two oceans in between us\nAnd I wait for shore\nThere's a gate I see\nThere's a way for me\nNow this one sits here\nAnd whispers things to me\nNow I got the devil inside\nThis one made a pig of me");
fclose($arquivo);
echo is_numeric($return) ? 'Sucesso!' : 'Erro';
echo '<hr>';

/**
 * LEITURA DE ARQUIVOS EM PHP
 */

$arquivo = fopen(__DIR__.'/arquivo.txt', 'r');
echo fread($arquivo, 20);
fclose($arquivo);
echo '<hr>';

$arquivo = fopen(__DIR__.'/arquivo.txt', 'r');
echo fread($arquivo, filesize(__DIR__.'/arquivo.txt'));
fclose($arquivo);
echo '<hr>';

$arquivo = fopen(__DIR__.'/arquivo.txt', 'r');
while(!feof($arquivo)) {
    echo fgets($arquivo), '<br>';
}
echo '<hr>';

$arquivo = fopen(__DIR__.'/arquivo.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo), '<br>';
}
echo '<hr>';