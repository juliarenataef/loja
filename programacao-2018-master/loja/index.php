<?php

//include "visoes/principal/teste.php";


require_once '../loja/model/CategoriaCrud.php';
require_once '../loja/model/ProdutoCrud.php';

if (isset($_GET['acao'])){

    $acao= $_GET['acao'];
}else{

    $acao='index';
}

switch($acao){
    case'index';

        $crud = new CategoriaCrud();
        $categorias =$crud->getCategorias();

        $crud = new ProdutoCrud();
        $produtos =$crud->getProdutos();
        include "visoes/principal/teste.php";
        break;

}