<?php


$dados = array();
$dados = $_POST;
require_once '../Model/Conexao.php';
require_once '../Controle/ObjetoCategoria.php';
require_once '../Model/Categoria_Dao.php';



$categoria = new Categoria();
$cat = new Categoria_Dao();

$categoria -> setNome($dados);

$valor = array();

$valor['nome'] = $categoria -> getNome();

$cat -> inserir_categoria($conn, $valor);





?>