<div class="titulo">Pilares da Orientação a Objetos</div>

<?php

/**
 * ENCAPSULAMENTO
 * Não é necessário saber a lógica de implementação da classe. Basta conhecer como funciona a interface de comunicação com a tecnologia, como exemplo, podemos usar o processo de dirigir um carro não sendo necessário conhecer o funcionamento do motor a combustão para dirigi-lo. No PHP, para fazer essa "proteção" podemos usar os modificadores de acesso. Sendo eles: private (somente os membros da classe), protected (somente os membros da classe + herança) e public (geral tem acesso).
 * 
 * HERANÇA
 * É uma técnica de reuso de código eficiente, copiar e colar não é uma opção pela péssima manutenibilidade do código. Temos objetos formados por composição e herança. Composição: tem um e Herança: é um
 * Super Classe (classe Pai) --> Sub Classe (Classe Filha)
 * 
 * POLIMORFISMO
 * O PHP não aceita o uso de sobrecarga de métodos, onde podemos ter dois métodos com dois nomes e implementados de forma diferente. A sobrecarga é vista no polimorfismo estático.
 * Com relação ao polimorfismo dinâmico podemos ter a mesma variável recebendo dois diferentes "tipos" em um mesmo tipo definido na definição da variável. Isso só ocorre quando a variável que irá receber os tipos diferentes seja do tipo genérico que está acima dos dados com tipos diferentes. Ou seja, na essência eles são iguais mas são diferentes entre si. Um exemplo é que todos somos humanos mas somos pessoas diferentes.
 * 
 * ABSTRAÇÃO
 * A abstração é uma tentativa feita pelos desenvolvedores para tentar recuperar informações a respeito do projeto (com o cliente) para tentar aplicar no software. É literalmente tentar colocar a vida real dentro do software. Mas é necessário um ponto de atenção, nem sempre será possível abstrair tudo da vida real no software, as vezes haverão algumas coisas que existirão na vida real mas não no software e vão ter coisas que não existem na vida real mas existem no software.
 */