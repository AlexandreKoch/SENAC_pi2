<?php 
require('Produto.php');

$listaProdutos = array();


function inserir(Produto $produto){
    $GLOBALS['listaProdutos'][] = $produto;
}

function listar(){
    return $GLOBALS['listaProdutos'];
}

function buscarPorId($id){
    foreach($GLOBALS['listaProdutos'] as $prod){
        if($prod->getId() == $id)
            return $prod;        
    }
    return null;
  }

  function deletar($id)
  {
    foreach($GLOBALS['listaProdutos'] as $i => $produto) 
    {
        if($produto->getId() == $id)
            array_splice($GLOBALS['listaProdutos'],$i,1);    
    }
  }

  function atualizar($id,Produto $produtoAlterado)
  {
    foreach($GLOBALS['listaProdutos'] as $i => $produto) 
    {
        if($produto->getId() == $id)
        {
            $produto->setNome($produtoAlterado->getNome());    
            $produto->setPreco($produtoAlterado->getPreco());
        }
    }
      
  }

inserir(new Produto(1,"Prod1",30));
inserir(new Produto(2,"Prod2",32.5));
inserir(new Produto(3,"Prod3",37));
inserir(new Produto(4,"Prod4",50));

print_r(buscarPorId(3));

deletar(3);
  
atualizar(4,new Produto(4,"Produto X",78.0));

print_r(listar());
?>