<div class="titulo">Uso Básico</div>

<?php 

/**
 * Erros podem ocorrer de forma intencional ou não dentro do código e para isso devemos prevenir o surgimento deles através de estruturas de tratamento de erros
 * Veremos três: try, catch e finally. No try deve ficar o código sucetível a erros, no catch devemos ter o tratamento e o finally é opcional, é usado quando precisamos
 * executar alguma coisa independente do resultado que este evento tenha.
 * 
 * É possível tratarmos diferentes tipos de erros em um mesmo try, para isso basta criar vários "catches" com diferentes tratamentos.
 */

try {
    # Sem tratamento, retorna: Fatal error: Uncaught DivisionByZeroError: Division by zero #
    echo intdiv(10, 0);
} catch(DivisionByZeroError $error) {
    die("Não se pode dividir por zero.");
} finally {
    echo "Hello!";
}

/**
 * É obrigatória a definição de tipo no corpo do catch, ali podem ser passados qualquer parâmetro do tipo Throwable
 * Dentro dessa classe há subclasses sendo divididas entre Error e Exception. Dentre estes erros, temos o DivisionByZeroError.
 */