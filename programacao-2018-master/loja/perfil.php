<?php

    session_start();

    if (!isset($_SESSION['esta_logado'])):
?>

<form action="login.php?acao=login" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" />
    <br/>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" />
    <br/>
    <input type="submit" value="Enviar" />
</form>

<?php elseif ($_SESSION['esta_logado']): ?>

<h3>Bem Vindo <?= $_SESSION['nome'] ?></h3>
<a href="login.php?acao=logout">Sair</a>

<?php endif; ?>

