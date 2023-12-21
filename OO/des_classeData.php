<div class="titulo">Desafio (Classe Data)</div>

<?php

class Data {
    public $dia = "01";
    public $mes = "01";
    public $ano = "1970";

    public function Impressao() {
        echo "$this->dia/$this->mes/$this->ano";
    }
}

$unix = new Data();
$unix->impressao();