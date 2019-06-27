<?php


$dados = array();
$dados['usuario'] = $_POST['usuario'];
$dados['senha'] = $_POST['senha'];

$login = 'ads';
$password = 'ads';






if ($dados['usuario'] == $login  && $dados['senha'] == $password){
	header("Location:../View/home.html");

}else{
	
	header("Location:../View/Erro_Login.html");





}

