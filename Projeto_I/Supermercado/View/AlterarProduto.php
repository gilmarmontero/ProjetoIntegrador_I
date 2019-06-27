
<?php
	include_once '../Model/Conexao.php';

	$ide = $_GET["id"];
	
	$result = $conn -> query("SELECT * FROM produto WHERE id = '{$ide}'");
	if ($result){
		$row = $result->fetch();
		$id = $row["id"];
		$nome = $row["nome"];
		$valor = $row["valor"];
		$unidade = $row["unidade"];
		$quantidade = $row["quantidade"];
		$categoria = $row["categoria"];
		$fornecedor = $row["fornecedor"];
		
	}
	
?>


<?php
					require_once '../Model/Conexao.php';
					require_once '../Model/Categoria_Dao.php';
					require_once '../Model/Fornecedor_Dao.php';
			?>

<!DOCTYPE html>
<html>
	<head>
				
		<title>Comercial compre bem</title>
		<meta charset="utf-8">
		
	<link rel="stylesheet" type="text/css" href="CSS_AlterarProduto.css">
	
		
</head>
<body>

		<div id="tp">
			<h1> SUPERMERCADO COMPRE BEM</h1>

		</div>


		<form id="clientes" action="../Main/UpdateProdutos.php" method="POST">
			<h4>ALTERAR PRODUTO</h4>
			<?php  

				if (isset($_GET["resposta"])) {
					echo "<p class='alerta'>".$_GET["resposta"]."</p>";
				}
			?>
			<input type="hidden" name="id" value="<?php echo $id; ?>"><br>
			
			<label>Nome do Produto</label><br>
			<input type="text" name="nome" value="<?php echo $nome; ?>"><br>
			<label>Valor </label><br>
			<input type="text" name="valor" value="<?php echo $valor; ?>"><br>
			<label>Unidade</label><br>
			<input type="text" name="unidade" value="<?php echo $unidade; ?>"><br>
			<label>Quantidade em estoque</label><br>
			<input type="text" name="quantidade" value="<?php echo $quantidade; ?>"><br>

			<label>Categoria</label><br>

			<select name="categoria">

				<option>Escolha uma Categoria</option>
	
				<?php
					$prod = new Categoria_Dao();
					$result = $prod->listar_categorias($conn);

					foreach ($result as $key => $linha) {
					
					echo "<option value=".$linha['idcategoria'].">".$linha['nome']."</option>";
					}
					
				?>

				</select><br>

				<label>Fornecedor</label><br>

				<select name="fornecedor">

				<option>Escolha um Fornecedor</option>
				<?php
					$prod = new Fornecedor_Dao();
					$result = $prod->listar_fornecedor($conn);

					foreach ($result as $key => $linha) {
					
					echo "<option value=".$linha['id'].">".$linha['nome']."</option>";
					}
					
				?>

			</select><br>	
				
		<p class="enviar">
			<input type="submit" name="Cadastrar" value="Alterar">
		</p>
	</form>
		   

		    <div id="esquerdo">
					<img src="../IMG/1.jpg" style="width: 409px"height="299px">
		
					<img src="../IMG/2.jpg" style="width: 409px"height="299px">
		
			</div>
				<div id="direito">
					<img src="../IMG/3.jpeg" style="width: 390px"height="299px">
					<img src="../IMG/4.jpg" style="width: 390px"height="299px">
				</div>
			
			
		
	</body>
</html>


