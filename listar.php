<?php
	include "cabecalho.html";
?>

<?php
	$xml = simplexml_load_file("portifolios.xml");
	
	echo "<table border=1>";
		echo "<tr>";
			echo "<th>Atividade</th>";
			echo "<th>Data</th>";
			echo "<th>Arquivo p/ download</th>";
		echo "</tr>";
	
		foreach($xml->children() as $portifolio){
			echo "<tr>";
				echo "<td>";
					echo "<a href='http://$portifolio->link'>$portifolio->nome</a>";
				echo "</td>";
				echo "<td>";
					echo $portifolio->data;
				echo "</td>";
				echo "<td>";
					echo "<a href='$portifolio->file' download>Baixar</a>";
				echo "</td>";
			echo "</tr>";
		}
		
	echo "</table>";	
	
	echo "<br /> <p><a href=\"http://gmartinez.epizy.com/portifolio/portifolio.php/\"> Voltar ao menu (Cadastro) <a/></p>";
	
?>

