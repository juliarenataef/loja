<?php

require_once '../loja/model/CategoriaCrud.php';
require_once '../model/ProdutoCrud.php';

if (isset($_GET['acao'])){

    $acao= $_GET['acao'];
}else{

    $acao='index';
}

switch($acao){
    case'index';

        $crud = new CategoriaCrud();
        $categorias =$crud->getCategorias();
        include "visoes/principal/teste.php";
        break;

}