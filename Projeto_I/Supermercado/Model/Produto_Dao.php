<?php 


class Produto_Dao{

	function inserir_produto($conn, $dados2){
		
		$result = $conn->exec("INSERT INTO produto(nome, valor, unidade, quantidade, categoria, fornecedor) VALUES (
			'{$dados2['nome']}',
			'{$dados2['valor']}',
			'{$dados2['unidade']}',
			'{$dados2['quantidade']}',
			'{$dados2['categoria']}',
			'{$dados2['fornecedor']}')");
		if ($result) {
			echo "Cliente cadastrado com sucesso!";
			header("Location: ../View/FormCadastrarProduto.php?resposta=Produto Cadastrado com Sucesso");
		}
	}

	

	function deletar_produto($conn, $id){
		$result = $conn -> query("DELETE FROM produto 
							WHERE id = '{$id}'");
		if($result){
			$msg = "Deletado com sucesso!";
			header("Location: ../Main/ListarProduto.php?msg=$msg");
		}else{
			$msg_erro = "Erro ao deletar.";
			header("Location: ../Main/ListarProduto.php?msg_erro=$msg_erro");
		}
	}

}
