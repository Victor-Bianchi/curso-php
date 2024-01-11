<?php namespace contexto;?>
<div class="titulo">Namespace Básico</div>

<?php 

    /**
     * Resumo da Ópera: Sempre que definimos uma constante com 'const' ela se auto define dentro de __NAMESPACE__ agora quando definimos com define podemos escolher
     * referenciando o namespace desejado com as contrabarras, se nada for colocado, a constante será definida em escopo global.
     */

    echo 'Namespace atual: '.__NAMESPACE__.'<br>'; # atributo mágico do namespace atual
    const CONSTANTE = 1204; # Por padrão, com a definição com o 'const' a constante já vai estar dentro do namespace definido
    define('CONSTANTE_DEFINE_GLOBAL', 4090); # vai estar no escopo global
    define('outro_contexto\CONSTANTE_4', 435); # vai estar no escopo 'outro_contexto'
    define('contexto\CONSTANTE_DEFINE', 3638); # vai estar dentro do escopo 'contexto'
    define(__NAMESPACE__.'\CONSTANTE_DEFINE_2', 3024); # vai estar dentro do escopo 'contexto'
    define(__NAMESPACE__.'\CONSTANTE_DEFINE_GLOBAL', 409071); #  vai estar dentro do escopo 'contexto'

    echo CONSTANTE.'<br>';
    echo CONSTANTE_DEFINE . '<br>';
    #echo CONSTANTE_DEFINE_2 . '<br>';
    echo CONSTANTE_DEFINE_GLOBAL.'<br>'; # neste caso a constante dentro do escopo de 'contexto' será retornada
    echo \CONSTANTE_DEFINE_GLOBAL.'<br>'; # já neste caso a global vai ser retornada
    echo \outro_contexto\CONSTANTE_4.'<br>'; # Acesso com caminho absoluto notado pela presença do '\'
    #echo \contexto\CONSTANTE_DEFINE_GLOBAL . '<br>'; # Aqui não temos problema, pois estão acessando de uma forma absoluta, diferente da linha abaixo que é de forma relativa.
    # echo contexto\CONSTANTE_DEFINE_GLOBAL.'<br>'; ### Fatal error: Uncaught Error: Undefined constant ### --> Fazer isso é a mesma coisa que: contexto\contexto\CONSTANTE_DEFINE_GLOBAL (sub-namespaces)