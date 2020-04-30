
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
					<!-- COMEÇA AQUI -->
					<script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">  
        window.jssor_1_slider_init = function() {  

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <style>
        /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        /*jssor slider bullet skin 132 css*/
        .jssorb132 {position:absolute;}
        .jssorb132 .i {position:absolute;cursor:pointer;}
        .jssorb132 .i .b {fill:#fff;fill-opacity:0.8;stroke:#000;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.7;}
        .jssorb132 .i:hover .b {fill:#000;fill-opacity:.7;stroke:#fff;stroke-width:2000;stroke-opacity:0.8;}
        .jssorb132 .iav .b {fill:#000;stroke:#fff;stroke-width:2400;fill-opacity:0.8;stroke-opacity:1;}
        .jssorb132 .i.idn {opacity:0.3;}

        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
        <defs>
            <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                <feGaussianBlur stddeviation="4"></feGaussianBlur>
            </filter>
            <radialGradient id="jssor_1_grd_2">
                <stop offset="0" stop-color="#fff"></stop>
                <stop offset="1" stop-color="#000"></stop>
            </radialGradient>
            <mask id="jssor_1_msk_3">
                <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
            </mask>
        </defs>
    </svg>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
            <div style="background-color:#d3890e;">
                <img data-u="image" style="opacity:0.8;" data-src="img/pb-beer-1513436-1600.jpg" />
                <div data-ts="flat" data-p="275" data-po="40% 50%" style="left:150px;top:40px;width:800px;height:300px;position:absolute;">
                    <div data-to="50% 50%" data-t="0" style="left:50px;top:520px;width:400px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AGENCY</div>
                    <div data-to="50% 50%" data-t="1" style="left:50px;top:540px;width:400px;height:100px;position:absolute;opacity:0.5;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AGENCY</div>
                    <div data-to="50% 50%" data-t="2" style="left:50px;top:560px;width:400px;height:100px;position:absolute;opacity:0.25;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AGENCY</div>
                    <div data-to="50% 50%" data-t="3" style="left:50px;top:580px;width:400px;height:100px;position:absolute;opacity:0.125;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AGENCY</div>
                    <div data-to="50% 50%" data-t="4" style="left:50px;top:600px;width:400px;height:100px;position:absolute;opacity:0.06;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">AGENCY</div>
                    <div data-to="50% 50%" data-t="5" style="left:50px;top:710px;width:700px;height:100px;position:absolute;color:#f0a329;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;letter-spacing:0.5em;">EXCLUSIVE</div>
                </div>
            </div>
            <div>
                <img data-u="image" data-src="img/px-apartment-chairs-contemporary-2015560-1600.jpg" />
                <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
                        <!--<svg viewbox="0 0 800 60" data-to="50% 50%" width="800" height="60" data-t="7" style="left:0px;top:-70px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:700;letter-spacing:0.05em;overflow:visible;">
                            <text fill="#454447" stroke="#ff9500" stroke-width="2" text-anchor="middle" x="400" y="60">ESTUDIOS EXTERNOS
                            </text>
                        </svg>-->
                        <div data-to="50% 50%" data-t="8" style="filter:url('#jssor_1_flt_1');left:200px;top:0px;width:600px;height:60px;position:absolute;opacity:0;color:#C49D8F;font-family:Roboto Condensed, sans-serif;font-size:48px;line-height:1.2;letter-spacing:0.1em;text-align:center;">ESTILISTAS E MAQUIADORES</div>
                        <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:250px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:100px;font-weight:900;letter-spacing:0.2em;overflow:visible;">
                            <text fill="rgba(255,255,255,0.7)" stroke="#ff9500" text-anchor="middle" x="400" y="100">ESTUDIOS EXTERNOS
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
            <div style="background-color:#000000;">
                <img data-u="image" style="opacity:0.8;" data-src="img/px-back-view-boats-couple-2612852-1600.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <svg viewbox="0 0 600 400" data-ts="preserve-3d" width="600" height="400" data-tchd="jssor_1_msk_3" style="left:255px;top:0px;display:block;position:absolute;overflow:visible;">
                        <g mask="url(#jssor_1_msk_3)">
                            <path data-to="300px -180px" fill="none" stroke="rgba(250,251,252,0.5)" stroke-width="20" d="M410-350L410-10L190-10L190-350Z" x="190" y="-350" data-t="10" style="position:absolute;overflow:visible;"></path>
                        </g>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="11" style="left:-800px;top:78px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:84px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">NOVO CONCEITO
                        </text>
                    </svg>
                    <svg viewbox="0 0 800 72" data-to="50% 50%" width="800" height="72" data-t="12" style="left:1600px;top:153px;display:block;position:absolute;font-family:'Roboto Condensed',sans-serif;font-size:60px;font-weight:900;overflow:visible;">
                        <text fill="#fafbfc" text-anchor="middle" x="400" y="72">EM MARKETING PESSOAL
                        </text>
                    </svg>
                </div>
            </div>
            <!--
            <div>
                <img data-u="image" data-src="img/yamamoto.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
                        <div style="left:94px;top:35px;width:480px;height:90px;position:absolute;color:rgba(74,217,205,0.5);font-family:'Roboto Condensed',sans-serif;font-size:72px;line-height:1.2;">CREATION</div>
                        <div style="left:307px;top:115px;width:400px;height:50px;position:absolute;color:rgba(74,217,205,0.5);font-family:'Roboto Condensed',sans-serif;font-size:42px;line-height:1.1;text-align:center;background-color:rgba(72,77,76,0.5);">for creative peoples</div>
                    </div>
                </div>
            </div>
			-->
            <div>
                <img data-u="image" data-src="img/wine-1600.jpg" />
                <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="14" style="left:690px;top:140px;width:600px;height:150px;position:absolute;opacity:0;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">Estudios Internos <br />Estruturados<br /></div>

                    <div data-to="50% 50%" data-t="15" style="left:780px;top:350px;width:344px;height:157px;position:absolute;opacity:0;max-width:344px;color:#ffffff;font-family:Georgia,'Times New Roman',Times,serif;font-size:60px;line-height:1.2;letter-spacing:0.1em;">Profissionais<br /> Qualificados</div>
                    <!--<img data-to="50% 50%" data-t="16" style="left:1330px;top:8px;width:172px;height:131px;position:absolute;opacity:0;max-width:172px;" data-src="img/wine-badge.png" /> -->
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:12px;height:12px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>

					<!-- FINALIZA AQUI -->
													
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
								<span class="highlight">@AgencyExclusiveOficial-ss</span>
							</h2>
							<div class="row">
						<!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/b98a1030212251fd985ccf5bbcf2060b.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
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