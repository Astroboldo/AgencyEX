<?php
	include_once("connection/conexao.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138711818-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138711818-1');
</script>

	<title>Agency Exclusive Oficial</title>
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
			<form method="get" class="searchform form-inline" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Type search keyword here..." id="modal-search-input">
				</div>
				<button type="submit" class="theme_button input_button">Search</button>
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
					include_once("include/topo3.php");
				?>
			</section>
			<?php				$contrato = $_GET['nct'];			
								$consult_model = "SELECT * FROM cliente WHERE n_contrato = '$contrato'";
								$exec_consult_model = mysqli_query($conn, $consult_model);
								$row_model = mysqli_fetch_assoc($exec_consult_model);
								$destaque = $row_model['destaque_picture'];

			?>
			<section class="ls ms model-page section_padding_70 section_padding_bottom_60 columns_padding_25">
				<div class="container">
					<div class="row">

						<div class="col-md-5 col-md-push-7">
							<div class="vertical-item with_background models_square">
								<div class="item-media">
									<img src="painel/imagens/<?php echo $contrato."/".$destaque; ?>" alt="">
								</div>
								<div class="item-content with_padding">
									<h2 class="big topmargin_0 bottommargin_25"><?php echo $row_model['nome_completo']; ?></h2>
								</div>
								<div class="model-parameters grey gradient_bg_goriz before_cover">
									<div class="bg_overlay"></div>
									<div>
										<span class="bold">Altura</span>
										<br>
										<span><?php echo $row_model['altura']; ?></span>
									</div>
									<div>
										<span class="bold">Cintura</span>
										<br>
										<span><?php echo $row_model['cintura']; ?></span>
									</div>
									<div>
										<span class="bold">Sapato</span>
										<br>
										<span><?php echo $row_model['sapatos']; ?></span>
									</div>
									<div>
										<span class="bold">Olhos</span>
										<br>
										<span><?php echo $row_model['olhos']; ?></span>
									</div>
								</div>
								


							</div>

						</div>

						<div class="col-md-7 col-md-pull-5">
							<h2 class="topmargin_0 bottommargin_30">Perfil do Modelo Individual - #<?php echo $contrato; ?></h2>
							
							<p>
								<?php
									echo $row_model['descricao']."...";
								?>
							</p>
							<div class="filters isotope_filters topmargin_50">
								<a href="#" data-filter="*" class="selected">Fotos Adicionais</a>
							</div>
							<div class="columns_padding_5">
								<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 tests">
										<div class="vertical-item gallery-item content-absolute text-center cs">
											<div class="item-media">
												<img src="<?php echo "painel/imagens/".$contrato."/".$row_model['imagem_1']; ?>" alt="">
												<div class="media-links">
													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="<?php echo "painel/imagens/".$contrato."/".$row_model['imagem_1']; ?>"></a>
												</div>
											</div>
										</div>
									</div>
									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 editorials">
										<div class="vertical-item gallery-item content-absolute text-center cs">
											<div class="item-media">
												<img src="<?php echo "painel/imagens/".$contrato."/".$row_model['imagem_2']; ?>" alt="">
												<div class="media-links">
													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="<?php echo "painel/imagens/".$contrato."/".$row_model['imagem_2']; ?>"></a>
												</div>
											</div>
										</div>
									</div>
									<div class="isotope-item bottommargin_10 col-md-3 col-sm-4 col-xs-6 snaps">
										<div class="vertical-item gallery-item content-absolute text-center cs">
											<div class="item-media">
												<img src="<?php echo "painel/imagens/".$contrato."/".$row_model['imagem_3']; ?>" alt="">
												<div class="media-links">
													<a class="prettyPhoto abs-link" title="" data-gal="prettyPhoto[gal]" href="<?php echo "painel/imagens/".$contrato."/".$row_model['imagem_3']; ?>"></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- eof .isotope_container.row -->
							</div>

							

						</div>

					</div>
				</div>
			</section>

			<section class="ds ms section_padding_30 page_social">
				<?php
					include_once("include/footer2.php");

				?>
			</section>
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>