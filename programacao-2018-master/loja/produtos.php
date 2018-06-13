<html>
    <?php if(isset($_GET['produto'])): ?>
        <h1><?= $_GET['produto'] ?></h1>
    <?php elseif(isset($_POST['busca'])): ?>
        <h1>Item <?= $_POST['busca'] ?> não encontrado</h1>
    <?php else:
        header('Location: index.php');
    endif;
    ?>
    <?php include 'perfil.php' ?>
</html>