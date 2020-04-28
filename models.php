<?php 
include_once("connection/conexao.php"); 

$pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
	<title>Agency Exclusive Oficial - Modelos</title>
	<meta charset="utf-8">
	<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css" id="color-switcher-link">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/fonts.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164580412-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164580412-1');
</script>

</head>

<body>
	<!--[if lt IE 9]>
        <div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="POST" class="searchform form-inline" action="">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Digite o Número do Contrato do Modelo ..." id="modal-search-input">
				</div>
				<button type="submit" class="theme_button input_button">Procurar</button>
			</form>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<header class="page_header header_darkgrey columns_padding_0 table_section">
				<?php
					include_once("include/menu.php");
				?>
			</header>

			<section class="page_breadcrumbs changeable ls ms gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">
				<?php
					include_once("include/topo2.php");
				?>

			</section>
			
			<section class="ms ls page_models models_portrait gorizontal_padding section_padding_70">
				<div class="container-fluid">
					<div class="row boxed-padding bottommargin_40">
						<div class="col-lg-7">
							<div class="filters isotope_filters inline-block margin_0">
								<a href="#" data-filter="*" class="selected">All</a>
								<a href="#" data-filter=".1">Bebê</a>
								<a href="#" data-filter=".2">Kids</a>
								<a href="#" data-filter=".3">Infantil</a>
								<a href="#" data-filter=".4">Adulto</a>
							</div>
						</div>
                        <div class="col-lg-5">
                            Informamos aos nossos modelos que esta página não é utilizada por nossas lojas e marcas parceiras para a pesquisa de modelos para trabalho. Apenas para a visualização simplicita de alguns de nossos modelos.
                        </div>
					</div>
					<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
						<?php
						//INICIO DA CONSULTA DO MODELO
						$consult_model = "SELECT * FROM cliente WHERE galeria = '1' ORDER BY RAND()";
                        $exec_consult_model = mysqli_query($conn, $consult_model);
                        $totalRetorno=mysqli_num_rows($exec_consult_model);
                        $qtdForPage=50;

                        $num_pagina = ceil($totalRetorno/$qtdForPage);

                        $incio = ($qtdForPage*$pagina)-$qtdForPage;

                        $consult_model = "SELECT * FROM cliente WHERE galeria = '1' limit $incio, $qtdForPage";
                        $exec_consult_model = mysqli_query($conn, $consult_model);
                        $totalRetorno=mysqli_num_rows($exec_consult_model);

						while($row_model = mysqli_fetch_assoc($exec_consult_model)){
							$categoria = $row_model['categoria'];
							$nome_modelo = $row_model['nome_completo'];
							$contrato = $row_model['n_contrato'];
							$destaque = $row_model['destaque_picture'];
						?>

						<div class="isotope-item co0l-lg-3 col-md-4 col-sm-6 <?php echo $categoria; ?>">
							<div class="vertical-item content-absolute">
								<div class="item-media">
									<img src="painel/imagens/<?php echo $contrato."/".$destaque; ?>" alt="" width="500px" height="550px">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-link" title="" href="perfil_model.php?<?php echo "nct=".$contrato; ?>"></a>
										</div>
									</div>
								</div>
							</div>
							<div class="item-title text-center">
								<h4>
									<a href="model.html"><?php echo $nome_modelo; ?></a>
								</h4>
							</div>
						</div>
						<?php	
							//FIM DA CONSULTA DO MODELO
                            };                            
                            //Verificar a pagina anterior e posterior
                            $pagina_anterior = $pagina - 1;
                            $pagina_posterior = $pagina + 1;
						?>					
				</div>
                <nav class="text-center">
				<ul class="pagination">
					<li>
						<?php
						if($pagina_anterior != 0){ ?>
							<a href="testePaginacao.php?pagina=<?php echo $pagina_anterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&laquo;</span>
					<?php }  ?>
					</li>
					<?php 
					//Apresentar a paginacao
					for($i = 1; $i < $num_pagina + 1; $i++){ ?>
						<li><a href="testePaginacao.php?pagina=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php } ?>
					<li>
						<?php
						if($pagina_posterior <= $num_pagina){ ?>
							<a href="testePaginacao.php?pagina=<?php echo $pagina_posterior; ?>" aria-label="Previous">
								<span aria-hidden="true">&raquo;</span>
							</a>
						<?php }else{ ?>
							<span aria-hidden="true">&raquo;</span>
					<?php }  ?>
					</li>
				</ul>
			</nav>
			</div>
			</section>
			<?php
				include_once("include/footer2.php");
			?>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
</body>

</html>