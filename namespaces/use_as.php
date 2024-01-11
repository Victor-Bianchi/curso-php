<?php namespace Original;?>
<div class="titulo">Use & As</div>

<?php 

    /**
     * O use é uma forma de simplificar o uso e gerenciamento dos namespaces
     */

    
    include('basico_namespaces.php');
    use const contexto\CONSTANTE;
    use const contexto\CONSTANTE_DEFINE_GLOBAL as globall;

    # echo CONSTANTE; --> Não vai funcionar porque ainda estamos no contexto do 'Original'
    echo CONSTANTE; # agora funciona pois colocamos o 'use'
    echo \contexto\CONSTANTE; # também funciona
    #echo globall;