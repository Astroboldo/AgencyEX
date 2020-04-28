
<?php
	//TESTE DE COMMIT
    function redimensionarImagem($contrato, $nomeArquivo){
            $path = "painel/imagens/".$contrato."/".$nomeArquivo;
            $altura = "550";
            $largura = "500";
            
			$imagem_temporaria = imagecreatefromjpeg($path);
			
			$largura_original = imagesx($imagem_temporaria);
			
			$altura_original = imagesy($imagem_temporaria);
			
			$nova_largura = $largura ? $largura : floor (($largura_original / $altura_original) * $altura);
			
			$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
			
			$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
			imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);
			
            imagejpeg($imagem_redimensionada, 'painel/imagens/'.$contrato.'/'.$nomeArquivo);

            echo " - Imagem Redimensionada";
            
    }



    include_once("connection/connectionPDO.php");
    $pdo=conectar();

    echo "<h2>Lista de Pastas Desativadas</h2>";
    $selectContratosOff=$pdo->prepare("SELECT * FROM cliente WHERE expirado='0' ORDER BY n_contrato DESC LIMIT 50,800");
    $selectContratosOff->execute();
    $linhaContratosOff=$selectContratosOff->fetchAll(PDO::FETCH_OBJ);

    foreach($linhaContratosOff as $rowContratoOff){
        echo "<h3>CNT: ".$rowContratoOff->n_contrato."</h3>";       

        $path = "painel/imagens/".$rowContratoOff->n_contrato;
        $contagemArquivo=0;

        foreach (new DirectoryIterator($path) as $fileInfo) {
            if ($fileInfo->isDot()) continue;
            echo "<br>";
            $nomeFoto = $fileInfo->getFilename(); 
            echo $fileInfo->getFilename();
            $sizeInfo=getimagesize($path."/".$fileInfo->getFileName());

            list($width, $height, $type, $attr) = getimagesize($path."/".$fileInfo->getFileName());
            echo "<br>";
            echo "Largura: ".$width." px "; 
            if($width <> 500){
                echo "<font color=red>ERRADO</font>"; 
                redimensionarImagem($rowContratoOff->n_contrato,$nomeFoto); 
            }else{   

            };
            echo "<br>";
            echo "Altura:".$height." px ";
            if($height <> 550){
                echo "<font color=red>ERRADO</font>"; 
                redimensionarImagem($rowContratoOff->n_contrato, $nomeFoto); 
            }else{   
                
            };

            
            $contagemArquivo+=1;
        }
        echo "<br>";
        echo "<br>Total: ".$contagemArquivo." arquivos"; 
        if($contagemArquivo == 4){
            echo " <font color=green><b>OK</b></font>";
        }else{
            echo " <font color=red><b>ERRO</b></font>";
        }
        
    }

    


?>


