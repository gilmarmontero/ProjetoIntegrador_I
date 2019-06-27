<?php


$dados = $_POST;



require_once '../Model/Conexao.php';

try{
		
		$result = $conn -> query("UPDATE categoria SET 
								nome = '{$dados['nome']}'
								WHERE idcategoria = '{$dados['id']}'");
		if ($result) {
			echo "Atualizado com sucesso!";
			header("Location: ../Main/ListarCategoria.php");
		}else{
			echo "Erro ao atualizar!";
		}	
		$conn = null;
	} catch (PDOException $e) {
		print "Erro!: ". $e -> getMessage(). "<br>";
	}