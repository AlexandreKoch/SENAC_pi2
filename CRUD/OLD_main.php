<?php

/* create
update
replace 
delete
listar */

//C create
//R retriever (select)
//U update
//D delete
require_once('Produto.php');

$listaProdutos = array();

function inserir(Produto $produto){
    $GLOBALS['listaProdutos']= $produto;
}

function listar() {
    return $listaProdutos();
}

// $listaProdutos[] = new Produto(1, 'Prod1', 30);
$listaProdutos[] = new Produto(2, 'Prod2', 32.5);
// $listaProdutos[] = new Produto(3, 'Prod3', 37);
inserir(new Produto(1, 'Prod1', 30))

print_r(listar());

?>