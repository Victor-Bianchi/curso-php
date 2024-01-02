<div class="titulo">Classe Estática (Static)</div>

<?php

class A {
    public $nonStatic = 'Variável Comum<br>';
    public static $static = 'Variável Estática';

    public function impress() {
        echo $this->nonStatic;
        echo self::$static;
    }

    public static function impress_static() {
        echo "<br>Eu sou estática :D<br>";
    }
}

$a = new A;
$a->impress(); # isso não é legal
A::impress_static(); # isso é super legal