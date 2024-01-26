<?php session_start();?>
<h1>Fazer Login</h1>
<?php if(isset($_SESSION['erros'])): ?>
    <div class="erros">
        <?php foreach($_SESSION['erros'] as $erro):?>
            <p><?=$erro?></p>
        <?php endforeach?>
    </div><!--erros-->
<?php endif?>
<?php
$db = [['nome'=>'Victor','email'=>'victor@email.com','senha'=>1234], ['nome'=>'Marianna','email'=>'mari@email.com','senha'=>4321]]; # isso poderia estar em outro arquivo
if(isset($_POST['button'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    foreach($db as $data) {
        $emailValido = $email == $data['email'];
        $senhaValida = $senha == $data['senha'];

        if($emailValido && $senhaValida) {
            $_SESSION['usuario'] = $data['nome'];
            header('Location: index.php');
            die();
        } else {
            $_SESSION['erros'] = ['E-mail/Senha inválidos!'];
        }
    }
}
?>
<form action="#" method="post">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" placeholder="user@email.com">
    <label for="senha">Senha</label>
    <input type="senha" name="senha" id="senha" placeholder="******">
    <input type="submit" value="Entrar" name="button">
</form>