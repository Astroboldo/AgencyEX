<?php
	$servidor = "51.79.83.205";
	$usario = "wwwagencyexclusi_admin";
	$senha = "Agency*9947*";
	$dbname = "wwwagencyexclusi_exclusivesite";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor,$usario,$senha,$dbname);
	

	
	//Checar a conexao
	if(!$conn){
		die("Falha na conexao com o banco: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>