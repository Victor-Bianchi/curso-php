<div class="titulo">Desafio dos 7 Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template { # primeiro erro
    public function metodo3() {
        echo "Estou funcionando!";
    }
}

class Classe extends ClasseAbstrata { # segundo erro
    function __construct() {
        
    }

    public function metodo1() # terceiro erro
    {
        echo "Erro detectado 1!";
    }

    public function metodo2($parametro) # quarto erro
    {
        echo "Erro detectado 2!";
    }
}

$exemplo = new Classe(); # quinto erro
$exemplo->metodo3(); # sexto erro