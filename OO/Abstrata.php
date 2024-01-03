<div class="titulo">Classe Abstrata</div>

<?php

/**
 * Classes Abstratas são semelhantes às Interfaces e Classes Concretas, onde em uma não podemos definir nenhum método e em outra devemos implementar todos os métodos.
 * As classes Abstratas também não podem ser instanciadas, caso você crie uma a única intenção que você teria será passar ela por herança.
 */

abstract class Super {
    public abstract function hello();
}

abstract class Sub_Super extends Super {
    public function hello() {
        echo "Hello";
    }

    public abstract function world();
}

class Concrete extends Sub_Super {
    public function world() {
        parent::hello();
        echo " World";
    }
}

$t = new Concrete();
$t->world();

/**
 * Lembrando que assim como as Classes Abstratas não podem ser instanciadas os métodos abstratos não podem também, logo, não terão definição de corpo.
 * OBS: Observe que todos os métodos definidos dentro de uma Interface são por padrão e obrigação, abstratos.
 */