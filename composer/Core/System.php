<?php

namespace Core;

class System {

    public static function validade($obj)
    {
        if($obj->getPrime() == true) {
            echo "<br>Você é um assinante Prime! Meus parabéns! <3<br>";
        } else {
            echo "<br>Você não é um assinante Prime...<br>";
        }
    }
}