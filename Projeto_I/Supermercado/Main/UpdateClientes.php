<?php


$dados = $_POST;



require_once '../Model/Conexao.php';

try{
		
		$result = $conn -> query("UPDATE cliente SET 
								nome = '{$dados['nome']}', 
								cpf = '{$dados['cpf']}', 
								endereco = '{$dados['endereco']}', 
								telefone = '{$dados['telefone']}', 
								cidade = '{$dados['cidade']}', 
								estado = '{$dados['estado']}'
								WHERE idCliente = '{$dados['id']}'");
		if ($result) {
	
			echo "Atualizado com sucesso!";
			header("Location: ListarCliente.php");
		}else{
			echo "Erro ao atualizar!";
		}	
		$conn = null;
	} catch (PDOException $e) {
		print "Erro!: ". $e -> getMessage(). "<br>";
	}



?>