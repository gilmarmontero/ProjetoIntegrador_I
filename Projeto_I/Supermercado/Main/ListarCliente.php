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
		

		$result = $conn -> query("SELECT idCliente, nome, cpf, endereco, telefone, cidade, estado FROM cliente");

		
		echo '
			<table class="table table">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Cpf</th>
					<th scope="col">Endereço</th>
					<th scope="col">Telefone</th>
					<th scope="col">Cidade</th>
					<th scope="col">Estado</th>
					<th scope="col">Alterar</th>
					<th scope="col">Deletar</th>
				</tr>';

			if ($result) {

				
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					
					echo '<tr>';
					echo 	'<td>'.$row -> idCliente .'</td>'. 
							'<td>'. $row -> nome .'</td>'.
							'<td>'.$row -> cpf .'</td>'. 
							'<td>'. $row -> endereco .'</td>'.
							'<td>'.$row -> telefone .'</td>'. 
							'<td>'. $row -> cidade .'</td>'.
							'<td>'. $row -> estado .'</td>
							<td> <a href="../View/AlterarClientes.php?id='.
							 $row -> idCliente.'">Alterar</a>'.'</td>
							<td><a href="../Main/DeletarCliente.php?id='.
							 $row -> idCliente.'">Deletar</a></td>';
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
