─<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 28/02/18
 * Time: 13:36
 */

include "CategoriaCrud.php";

// valores recebido de um formulario por POST
$nome = 'Bicicletas';
$descricao = 'Vamos pedalar';
$id = "6";


//esse programador nao sabe SQL

//COMO INSERIR ESSES DADOS COMO UMA NOVA CATEGORIA NO BD

//crio o objeto
$cat1 = new Categoria();
$cat1->setNome($nome);
$cat1->setDescricao($descricao);

//instancio o crud
$crud = new CategoriaCrud();
//usando o crud, inserir nova categoria (passa o objeto para o método)
//$crud->updateCategoria($cat1);

$crud->insertCategoria($cat1);


