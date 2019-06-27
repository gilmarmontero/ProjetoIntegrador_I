<?php

	class Categoria_Dao{

		function deletar_categoria($conn, $id){
		$result = $conn -> query("DELETE FROM categoria 
							WHERE idcategoria = '{$id}'");
		if($result){
			$msg = "Deletado com sucesso!";
			header("Location: ../Main/ListarCategoria.php?msg=$msg");
		}else{
			$msg_erro = "Erro ao deletar.";
			header("Location: ../Main/ListarCategoria.php?msg_erro=$msg_erro");
		}
	}
		function inserir_categoria($conn, $valor){
		
		$result = $conn->exec("INSERT INTO categoria(nome) VALUES (
			'{$valor['nome']}')");

		if ($result) {
			echo "Categoria cadastrada com sucesso!";
			header("Location: ../View/FormCadastrarCategoria.html");
		}
	}

		function listar_categorias($conn){
		$result = $conn -> query("SELECT * FROM categoria");
		return $result;
	}
		function buscar_categoria_id($conn, $id){
		$result = $conn -> query("SELECT * FROM categoria where idcategoria = '{$id}'");
		return $result;

	}




}

?>