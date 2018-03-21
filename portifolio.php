<?php
 include "cabecalho.html";
?>

<!DOCTYPE html>

<html lang="pt-BR">

	<head> 
		<title> Portifólio </title>
		<meta charset="UTF-8" />
		<link enctype="multipart/form-data" rel="stylesheet" type="text/css" href = "estilos.css"/>
		 
	
	</head>
	
	<body>
		
		
		<form action="cadastro_portifolio.php" method="post">
		
			<p>
				<label>Nome da Atividade: </label>
				<input type="text" name="nome" required="required"/>
			</p>
			<p>
				<label>Link: </label>
				<input type="text" name="link" required="required"/>
			</p>
			<p>
				<label>Data: </label>
				<input type="date" name="data" required="required"/>
			</p>
			<p>
				<label>Arquivo: </label>
				<input type="file" name="arquivo" required="required"/>
			</p>
			
			<p>
				<input type="submit" value="Enviar"/>
			</p>
		
		</form>
	</body>
	
</html>