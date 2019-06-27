<?php

// pegando o id da categoria
$id = $_GET['id'];

require_once '../Model/Conexao.php';
require_once '../Model/Categoria_Dao.php';

$deletar = new Categoria_Dao();

$deletar -> deletar_categoria($conn, $id);
