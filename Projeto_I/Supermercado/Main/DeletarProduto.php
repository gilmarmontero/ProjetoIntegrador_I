<?php

// pegando o id da categoria
$id = $_GET['id'];

require_once '../Model/Conexao.php';
require_once '../Model/Produto_Dao.php';

$deletar = new Produto_Dao();

$deletar -> deletar_produto($conn, $id);
