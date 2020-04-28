<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Up Modelo </title>
    </head>
    <body>
        <h1>Cadastrar Modelo no Site</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?>
        <form method="POST" action="proc_cad_img.php" enctype="multipart/form-data">

        <fieldset>
            <legend>Dados do Modelo</legend>
            <label>Nº do Contrato:</label>
            <input type="text" name="contrato" placeholder="Digitar o contrato sem ponto" maxlength="6" value="<?php if($_GET['contrato']){echo $_GET['contrato']; }else{ }; ?>"><br><br>
            <label>Nome Completo:</label>
            <input type="text" name="nome" placeholder="Digitar o nome completo"  value="<?php if($_GET['nomeModelo']){echo $_GET['nomeModelo']; }else{ }; ?>"><br><br>
            <label>Idade:</label>
            <input type="text" name="idade" placeholder="Apenas numero" maxlength="2" value="<?php if($_GET['idade']){echo $_GET['idade']; }else{ }; ?>">&nbsp;&nbsp;
&nbsp;         
            <label>Sexo:</label>
            <input type="text" name="sexo" placeholder="M / F" maxlength="2">        
            <label>Altura:</label>
            <input type="text" name="altura" placeholder="em cm. Ex: 125" maxlength="3" value="<?php if($_GET['altura']){echo $_GET['altura']; }else{ }; ?>">cm &nbsp;&nbsp;&nbsp;
            <label>Cintura:</label>
            <input type="text" name="cintura" placeholder="em cm. Ex: 075" maxlength="3" value="<?php if($_GET['cintura']){echo $_GET['cintura']; }else{ }; ?>">cm<br><br>
            <label>Sapatos:</label>
            <input type="text" name="sapatos" placeholder="Apenas numero" maxlength="2" value="<?php if($_GET['sapato']){echo $_GET['sapato']; }else{ }; ?>"> &nbsp;&nbsp;&nbsp;
            <label>Olhos:</label>
            <input type="text" name="olhos" placeholder="Seja breve" value="<?php if($_GET['olhos']){echo $_GET['olhos']; }else{ }; ?>"> <br><br>
            <label>Sobre o Modelo:</label><br>
            <textarea rows="10" cols="72" style="resize: none;" placeholder="Caso não tenha escreva 'Aguardando Biografia '" name="sobremodelo"></textarea>
        </fieldset>
        <fieldset>
            <legend>Imagens</legend>
            <label><b>Destaque</b></label><br>
            <input type="file" name="imagem_destaque"><br><br>
            <label><b>Galeria</b></label><br>
            <input type="file" name="imagem_um"><br><br>
            <input type="file" name="imagem_dois"><br><br>
            <input type="file" name="imagem_tres"><br><br>
        </fieldset>
        <fieldset>
            <legend>Opções no Site</legend>
            <label>Página Principal TOPO:</label>
            <input type="checkbox" name="top" value="1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Página Principal FOOTER: </label>
            <input type="checkbox" name="footer" value="1"><br>
        </fieldset>
        <fieldset>
            <legend>Categoria do Modelo</legend>
            <input type="text" name="categoria" placeholder="(1)-Bebê / (2) - Kids / (3) - Infantil / (4) - Adulto" style="width: 600px;"><br><br>
        </fieldset>
        <fieldset>
            <legend>Módulo de Envio</legend>
            <input name="SendCadImg" type="submit" value="Cadastrar">
        </fieldset>
        </form>

    </body>
</html>
