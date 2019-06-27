<?php


$dados = $_POST;
require_once '../Model/Conexao.php';
require_once '../Controle/ObjetoProduto.php';
require_once '../Model/Produto_Dao.php';



$produto = new Produto();
$pro = new Produto_Dao();

$produto -> setNome($dados); 
$produto -> setValor($dados);
$produto -> setUnidade($dados);
$produto -> setQuantidade($dados);
$produto -> setCategoria($dados);
$produto -> setFornecedor($dados);


$dados2 = array();

$dados2['nome'] = $produto -> getNome(); 
$dados2['valor'] = $produto -> getValor();
$dados2['unidade'] = $produto -> getUnidade();
$dados2['quantidade']= $produto -> getQuantidade();
$dados2['categoria'] = $produto -> getCategoria();
$dados2['fornecedor'] = $produto -> getFornecedor();



$pro -> inserir_produto($conn, $dados2);

?>