<?php 

class Cliente_Dao{


	 function inserir_cliente($conn, $dados2){
		
		$result = $conn->exec("INSERT INTO cliente(nome, cpf, endereco, telefone, cidade, estado) VALUES (
			'{$dados2['nome']}',
			'{$dados2['cpf']}',
			'{$dados2['endereco']}',
			'{$dados2['telefone']}',
			'{$dados2['cidade']}',
			'{$dados2['estado']}')");
		if ($result) {
			echo "Cliente cadastrado com sucesso!";
			header("Location: ../View/FormCadastroCliente.html");
		}
	}

	function alterar_cliente($conn, $cliente){
		
		$result = $conn -> query("UPDATE cliente SET 
								nome = '{$cliente['nome']}', 
								cpf = '{$cliente['cpf']}', 
								endereco = '{$cliente['endereco']}', 
								telefone = '{$cliente['telefone']}', 
								cidade = '{$cliente['cidade']}', 
								estado = '{$cliente['estado']}'
								WHERE idCliente = '{$cliente[$id]}'");
		if ($result) {
			//echo "Atualizado com sucesso!";
			header("Location: ListarCliente.php");
		}else{
			echo "Erro ao atualizar!";
		}	
	}


	function deletar_cliente($conn, $id){
		$result = $conn -> query("DELETE FROM cliente 
							      WHERE idCliente = '{$id}'");
		if($result){
			$msg = "Deletado com sucesso!";
			header("Location: ../Main/ListarCliente.php?msg=$msg");
		}else{
			$msg_erro = "Erro ao deletar.";
			header("Location: ../Main/ListarCliente.php?msg_erro=$msg_erro");
		}
	}


}


 ?>
