<?php


$dados = $_POST;
require_once '../Model/Conexao.php';
require_once '../Controle/ObjetoFornecedor.php';
require_once '../Model/Fornecedor_Dao.php';



$fornecedor = new Fornecedor();
$For = new Fornecedor_Dao();

$fornecedor -> setNome($dados); 

$dados['nome'] = $fornecedor -> getNome();

$For -> inserir_fornecedor($conn, $dados);