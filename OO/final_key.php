<div class="titulo">Final Keyword</div>

<?php

# Métodos ou classes finais (final keyword) não podem ser herdadas nem sobrescritas. No caso das classes finais elas não podem ser herdadas, no caso dos métodos, eles não podem serem sobrescritos mas podem ser passados por herança.

abstract class ClasseAbstrata {
    abstract public function metodo1();

    public final function metodo2() { # podemos trocar a ordem das keywords, menos com relação a palavra function que deve sempre estar ao lado do nome da função.
        echo "Não serei alterado!<br>";
    } 
}

class Classe extends ClasseAbstrata {
    public function metodo1() {
        echo "Executanto método 1<br>";
    }

    ### Fatal error: Cannot override final method ClasseAbstrata::metodo2() ###

    /*public function metodo2() { 
        echo "Teimosia";
    }*/
}

$c = new Classe;

$c->metodo1();
$c->metodo2();