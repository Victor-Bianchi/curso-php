<?php namespace App;?>
<div class="titulo">Sub-Namespaces</div>

<?php 

    # Semelhante a estrutura de pastas

    echo __NAMESPACE__.'<br>';
    const constante = 123;

    namespace App\Principal;
    echo __NAMESPACE__ . '<br>';
    const constante = 456;

    namespace App\Principal\Especifico;
    echo __NAMESPACE__ . '<br>';
    const constante = 789;

    namespace App\Principal\Especifico\SuperEspecifico;
    echo __NAMESPACE__ . '<br>';
    const constante = 101112;

    echo constante.'<br>';
    echo \App\Principal\Especifico\constante . '<br>';
    echo \App\Principal\constante . '<br>';
    echo \App\Principal\constante . '<br>';
    echo \App\constante . '<br>';
    echo constant('\\' . __NAMESPACE__ . '\constante').'<br>';
    echo constant(__NAMESPACE__ . '\constante') . '<br>';