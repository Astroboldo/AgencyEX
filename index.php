
<?php include_once("connection/conexao.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Agency Exclusive Oficial</title>
	
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
	<!-- <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Type search keyword here..." id="modal-search-input">
				</div>
				<button type="submit" class="theme_button input_button">Search</button>
			</form>
		</div>
	</div>
-->
	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
			<header class="page_header header_darkgrey columns_padding_0 table_section">
				<?php
					include_once("include/menu.php");
				?>
			</header>
			<section class="page_topline ls ms gorizontal_padding table_section">
				<?php
					include_once("include/topo.php");
				?>
			</section>
			<!-- PRIMEIRO CARROSSEL-->
			<section class="ls ms intro_section page_mainslider">
				<div class="owl-carousel page_maincarousel" data-margin="0" data-nav="true" data-loop="true" data-items="4">
					<?php
						$select_modelo_top = "SELECT * FROM cliente WHERE destaque_top = '1' ORDER BY RAND()";
						$exec_select_modelo_top = mysqli_query($conn, $select_modelo_top);
						while($row_modelo_top = mysqli_fetch_assoc($exec_select_modelo_top)){
							$ncontrato = $row_modelo_top['n_contrato'];
							$destaque_pic_top = $row_modelo_top['destaque_picture'];
					?>
					<div>
						<div class="vertical-item maincarousel-item content-absolute cs">
							<div class="item-media">
								<img src="painel/imagens/<?php echo $ncontrato; ?>/<?php echo $destaque_pic_top; ?>" style="width: 550px; height: 500px;" alt="">
								<div class="media-links">
									<a class="abs-link" title="" href="perfil_model.php?<?php echo "nct=".$ncontrato; ?>"></a>
								</div>
							</div>
							<div class="item-content text-center grey gradient_bg_goriz">
								<div class="bg_overlay"></div>
								<div class="model-parameters">
									<h2>
										<a href="perfil_model.php?<?php echo "nct=".$ncontrato; ?>"><?php echo $row_modelo_top['nome_completo']; ?></a>
									</h2>
									<div>
										<span class="bold">Altura</span>
										<br>
										<span><?php echo $row_modelo_top['altura']; ?></span>
									</div>
									<div>
										<span class="bold">Idade</span>
										<br>
										<span><?php echo $row_modelo_top['idade']; ?></span>
									</div>
									<div>
										<span class="bold">Cintura</span>
										<br>
										<span><?php echo $row_modelo_top['cintura']; ?></span>
									</div>
									<div>
										<span class="bold">Sapato</span>
										<br>
										<span><?php echo $row_modelo_top['sapatos']; ?></span>
									</div>
									<div>
										<span class="bold">Olhos</span>
										<br>
										<span><?php echo $row_modelo_top['olhos']; ?></span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
						};
					?>					
			</section>
		<!-- FIM DO PRIMEIRO CARROSSEL -->
		<!-- BANNER LARGO DE DIVULGAÇÃO -->
			<section class="ls page_testimonials">
				<div class="container">
					<!-- Banner 
					<div class="row topmargin_0">
						<div class="col-sm-12">
							<div class="flexslider banner-slider">
								<ul class="slides">
									<li class="gradient_bg_goriz">
										<div class="bg_overlay"></div>
										<img src="images/banner_slide_01.jpg" alt="">
										<div class="media-links">
											<a class="abs-link" href="#"></a>
										</div>
									</li>
									<li class="gradient_bg_goriz">
										<div class="bg_overlay"></div>
										<img src="images/banner_slide_02.jpg" alt="">
										<div class="media-links">
											<a class="abs-link" href="#"></a>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					 eof Banner -->
				</div>
			</section>
			<!-- FINAL BANNER LARGO -->
			<!-- SOBRE A AGENCIA, MARCAS PARCEIRAS E TRABALHOS -->
			<section class="ls intro_section">
				<div class="flexslider vertical-nav">
					<ul class="slides">
						<li>
							<img src="images/slide01.png" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Sobre a Agência</h2>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Descubra como começamos</h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<p class="entry-excerpt bottommargin_30">
														Com a melhor estrutura e ótimos profissionais, realizamos os melhores trabalhos de forma ágil e eficiente. Profissionalmente estamos cuidando de carreiras brilhantes que vemos o potêncial de cada um de nossos modelos.
														Seja Exclusive!
													</p>
													<p>
													
													</p>
													<p>
														
													</p>
													<a href="" class="theme_button color1 topmargin_20">Sobre Nós</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li>
							<img src="images/slide02.png" alt="">
							<div class="container">
								<div class="row">
									<div class="col-sm-12 text-center text-md-right">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer" data-animation="slideExpandUp">
													<h2 class="big margin_0">Nossos Serviços</h2>
													<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Trabalhamos em diversos segmentos!</h2>
												</div>
												<div class="intro-layer" data-animation="slideExpandUp">
													<div class="media bottommargin_30">
														<div class="media-left">
															<div class="service-media"></div>
														</div>
														<div class="media-body">
															<h4 class="topmargin_0 bottommargin_5">
																<a href="#">Desfiles de Moda</a>
															</h4>
															<p class="bottommargin_0"></p>
														</div>
													</div>

													<div class="media bottommargin_30">
														<div class="media-left">
															<div class="service-media"></div>
														</div>
														<div class="media-body">
															<h4 class="topmargin_0 bottommargin_5">
																<a href="#">Eventos Corporativos</a>
															</h4>
															<p class="bottommargin_0"></p>
														</div>
													</div>

													<div class="media bottommargin_30">
														<div class="media-left">
															<div class="service-media"></div>
														</div>
														<div class="media-body">
															<h4 class="topmargin_0 bottommargin_5">
																<a href="#">Comerciais de Televisão</a>
															</h4>
															<p class="bottommargin_0"></p>
														</div>
													</div>

													<div class="media bottommargin_30">
														<div class="media-left">
															<div class="service-media"></div>
														</div>
														<div class="media-body">
															<h4 class="topmargin_0 bottommargin_5">
																<a href="#">Publicidade para Marcas</a>
															</h4>
															<p class="bottommargin_0"></p>
														</div>
													</div>

													<div class="media bottommargin_30">
														<div class="media-left">
															<div class="service-media"></div>
														</div>
														<div class="media-body">
															<h4 class="topmargin_0 bottommargin_5">
																<a href="#">Exposições e Feiras</a>
															</h4>
															<p class="bottommargin_0"></p>
														</div>
													</div>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>
			<!-- FIM SOBRE A AGENCIA, MARCAS PARCEIRAS E TRABALHOS -->

			<!-- FORMULARIO DE CADASTRO -->
			<section class="ls parallax calltoaction section_padding_100" style="background-image: url('./images/parallax/call_to_action.jpg')">
				<div class="container">
					<div class="row topmargin_60 bottommargin_60">
						<div class="col-sm-12 text-center">
						<h2 class="extra-big topmargin_0 bottommargin_30">Confira Nosso Instagram
								<span class="highlight">@AgencyExclusiveOficial</span>
							</h2>
							<div class="row">
						<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
						<iframe src="//lightwidget.com/widgets/b98a1030212251fd985ccf5bbcf2060b.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;">
						</iframe>
							</div>
							<!-- INICIO DO FORMULARIO DE CADASTRO
							
							<div class="row">
								<div class="col-md-offset-2 col-md-8 text-center">
									<p class="fontsize_20">
										Faça já o seu cadastro e iremos encaminha-lo para nossa equipe de análise profissional de perfis!
									</p>
								</div>
							</div>
							<div class="widget widget_mailchimp topmargin_20">
								<form class="signup form-inline" action="/" method="get">
									<div class="form-group">
										<input name="email" type="email" class="mailchimp_email form-control" placeholder="Endereço de Email">
									</div>
									<button type="submit" class="theme_button input_button">Send</button>
									<div class="response"></div>
								</form>
							</div>
								-->

						</div>
					</div>
				</div>
			</section>
			<!-- FIM FORMULARIO DE CADASTRO -->


			<section class="ls ms section_padding_70 gorizontal_padding">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12">
							
							<div class="owl-carousel top-models-carousel" data-margin="0" data-nav="true" data-loop="true" data-items="3" data-autoplay="false" data-responsive-xs="1" data-responsive-sm="2" data-responsive-md="2" data-responsive-lg="3">
							<?php
								$select_modelo_footer = "SELECT * FROM cliente WHERE destaque_footer = '1'";
								$exec_select_modelo_footer = mysqli_query($conn, $select_modelo_footer);
								while($row_modelo_footer = mysqli_fetch_assoc($exec_select_modelo_footer)){

										$ncontrato = $row_modelo_footer['n_contrato'];
										$destaque_pic = $row_modelo_footer['destaque_picture'];
								
							?>
								<div>
									<div class="vertical-item maincarousel-item content-absolute">
										<div class="item-media">
											<img src="painel/imagens/<?php echo $ncontrato ?>/<?php echo $destaque_pic; ?>" alt="" style="width: 500px; height: 550px;">
											<div class="media-links">
											</div>
										</div>
										<div class="item-content grey gradient_bg_vert before_cover">
											<div class="bg_overlay"></div>
											<div class="model-parameters vertical-layout">
												<h2>
													<a href="model.html"><?php echo $row_modelo_footer['nome_completo'] ?></a>
												</h2>
												<div>
													<span class="bold">Altura:</span>
													<span><?php echo $row_modelo_footer['altura'] ?></span>
												</div>
												<div>
													<span class="bold">Idade:</span>
													<span><?php echo $row_modelo_footer['idade'] ?></span>
												</div>
												<div>
													<span class="bold">Cintura:</span>
													<span><?php echo $row_modelo_footer['cintura'] ?></span>
												</div>
												<div>
													<span class="bold">Sapato:</span>
													<span><?php echo $row_modelo_footer['sapatos'] ?></span>
												</div>
												<div>
													<span class="bold">Olhos:</span>
													<span><?php echo $row_modelo_footer['olhos'] ?></span>
												</div>
											</div>
											<div class="links-wrap topmargin_40">
												<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/modelos/<?php echo $ncontrato ?>/<?php echo $destaque_pic; ?>"></a>
												<a class="p-link" title="" href="<?php echo "perfil_model.php?nct=".$ncontrato; ?>"></a>
											</div>
										</div>
									</div>
								</div>
								<?php
									};
								?>
							</div>
						</div>
					</div>

					<div class="row topmargin_50">
						<div class="col-xs-12 text-center margin_0">
							<div class="grey">
								<div class="pages bold" id="top_models_pagination">1 / 12</div>
							</div>
						</div>
					</div>

				</div>

			</section>
			<!-- MAPA COM ENDEREÇOS -->
			<section class="ls map muted_section">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="teaser text-center">
								<div class="teaser_icon black size_normal">
									<i class="rt-icon2-location2 highlight"></i>
								</div>
							</div>
							<a href="#" class="theme_button">UNIDADE I - Rua Coronel Luís Americano, 250 - Tatuapé</a>
						</div>
				</div>
			</section>
			<!-- FIM MAPA COM ENDEREÇOS -->
	
			<section class="ls section_padding_70">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="big margin_0">Contato</h2>
							<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight">Entre em contato conosco</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<p class="bottommargin_20">
								<span class="grey fontsize_12 text-uppercase bold">Telefones:</span>
								<br> (11)2251-5878
								<br> (11)xxxx-xxxx
							</p>
							<p class="bottommargin_0">
								<span class="grey fontsize_12 text-uppercase bold">Email:</span>
								<br>
								<a href="mainto:agency@support.com">
									<em>contato@agencyexclusive.com.br</em>
								</a>
							</p>
						</div>
						<div class="col-md-8">
							<form class="contact-form row" method="post" action="/">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name" class="sr-only">Nome Completo
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control with-icon" placeholder="Nome Completo">
										<i class="rt-icon2-user"></i>
									</div>
									<div class="form-group">
										<label for="email" class="sr-only">Email
											<span class="required">*</span>
										</label>
										<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control with-icon" placeholder="Email">
										<i class="rt-icon2-mail"></i>
									</div>
									<div class="form-group">
										<label for="phone" class="sr-only">Número de Telefone
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control with-icon" placeholder="Telefone">
										<i class="rt-icon2-phone5"></i>
									</div>
									<div class="form-group bottommargin_0">
										<label for="theme" class="sr-only">Assunto
											<span class="required">*</span>
										</label>
										<input type="text" aria-required="true" size="30" value="" name="theme" id="theme" class="form-control with-icon" placeholder=" Assunto">
										<i class="rt-icon2-bulb"></i>
									</div>

								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="message" class="sr-only">Mensagem</label>
										<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control with-icon" placeholder="Mensagem"></textarea>
										<i class="rt-icon2-pen"></i>
									</div>

									<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 bottommargin_0">Enviar</button>
									<button type="reset" id="contact_form_clear" name="contact_clear" class="theme_button inverse bottommargin_0">Limpar</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms section_padding_30 page_social">
				<div class="container">
					<div class="row topmargin_20 bottommargin_10">
						<div class="col-sm-12 text-center">
							<div class="page_social_icons">
								<a class="social-icon color-bg-icon soc-facebook" href="#" title="Facebook"></a>
								<a class="social-icon color-bg-icon soc-youtube" href="#" title="Twitter"></a>
								<a class="social-icon color-bg-icon soc-instagram" href="#" title="Google"></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer class="ls page_footer section_padding_70">
				<?php
					include_once("include/footer.php");
				?>
			</footer>

			<?php
			include_once("include/copy.php");

			?>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>