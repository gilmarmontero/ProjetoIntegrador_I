<?php

// pegando o id da categoria
$id = $_GET['id'];

require_once '../Model/Conexao.php';
require_once '../Model/Fornecedor_Dao.php';

$deletar = new Fornecedor_Dao();

$deletar -> deletar_fornecedor($conn, $id);
