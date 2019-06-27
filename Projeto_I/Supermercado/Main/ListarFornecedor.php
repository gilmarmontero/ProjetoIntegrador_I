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
		

		$result = $conn -> query("SELECT id, nome FROM fornecedor");

		
		echo '
			<table class="table table">
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Alterar</th>
					<th scope="col">Deletar</th>
				</tr>';

			if ($result) {

				
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					
					echo '<tr>';
					echo 	'<td>'.$row -> id .'</td>'. 
							'<td>'. $row -> nome .'</td>
							<td> <a href="../View/AlterarFornecedor.php?id='.
							 $row -> id.'">Alterar</a>'.'</td>
							<td><a href="../Main/DeletarFornecedor.php?id='.
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
