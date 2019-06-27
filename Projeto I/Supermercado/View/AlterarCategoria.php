
<?php
	include_once '../Model/Conexao.php';

	$id = $_GET["id"];
	
	$result = $conn -> query("SELECT * FROM categoria WHERE idcategoria = '{$id}'");
	if ($result){
		$row = $result->fetch();
		$id = $row["idcategoria"];
		$nome = $row["nome"];
		
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
				
		<title>Comercial compre bem</title>
		<meta charset="utf-8">
		
	<link rel="stylesheet" type="text/css" href="CSS_CadCategoria.css">
	
		
</head>
<body>

		<div id="tp">
			<h1> SUPERMERCADO COMPRE BEM</h1>

		</div>


		<form id="clientes" action="../Main/UpdateCategoria.php" method="POST">
			<h4>ALTERAR CATEGORIA</h4>

			<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			<label>Nome da Categoria</label><br>
			<input type="text" name="nome" placeholder="Informe a categoria" value="<?php echo $nome; ?>"><br>
				
		<p class="enviar">
			<input type="submit" name="Cadastrar" value="ALTERAR">
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