<?php


$dados = $_POST;



require_once '../Model/Conexao.php';

try{
		
		$result = $conn -> query("UPDATE produto SET 
								nome = '{$dados['nome']}', 
								valor = '{$dados['valor']}', 
								unidade = '{$dados['unidade']}', 
								quantidade = '{$dados['quantidade']}', 
								categoria = '{$dados['categoria']}', 
								fornecedor = '{$dados['fornecedor']}'
								WHERE id = '{$dados['id']}'");
		if ($result) {
			echo "Atualizado com sucesso!";
			header("Location: ../Main/ListarProduto.php");
		}else{
			echo "Erro ao atualizar!";
		}	
		$conn = null;
	} catch (PDOException $e) {
		print "Erro!: ". $e -> getMessage(). "<br>";
	}