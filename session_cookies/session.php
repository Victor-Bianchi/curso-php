<div class="titulo">Sessões ($_SESSION)</div>

<?php

/**
 * As sessões se comportam de forma semelhante a variáveis e constantes, podendo serem alteradas normalmente chamando o padrão estabelecido.
 * Lembrando que as sessões não se perdem ao fechar o navegador (somente se o processo for morto). Para inicializar uma sessão usamos o session_start()
 * e essa função deve estar em todas os arquivos .php que vão trabalhar com sessões sejam as operaç~eos que forem.
 * 
 * No caso, as sessões são armazenadas como se fôssem arrays, e na práticas elas se comportam como tal.
 * Para matar uma sessão usamos o session_destroy()
 * 
 * Cada sessão tem um ID nela configurado, esse ID é um valor aleatório de letras e números que identificam aquela sessão e traz com ela os dados.
 * Para recuperar o id da sua sessão ou ainda recuperar valores de uma outra sessão usamos o session_id() podemos usar em sequência o session_regenerate_id()
 * para gerar um novo ID.
 * 
 * Essa questão do ID é muito importante pois se trata de segurança digital
 */

session_start();
print_r($_SESSION);
echo '<br>';

if(!isset($_SESSION['nome'])) {
    $_SESSION['nome'] = 'Victor';
}

if(!isset($_SESSION['email'])) {
    $_SESSION['email'] = 'victor@email.com';
}

echo session_id();