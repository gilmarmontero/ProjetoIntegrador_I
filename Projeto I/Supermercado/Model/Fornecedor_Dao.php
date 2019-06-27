<?php 
	
	class Fornecedor_Dao{

		function inserir_fornecedor($conn, $dados){
		
		$result = $conn->exec("INSERT INTO fornecedor(nome) VALUES (
			'{$dados['nome']}')");
		if ($result) {
			echo "Fornecedor cadastrado com sucesso!";
			header("Location: ../View/FormCadastrarFornecedor.html");
		}
	}
		function listar_fornecedor($conn){
		$result = $conn -> query("SELECT * FROM fornecedor");
		return $result;
	}

		function deletar_fornecedor($conn, $id){
		$result = $conn -> query("DELETE FROM fornecedor 
							WHERE id = '{$id}'");
		if($result){
			$msg = "Deletado com sucesso!";
			header("Location: ListarFornecedor.php?msg=$msg");
		}else{
			$msg_erro = "Erro ao deletar.";
			header("Location: ListaFornecedor.php?msg_erro=$msg_erro");
		}
	}

}



 ?>