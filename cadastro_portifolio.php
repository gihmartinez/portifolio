<?php
	$nome = $_POST["nome"];
	$link = $_POST["link"];
	$data = $_POST["data"];
	
	if(isset($_FILES["fileUpload"])){
		date_default_timezone_set("Brazil/East");
		
		$ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); 
		$new_name = date("Y.m.d-H.i.s") . $ext; 
		$dir = 'uploads/'; 
		
		move_uploaded_file($_FILES['fileUpload'] ['tmp_name'], $dir.$new_name);	
	}
	
	/* $arquivo = $dir.$new_name; */
	
	
	if(!file_exists("portifolios.xml")){
		$xml = 
"<?xml version='1.0'  encoding='UTF-8'?>
<portifolios>
	<portifolio>
		<nome>$nome</nome>
		<link>$link</link>
		<data>$data</data>
		<file>$arquivo</file>
	</portifolio>
</portifolios>";

		file_put_contents("portifolios.xml", $xml);
	}else{
		$xml = simplexml_load_file("portifolios.xml");
		$portifolio = $xml->addChild("portifolio");
		$portifolio->addChild("nome", $nome);
		$portifolio->addChild("link", $link);
		$portifolio->addChild("data", $data);
		/* $portifolio->addChild("file", $arquivo); */
		file_put_contents("portifolios.xml", $xml->asXML());
	}
	
	
	
	
?>