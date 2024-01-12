<div class="titulo">Erros Personalizados</div>

<?php 

/**
 * Erros personalizados podem ser criados a partir de uma classe nova criada que será extendida de acordo com o erro pretendido.
 * Lembrando que a classe precisa ser extendida ou por Exception ou por Error.
 */

$username = 'user';
$password = 123;

class UserLoginError extends Error {
    function __construct($message, $code = 0, $previous = null) { # isso é padrão
        parent::__construct($message, $code, $previous);
    }
}

function login($username, $password) {
    if($username === 'user' && $password === 123) {
        echo "Bem-vindo ao sistema {$username}!";
    } else {
        throw new UserLoginError('Usuário ou senha incorretos');
    }
}

try {
    login('user', 1234);
} catch(UserLoginError $error) {
    die($error->getMessage());
}