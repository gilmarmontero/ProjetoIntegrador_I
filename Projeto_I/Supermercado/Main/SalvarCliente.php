<?php

$dados = array();
$dados = $_POST;
require_once '../Model/Conexao.php';
require_once '../Controle/ObjetoCliente.php';
require_once '../Model/Cliente_Dao.php';



$cliente = new Cliente();
$cli = new Cliente_Dao();

$cliente -> setNome($dados); 
$cliente -> setCpf($dados);
$cliente -> setEndereco($dados);
$cliente -> setTelefone($dados);
$cliente -> setCidade($dados);
$cliente -> setEstado($dados);


$dados2 = array();

$dados2['nome'] = $cliente -> getNome(); 
$dados2['cpf'] = $cliente -> getCpf();
$dados2['endereco'] = $cliente -> getEndereco();
$dados2['telefone']= $cliente -> getTelefone();
$dados2['cidade'] = $cliente -> getCidade();
$dados2['estado'] = $cliente -> getEstado();



$cli -> inserir_cliente($conn, $dados2);

?>