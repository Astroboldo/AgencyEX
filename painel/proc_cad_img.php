<?php

session_start();
include_once ("conexao.php");
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendCadImg = filter_input(INPUT_POST, 'SendCadImg', FILTER_SANITIZE_STRING);
if ($SendCadImg) {
    //Receber os dados do formulário
    $contrato = filter_input(INPUT_POST, 'contrato', FILTER_SANITIZE_STRING);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $altura = filter_input(INPUT_POST, 'altura', FILTER_SANITIZE_STRING);
    $cintura = filter_input(INPUT_POST, 'cintura', FILTER_SANITIZE_STRING);
    $sapatos = filter_input(INPUT_POST, 'sapatos', FILTER_SANITIZE_STRING);
    $olhos = filter_input(INPUT_POST, 'olhos', FILTER_SANITIZE_STRING);
    $sobremodelo = filter_input(INPUT_POST, 'sobremodelo', FILTER_SANITIZE_STRING);
    $destaquetop = filter_input(INPUT_POST, 'top', FILTER_SANITIZE_STRING);
    $destaquefooter = filter_input(INPUT_POST, 'footer', FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    $nome_imagem_destaque = $_FILES['imagem_destaque']['name'];
    $nome_imagem_um = $_FILES['imagem_um']['name'];
    $nome_imagem_dois = $_FILES['imagem_dois']['name'];
    $nome_imagem_tres = $_FILES['imagem_tres']['name'];
    //var_dump($_FILES['imagem']);
    //Inserir no BD
    $result_img = "INSERT INTO cliente (nome_completo, n_contrato, destaque_picture, imagem_1, imagem_2, imagem_3, idade, altura, cintura, sapatos, olhos, sexo, descricao, destaque_top, destaque_footer, created, categoria) VALUES (:nome, :contrato, :destaque_picture, :imagem_1, :imagem_2, :imagem_3, :idade, :altura, :cintura, :sapatos, :olhos, :sexo, :descricao, :destaquetop, :destaquefooter, NOW(), :categoria)";
    $insert_msg = $conn->prepare($result_img);
    $insert_msg->bindParam(':nome', $nome);
    $insert_msg->bindParam(':contrato', $contrato);
    $insert_msg->bindParam(':destaque_picture', $nome_imagem_destaque);
    $insert_msg->bindParam(':imagem_1', $nome_imagem_um);
    $insert_msg->bindParam(':imagem_2', $nome_imagem_dois);
    $insert_msg->bindParam(':imagem_3', $nome_imagem_tres);
    $insert_msg->bindParam(':altura', $altura);
    $insert_msg->bindParam(':cintura', $cintura);
    $insert_msg->bindParam(':sapatos', $sapatos);
    $insert_msg->bindParam(':olhos', $olhos);
    $insert_msg->bindParam(':idade', $idade);
    $insert_msg->bindParam(':sexo', $sexo);
    $insert_msg->bindParam(':descricao', $sobremodelo);
    $insert_msg->bindParam(':destaquetop', $destaquetop);
    $insert_msg->bindParam(':destaquefooter', $destaquefooter);
    $insert_msg->bindParam(':categoria', $categoria);


    //Verificar se os dados foram inseridos com sucesso
    if ($insert_msg->execute()) {
        //Recuperar último ID inserido no banco de dados
        $ultimo_id = $contrato;

        //Diretório onde o arquivo vai ser salvo
        $diretorio = 'imagens/' . $ultimo_id.'/';

        //Criar a pasta de foto 
        mkdir($diretorio, 0755);
        
        if(move_uploaded_file($_FILES['imagem_destaque']['tmp_name'], $diretorio.$nome_imagem_destaque) && move_uploaded_file($_FILES['imagem_um']['tmp_name'], $diretorio.$nome_imagem_um) && move_uploaded_file($_FILES['imagem_dois']['tmp_name'], $diretorio.$nome_imagem_dois) && move_uploaded_file($_FILES['imagem_tres']['tmp_name'], $diretorio.$nome_imagem_tres)){

            $_SESSION['msg'] = "<p style='color:green;'>Dados salvo com sucesso e upload da imagem realizado com sucesso</p>";
            header("Location: index.php");

        }else{
            $_SESSION['msg'] = "<p><span style='color:green;'>Dados salvo com sucesso. </span><span style='color:red;'>Erro ao realizar o upload da imagem</span></p>";
            header("Location: index.php");
        }        
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
        header("Location: index.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao salvar os dados</p>";
    header("Location: index.php");
}