<?php
	$contrato = $_POST['search'];
	include_once("connection/conexao.php");
	$modelo = "SELECT * FROM cliente WHERE n_contrato = '$contrato' LIMIT 1";
	$exec_modelo = mysqli_query($conn, $modelo);
	$row_modelo = mysqli_fetch_assoc($exec_modelo);
	$qtd_modelo = mysqli_num_rows($exec_modelo);

	if($qtd_modelo > 0){
		$principal = $row_modelo['destaque_picture'];
		echo "<img src='painel/imagens/$contrato/$principal'>";
		echo "<br><br><center><font size='5px'>".$row_modelo['nome_completo']."</font></center>";
		echo "<center><a href='perfil_model.php?nct=$contrato'>Verificar Perfil Completo </a></center>";	
	}else{
		echo "Modelo Nao Existente no Banco de Dados";
	}



	


?>