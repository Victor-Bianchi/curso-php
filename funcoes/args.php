<div class="titulo">Argumentos</div>

<?php

# Usamos os chamados Argumentos Variáveis quando precisamos receber inúmeros parâmetros. De forma implícita, todos os dados ali colocados serão inseridos dentro de um Array com o mesmo nome da variável

function soma(...$numeros) {
    $resultado = 0;

    foreach ($numeros as $value) {
        $resultado += $value;
    }

    return $resultado;
}

$r = soma(10, 3, 2, 4, 67, 41, 3, 5, 76, 2, 1, 8, 9, 32, 1, 213, 4, 5, 66, 77, 8, 13, 100);
echo $r."<br>";

# Podemos declarar um valor padrão para os argumentos assim como podemos forçar a saída deles.

function saudacao($prefixo = "Senhor", $nome = "Usuário") {
    echo "Prezado $prefixo $nome!<br>";
}

saudacao();
saudacao(NULL);
saudacao(NULL, NULL);


## Exercício ##

function datashow(array ...$dados): string # como visto, podemos especificar os tipos de entrada e saída da função
{
    $result = "";
    foreach ($dados as $array) {
        foreach ($array as $key => $value) {
            $result .= "<br>" . $key . ":" . $value . "<br>";
        }
    }
    return $result;
}


function club(array $titular, array ...$dependentes): void {
    $id = uniqid();
    echo "<h3>Assinatura: <strong>$id</strong></h3><br>";

    echo datashow($titular);
    if(count($dependentes) == 0) {
        echo "Dependentes: <strong>Não há</strong><br>";
    } else {
        echo datashow(...$dependentes);
    }
}

function inserir($name, $age, $gender, $job) {
    $array = [];
    array_push($array,$name, $age, $gender, $job);

    return $array;
}

club(inserir("Victor Nunes Bianchi", 19, "Masculino", "Engenheiro de Software"), inserir("Lucas de Almeida", 23, "Masculino", "Contador"), inserir("Luana Limonti", 22, "Feminino", "Advogada"));
club(inserir("Marco Antônio Barroso", 35, "Masculino", "Engenheiro Elétrico"));
club(inserir("Gabriela Sánchez Minelli", 38, "Feminino", "Física"), inserir("Roberto de Freitas Barros", 45, "Masculino", "Médico"));