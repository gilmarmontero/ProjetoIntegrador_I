<?php


$dados = $_POST;



require_once '../Model/Conexao.php';

try{
		
		$result = $conn -> query("UPDATE fornecedor SET 
								nome = '{$dados['nome']}'
								WHERE id = '{$dados['id']}'");
		if ($result) {
			echo "Atualizado com sucesso!";
			header("Location: ../Main/ListarFornecedor.php");
		}else{
			echo "Erro ao atualizar!";
		}	
		$conn = null;
	} catch (PDOException $e) {
		print "Erro!: ". $e -> getMessage(). "<br>";
	}