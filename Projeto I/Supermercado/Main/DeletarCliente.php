<?php


$id = $_GET['id'];

require_once '../Model/Conexao.php';
require_once '../Model/Cliente_Dao.php';

$deletar = new Cliente_Dao();

$deletar -> deletar_cliente($conn, $id);
