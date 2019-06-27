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
		
	<link rel="stylesheet" type="text/css" href="CSS_CadProduto.css">
	
		
</head>
<body>
	

		<div id="tp">
			<h1> SUPERMERCADO COMPRE BEM</h1>

		</div>


		<form id="clientes" action="../Main/SalvarProduto.php" method="POST">
			<h4>CADASTRO DE PRODUTO</h4>
			
			<label>Nome do Produto</label><br>
			<input type="text" name="nome"placeholder="Informe o nome do produto"><br>

			<label>Valor </label><br>
			<input type="text" name="valor"placeholder="Informe o valor"><br>
			<label>Unidade</label><br>
			<input type="text" name="unidade"placeholder="Informe  unidade"><br>

			<label>Quantidade em estoque</label><br>
			<input type="text" name="quantidade"placeholder="Informe a quantidade"><br>

			<label>Categoria</label><br>

			<select name="categoria">

				<option>Escolha uma categoria</option>
	
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
			<input type="submit" name="Cadastrar" value="Cadastrar">

		</p>

		<a href="home.html">Home</a>
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