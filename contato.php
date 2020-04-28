<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164580412-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164580412-1');
</script>

	<title>Agency Exclusive - Contato</title>
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

			<section class="page_breadcrumbs changeable ls gradient gorizontal_padding section_padding_20 columns_padding_5 table_section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3 text-center text-sm-left darklinks">
							<a href="#">
								<em>contato@agencyexclusive.com.br</em>
							</a>
						</div>
						<div class="col-sm-6 text-center">
							<ol class="breadcrumb">
								<li>
									<a href="./">
										Home
									</a>
								</li>
								<li>
									<a href="#">Contato</a>
								</li>
							</ol>
						</div>
						<div class="col-sm-3 text-center text-sm-right">
							<ul class="inline-dropdown inline-block">

								<li class="dropdown login-dropdown">
									<a class="topline-button" id="login" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
										<i class="rt-icon2-user"></i>
									</a>
									<div class="dropdown-menu ds" aria-labelledby="login">
										<form role="form" action="/">
											<div class="form-group">
												<label for="login_email" class="sr-only">Email address</label>
												<input type="email" class="form-control" id="login_email" placeholder="Email address">
											</div>
											<div class="form-group">
												<label for="login_password" class="sr-only">Password</label>
												<input type="password" class="form-control" id="login_password" placeholder="Password">
											</div>
											<button type="button" class="theme_button color1 bottommargin_0">
												Log in
											</button>
											<div class="checkbox-inline">
												<input type="checkbox" id="remember">
												<label for="remember" class="bottommargin_0"> Remember Me</label>
											</div>
										</form>
										<div class="topmargin_25">
											<a href="register.html" class="text-uppercase">Forgot Your Password?</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="ls contacts section_padding_50 ms">
				<div class="container">
					<div class="row topmargin_10 bottommargin_20">
						<div class="col-sm-4">
							<div class="teaser text-center">
								<h4 class="bottommargin_20">Recepção</h4>
								
								<br>
								<span class="highlight">recepcao@agencyexclusive.com.br</span>
								<br> 
							</div>
						</div>
						<div class="col-sm-4 with_border">
							<div class="teaser text-center">
								<h4 class="bottommargin_20">Booker</h4>
								
								<br>
								<span class="highlight">booker@agencyexclusive.com.br</span>
								<br> 
							</div>
						</div>
						<div class="col-sm-4">
							<div class="teaser text-center">
								<h4 class="bottommargin_20">Financeiro</h4>
								
								<br>
								<span class="highlight">financeiro@agencyexclusive.com.br</span>
								<br> 
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls ms section_padding_70">
				<div class="container">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6 text-center">
							<h2 class="big margin_0">Entre em Contato Conosco</h2>
							<h2 class="muellerhoff topmargin_5 bottommargin_50 highlight"></h2>

							<form class="contact-form" method="post" action="/">
								<div class="form-group">
									<label for="name" class="sr-only">Nome Completo
										<span class="required">*</span>
									</label>
									<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control text-center" placeholder="Nome Completo">
								</div>
								<div class="form-group">
									<label for="phone" class="sr-only">Telefone
										<span class="required">*</span>
									</label>
									<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control text-center" placeholder="Telefone">
								</div>
								<div class="form-group bottommargin_30">
									<label for="message" class="sr-only">Mensagem</label>
									<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control text-center" placeholder="Mensagem"></textarea>
								</div>
								<button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1">Enviar</button>
								<button type="reset" id="contact_form_clear" name="contact_clear" class="theme_button inverse bottommargin_0">Limpar</button>
							</form>
						</div>
					</div>
				</div>
			</section>

			<section class="ds ms section_padding_30 page_social">
				<div class="container">
					<div class="row topmargin_20 bottommargin_10">
						<div class="col-sm-12 text-center">
							<div class="page_social_icons">
								<a class="social-icon color-bg-icon soc-facebook" href="#" title="Facebook"></a>
								<a class="social-icon color-bg-icon soc-twitter" href="#" title="Twitter"></a>
								<a class="social-icon color-bg-icon soc-google" href="#" title="Google"></a>
								<a class="social-icon color-bg-icon soc-linkedin" href="#" title="LinkedIn"></a>
								<a class="social-icon color-bg-icon soc-pinterest" href="#" title="Pinterest"></a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls page_copyright section_padding_20">
				<div class="container">
					<div class="row topmargin_5 bottommargin_5">
						<div class="col-sm-12 text-center">
							<p class="darklinks">&copy; Agency 2016 | Created with
								<i class="rt-icon2-heart highlight"></i> by
								<a href="http://modernwebtemplates.com">MWTemplates</a>
							</p>
						</div>
					</div>
				</div>
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwYSMRGuTsmfl2z_zZDStYqMlKtrybxo"></script>
</body>

</html>