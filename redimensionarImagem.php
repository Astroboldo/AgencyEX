<?php
    $nomeArquivo = "Luciana (1).jpg";
    $path = "painel/imagens/94163/Luciana (1).jpg";
	$altura = "550";
	$largura = "500";
	echo "Altura pretendida: $altura - largura pretendida: $largura <br>";
	
			$imagem_temporaria = imagecreatefromjpeg($path);
			
			$largura_original = imagesx($imagem_temporaria);
			
			$altura_original = imagesy($imagem_temporaria);
			
			echo "largura original: $largura_original - Altura original: $altura_original <br>";
			
			$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
			
			$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
			
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
			imagejpeg($imagem_redimensionada, 'painel/imagens/94163/'.$nomeArquivo);			
			
		
?>