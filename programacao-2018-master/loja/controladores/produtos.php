<?php
// CONTROLADOR PARA CATEGORIAS
// vai verificar que ação o usuário deseja fazer
//dependendo da acão, faz algo

require_once '../model/ProdutoCrud.php';

if (isset($_GET['acao'])){

    $acao= $_GET['acao'];
}else{

    $acao='index';
}

switch($acao){
    case'index';

        $crud = new ProdutoCrud();
        $categorias =$crud->getProdutos();
        include '../visoes/templates/cabecalho.php';
        include '../visoes/produtos/produtosindex.php';
        include '../visoes/templates/rodape.php';
        break;

    case 'show':
        $id=$_GET['id'];
        $crud = new CategoriaCrud();
        $categoria = $crud->getCategoria($id);
        include '../visoes/templates/cabecalho.php';
        include '../visoes/produtos/show.php';
        include '../visoes/templates/rodape.php';
        break;

    case 'iserir';

        if (!isset($_POST['Gravar'])) {
            include '../visoes/templates/cabecalho.php';
            include '../visoes/produtos/inserir.php';
            include '../visoes/templates/rodape.php';
        }else {
            $nome = $POST['nome'];
            $descricao = $_POST['descricao'];
            $novaCategoria = new Categoria(null, $nome, $descricao);

            $crud = new CategoriaCrud();
            $crud->insertCategoria($novaCategoria);

            header('Location: categoria.php');
        }

    default:
        echo "opção invalida";
}
