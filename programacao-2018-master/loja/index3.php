<html>
    <ul>
        <li><a href="produtos.php?produto=eletronicos">Eletrônicos</a></li>
        <li><a href="produtos.php?produto=esportes">Esportes</a></li>
        <li><a href="produtos.php?produto=moveis">Móveis</a></li>
        <li><a href="produtos.php?produto=roupas">Roupas</a></li>
    </ul>

    <?php include 'perfil.php' ?>

    <form action="produtos.php" method="post">
        <label for="busca">Busca</label>
        <input type="text" name="busca" id="busca" />
        <input type="submit" name="Enviar" />
    </form>
</html>

