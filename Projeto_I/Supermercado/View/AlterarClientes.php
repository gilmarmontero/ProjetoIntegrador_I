<?php
	include_once '../Model/Conexao.php';

	$id = $_GET["id"];
	
	$result = $conn -> query("SELECT * FROM cliente WHERE idCliente = '{$id}'");
	if ($result){
		$row = $result->fetch();
		$id = $row["idCliente"];
		$nome = $row["nome"];
		$cpf = $row["cpf"];
		$endereco = $row["endereco"];
		$telefone = $row["telefone"];
		$cidade = $row["cidade"];
		$estado = $row["estado"];
	}
	
?>



<!DOCTYPE html>
<html>
	<head>
				
		<title>Comercial compre bem</title>
		<meta charset="utf-8">
		
	<link rel="stylesheet" type="text/css" href="CSS_AlterarClientes.css">
	
		
</head>
<body>

		<div id="tp">
			<h1> SUPERMERCADO COMPRE BEM</h1>

		</div>


		<form id="clientes" action="../Main/UpdateClientes.php" method="POST">
		<h4>ALTERAR CLIENTES</h4>
		<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
		<label>Nome do Cliente</label><br>
		<input type="text" name="nome"value="<?php echo $nome; ?>" ><br>
		<label>CPF</label><br>
		<input type="text" name="cpf" value="<?php echo $cpf; ?>" ><br>
		<label>Endereço</label><br>
		<input type="text" name="endereco" value="<?php echo $endereco; ?>" ><br>
		<label>Telefone</label><br>
		<input type="text" name="telefone" value="<?php echo $telefone; ?>" ><br>
		<label>Cidade</label><br>
		<input type="text" name="cidade" value="<?php echo $cidade; ?>" ><br>
		<label>Estado</label><br>
		<input type="text" name="estado" value="<?php echo $estado; ?>" "><br>
		<br>
		
		<p class="enviar">
			<input type="submit" name="alterar" value="Alterar">
		</p>
	</form>
		   

		    <div id="esquerdo">
					<img src="../IMG/1.jpg" style="width: 409px"height="299px">
		
					<img src="../IMG/2.jpg" style="width: 409px" height="299px">
		
				</div>
				<div id="direito">
					<img src="../IMG/3.jpeg" style="width: 390px"height="299px">
					<img src="../IMG/4.jpg" style="width: 390px"height="299px">
				</div>
			
			
		
	</body>
</html>