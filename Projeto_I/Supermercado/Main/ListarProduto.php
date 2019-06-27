<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../IMG/img/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

</head>
<body>
<div class="container">

<?php
		if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "
			<div class='alert alert-success' role='alert'>
				$msg
			</div> ";
		}

		if(isset($_GET['msg_erro'])){
			$msg = $_GET['msg_erro'];
			echo "
			<div class='alert alert-danger' role='alert'>
				$msg
			</div> ";
		}
	
		include_once '../Model/Conexao.php';
		

		$result = $conn -> query("SELECT id, nome, valor, unidade, quantidade, categoria, fornecedor FROM produto");

		
		echo '
			<table class="table table">
				<tr>
					
					<th scope="col">Nome</th>
					<th scope="col">Valor</th>
					<th scope="col">Unidade</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Categoria</th>
					<th scope="col">Fornecedor</th>
					<th scope="col">Alterar</th>
					<th scope="col">Deletar</th>
				</tr>';

			if ($result) {

				
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					
					echo '<tr>';
					echo 	'<td>'. $row -> nome .'</td>'.
							'<td>'.$row -> valor .'</td>'. 
							'<td>'. $row -> unidade .'</td>'.
							'<td>'.$row -> quantidade .'</td>'. 
							'<td>'. $row -> categoria .'</td>'.
							'<td>'. $row -> fornecedor .'</td>
							<td> <a href="../View/AlterarProduto.php?id='.
							 $row -> id.'">Alterar</a>'.'</td>
							<td><a href="../Main/DeletarProduto.php?id='.
							 $row -> id.'">Deletar</a></td>';
				echo '</tr>';
				}
			}
			$conn = null;
			echo "</table>";
?>
	<a href="../View/home.html">Home</a>

</div>
</body>
</html>
