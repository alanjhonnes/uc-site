<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<title>Ucasting</title>
		<meta name="description" content="marketplace para casting">
		<meta name="Marcelo Aragão" content="">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="template/images/favicon.ico" />

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css' />

		<!-- Bootstrap core CSS -->
		<link href="template/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Font Awesome CSS -->
		<link href="template/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" />

		<!-- Fontello CSS -->
		<link href="template/fonts/fontello/css/fontello.css" rel="stylesheet" />

		<!-- Plugins -->
		<link href="template/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" />
		<link href="template/plugins/rs-plugin/css/settings.css" rel="stylesheet" />
		<link href="template/css/animations.css" rel="stylesheet" />
		<link href="template/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />
		<link href="template/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" />
		<link href="template/plugins/hover/hover-min.css" rel="stylesheet" />

		<!-- the project core CSS file -->
		<link href="template/css/style.css" rel="stylesheet">

		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="template/css/skins/light_blue.css" rel="stylesheet" />

		<!-- Custom css --> 
		<link href="template/css/custom.css" rel="stylesheet" />
		<link href="template/css/ionicons.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="template/plugins/jquery.min.js"></script>
		<script type="text/javascript" src="template/js/typed.js"></script>
	   <script>
	    $(function(){

	        $("#typed").typed({
	            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
	            stringsElement: $('#typed-strings'),
	            typeSpeed: 30,
	            backDelay: 500,
	            loop: false,
	            contentType: 'html', // or text
	            // defaults to false for infinite loop
	            loopCount: false,
	            callback: function(){ foo(); },
	            resetCallback: function() { newTyped(); }
	        });

	        $(".reset").click(function(){
	            $("#typed").typed('reset');
	        });

	    });

	    function newTyped(){ /* A new typed object */ }

	    function foo(){ console.log("Callback"); }

	    </script>

	  <link href="template/css/main_type.css" rel="stylesheet" />
	    <style>
	        /* code for animated blinking cursor */
	        .typed-cursor{
	            opacity: 1;
	            font-weight: 100;
	            -webkit-animation: blink 0.7s infinite;
	            -moz-animation: blink 0.7s infinite;
	            -ms-animation: blink 0.7s infinite;
	            -o-animation: blink 0.7s infinite;
	            animation: blink 0.7s infinite;
	        }
	        @-keyframes blink{
	            0% { opacity:1; }
	            50% { opacity:0; }
	            100% { opacity:1; }
	        }
	        @-webkit-keyframes blink{
	            0% { opacity:1; }
	            50% { opacity:0; }
	            100% { opacity:1; }
	        }
	        @-moz-keyframes blink{
	            0% { opacity:1; }
	            50% { opacity:0; }
	            100% { opacity:1; }
	        }
	        @-ms-keyframes blink{
	            0% { opacity:1; }
	            50% { opacity:0; }
	            100% { opacity:1; }
	        }
	        @-o-keyframes blink{
	            0% { opacity:1; }
	            50% { opacity:0; }
	            100% { opacity:1; }
	        }
	    </style>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans ">

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
		
		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">

				<!-- header-top start -->
				<!-- classes:  -->
				<!-- "dark": dark version of header top e.g. class="header-top dark" -->
				<!-- "colored": colored version of header top e.g. class="header-top colored" -->
				<!-- ================ -->
				<div class="header-top dark colored">
					<div class="container">
						<div class="row">
							<!--<div class="col-xs-3 col-sm-6 col-md-9">
								< header-top-first start -->
								<!-- ================ -->
								<!--<div class="header-top-first clearfix">
									<!--<ul class="social-links circle small clearfix hidden-xs">
										<li class="instagram"><a target="_blank" href="http://https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
										<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
										<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
									</ul>-->
									<!--<div class="social-links hidden-lg hidden-md hidden-sm circle small">
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-alt"></i></button>
											<ul class="dropdown-menu dropdown-animation">
												<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
												<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
												<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
												<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
												<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube-play"></i></a></li>
												<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
												<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
												<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
											</ul>
										</div>
									</div>-->
									<!--<ul class="list-inline hidden-sm hidden-xs">
										<li><i class="fa fa-map-marker pr-5 pl-10"></i>Rua Fradique Coutinho,332</li>
										<li><i class="fa fa-phone pr-5 pl-10"></i>+12 123 123 123</li>
										<li><i class="fa fa-envelope-o pr-5 pl-10"></i>marcelo@ucastingapp.com</li>
									</ul>
								</div>
								<!-- header-top-first end -->
							<!--</div>-->
							<div class="col-md-8 col-md-offset-4">

								<!-- header-top-second start -->
								<!-- ================ -->
								<div id="header-top-second"  class="clearfix">

									<!-- header top dropdowns start -->
									<!-- ================ -->
									<div class="header-top-dropdown text-right">
										<div class="btn-group">
											<a href="signup/index_registar.php" class="btn btn-default btn-sm"><i class="fa fa-user pr-10"></i> Cadastrar</a>
										</div>
										<div class="btn-group dropdown">
											<button type="button" class="btn dropdown-toggle btn-default btn-sm" data-toggle="dropdown"><i class="fa fa-lock pr-10"></i> Entrar</button>
											<ul class="dropdown-menu dropdown-menu-right dropdown-animation">
												<li>
													<form action="login/userLogin.php" method="post" class="login-form margin-clear">
														<div class="form-group has-feedback">
															<label class="control-label">Login</label>
															<input type="text" class="form-control" name="userEmail" placeholder="">
															<i class="fa fa-user form-control-feedback"></i>
														</div>
														<div class="form-group has-feedback">
															<label class="control-label">Senha</label>
															<input type="password" class="form-control" name="password" placeholder="">
															<i class="fa fa-lock form-control-feedback"></i>
														</div>
														<div class="col-md-8 col-md-offset-3">
															<button type="submit" class="btn btn-gray btn-md" name="login-button">Entrar</button>
														</div>

														<!--<span class="pl-5 pr-5">ou</span>
														<button type="submit" class="btn btn-default btn-sm">Cadastrar</button>
														<!--<ul>	
															<li><a href="#">Esqueceu a senha?</a></li>
														</ul>
														<span class="text-center">Logar com</span>
														<ul class="social-links circle small colored clearfix">
															<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
															<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
															<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
														</ul>-->
													</form>
												</li>
											</ul>
										</div>
									</div>
									<!--  header top dropdowns end -->
								</div>
								<!-- header-top-second end -->
							</div>
						</div>
					</div>
				</div>
				<!-- header-top end -->

				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed  dark clearfix">
					
					<div class="container">
						<div class="row">
							<div class="col-md-2">
								<!-- header-left start -->
								<!-- ================ -->
								<div class="header-left clearfix">

									<!-- logo -->
									<div id="logo" class="logo">
									<p><p>
										<a href="index.php"><img id="logo_img" src="template/images/Logo-Ucasting.png" alt="Ucasting"></a>
									</div>

									<!-- name-and-slogan -->
									<!--<div class="site-slogan">
										"Marketplace para eventos"
									</div>-->
									
								</div>
								<!-- header-left end -->

							</div>
							<div class="col-md-10">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
									<div class="main-navigation  animated with-dropdown-buttons">
									<!-- navbar start -->
									<!-- ================ -->
										<nav class="navbar navbar-default" role="navigation">
											<div class="container-fluid">
												<!-- Toggle get grouped for better mobile display -->
												<div class="navbar-header">
													<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
														<span class="sr-only">Toggle navigation</span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
														<span class="icon-bar"></span>
													</button>
												</div>
												<!-- Collect the nav links, forms, and other content for toggling -->
												<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
													<!-- main-menu -->
													<ul class="nav navbar-nav navbar-right">
														<!-- mega-menu start -->
														<li><a href="#about">Quem Somos</p></a></li>
														<li><a href="#Funciona">Como Funciona</a></li>
														<li><a href="#Porque">Porque Usar</a></li>
														<li><a href="#FAQ">Dúvidas</a></li>
														<li><a href="#footer">Contate-nos</a></li>
														<li><a href="#">Criar Jobs</a></li>
													<!-- main-menu end -->
												</div>
											</div>
										</nav>
										<!-- navbar end -->
									</div>
									<!-- main-navigation end -->	
								</div>
								<!-- header-right end -->
							</div>
						</div>
					</div>
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->
		

			<section id="teste"  class="main-container">

				<h1 class="h2" style="text-align:center;"><strong><font color="#00ccde">Conectando o perfil ideal a sua empresa</strong></font></h1>
				<div id="typed-strings" class="large text-center" style="text-align:center;">
					<p class="large text-center" style="text-align:center;">Um novo conceito de agência.</p>
					<p>Uma plataforma digital</p>
					<p>Mais Tecnologia</p>
					<p>Mais eficiência</p>
					<p>Tudo em um só lugar!</p>
					<p> #UCASTING</p>
				</div>
				<span id="typed" style="white-space:pre;"></span>
				<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<img src="template/images/Mosaico.png" alt="Ucasting" title="#U">
					</div>
				</div>
			</section>

	
			<!-- section start -->
			<!-- ================ -->
			<section id="about"  class="main-container light-gray-bg clearfix">
				<div class="container">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="text-center title">Quem <strong><font color="#00ccde">Somos</strong></font></h2>
						<div class="separator"></div>
							<p class="large text-center" style="text-align:center;">Somos uma plataforma que conecta empresas e profissionais que buscam o sucesso e a excelência profissional no mercado de casting para os mais variados tipos de eventos.</p>
							<p class="large text-center" style="text-align:center;">A UCasting é a maneira mais segura, simples e inteligente de encontrar oportunidades no mercado de casting.</p>
							<!--Simplificamos o dia-a-dia de quem busca talentos, através de uma plataforma que auxilia a gestão de modelos com perfis diversificados para a necessidade de cada projeto. Queremos que todos sejam recompensados de acordo com sua competência e moral-->
					</div>
				</div>
			</section>	

			<section id="tabs"  class="main-container">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<!-- page-title start -->
							<!-- ================ -->
							<h2 class="text-center title">O que esta <strong><font color="#00ccde">buscando?</strong></font></h2>
								<div class="separator"></div>
						</div>
				<!-- main start -->
				<!-- ================ -->
						<div class="main col-md-12">

							<ul class="nav nav-tabs style-4" role="tablist">
								<li class="active"><a href="#htab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-10"></i>Quero contratar</a></li>
								<li><a href="#htab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>Quero ser contratado</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active" id="htab1">

									<section id="Funciona"  class="main-container">
										<div class="col-md-8 col-md-offset-2">
											<h2 class="text-center title">Como <strong><font color="#00ccde">Funciona</strong></font></h2>
											<div class="separator"></div>
										</div>
										<div class="container">
											<div class="row">
												<div class="col-sm-12">
													<div align="center" class="col-sm-3">
														<img src="template/images/img-1-computer.png" alt="Cadastro" title="#U">
														<br>
														<h2 class="text-center title">Faça seu <strong>Cadastro</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5">Crie seu perfil e esteja apto a postar Jobs e procurar candidatos. É rápido, simples e </font><strong><font size="3.5" color="#e74c3c"> grátis. </strong></font></p>
													</div>
													
													<div align="center" class="col-sm-3">
														<img src="template/images/img-criar_2.png" alt="Crie seus jobs" title="#U">
														<br>
														<h2 class="text-center title">Crie<strong>&nbsp; Jobs</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5">Cadastre os Jobs de acordo com perfil e particularidades necessárias.</font></p>
													</div>
													<div align="center" class="col-sm-3">
														<img src="template/images/img-2-fotos.png" alt="Selecione" title="#U">
														<br>
														<h2 class="text-center title"> <strong>Selecione</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5"> Receba apenas os candidatos com as características desejadas e escolha o perfil mais aderente</font></p>
													</div>	

													<div align="center" class="col-sm-3">
														<img src="template/images/img-4-receber.png" alt="Pagamento" title="#U">
														<br>
														<h2 class="text-center title"><strong>Pagamento</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5">Pague após a execução do serviço.</font></p>
													</div>
												</div>
											</div>
										</div>
									</section>


									<section id="Porque"  class="light-gray-bg pv-30 padding-bottom-clear clearfix">
										<div class="col-md-8 col-md-offset-2">
											<h2 class="text-center title">Porque <strong><font color="#00ccde">usar</strong></font></h2>
											<div class="separator"></div>
										</div>
										<div class="col-md-6">
											<div class="feature-box-2 white-bg object-non-visible right boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
												<span class="icon light-bg small circle"><i class="fa fa-check fa-2x"></i></span>
												<div class="body">
													<h4 class="title">Praticidade</h4>
												<ul>
										  			<li><p class="text-justify"> Procure o perfil mais aderente através dos nossos filtros e base de usuários com poucos cliques</li></p>
													<li><p class="text-justify"> Diminua o tempo de casting e contratação</li></p>
												</ul>
												</div>
											</div>
											<div class="feature-box-2 white-bg object-non-visible right boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
												<span class="icon light-bg"><i class="fa fa-circle-thin fa-2x"></i></span>
												<div class="body">
													<h4 class="title">Transparência</h4>
													<ul>
											  			<li><p class="text-justify">Tenha o currículo atualizado de cada usuário</li></p>
														<li><p class="text-justify"> Contrate usuários com base em avaliações e depoimentos de outras empresas</li></p>
													</ul>
												</div>
											</div>
											<div class="feature-box-2 white-bg object-non-visible right boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
												<span class="icon light-bg"><i class="fa fa-shield fa-2x"></i></span>
												<div class="body">
													<h4 class="title">Segurança</h4>
													<ul>
											  			<li><p class="text-justify">CPNJ E CPF verificados</li></p>
														<li><p class="text-justify">Backup’s disponíveis em caso de No-shows </li></p>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="feature-box-2 white-bg object-non-visible boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
												<span class="icon light-bg"><i class="fa fa-scissors"></i></span>
												<div class="body">
													<h4 class="title">Redução de custo</h4>
													<ul>
											  			<li><p class="text-justify">Evite a bitributação</li></p>
											  			<li><p class="text-justify">Savings de 15 a 25%</li></p>
											  			<br><p>
													</ul>
												</div>
											</div>
											<div class="feature-box-2 white-bg object-non-visible boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
												<span class="icon light-bg"><i class="fa fa-rocket fa-2x"></i></span>
												<div class="body">
													<h4 class="title">Agilidade</h4>
													<ul>
											  			<li><p class="text-justify">No tempo de resposta do casting</li></p>
											  			<li><p class="text-justify">Nas contratações</li></p>
													</ul>									
												</div>
											</div>
											<div class="feature-box-2 white-bg object-non-visible boxed bordered p-20" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
												<span class="icon without-bg"><i class="icon-star-empty text-default"></i></span>
												<div class="body">
													<h4 class="title">Organização</h4>
														<li><p class="text-justify">Tenha o histórico das suas contratações</li></p>
														<li><p class="text-justify">Favorite seus usúarios</li></p>
												</div>
											</div>
											<br>
										</div>
									</section>

									<section id="FAQ" class="clearfix">
										<div class="container">
											 <div class="col-md-8 col-md-offset-2">
												<h2 class="text-center">Dúvidas <strong><font color="#00ccde">Frequentes</strong></font></h2>
											<div class="separator"></div>
											</div>
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<!-- accordion start -->
														<!-- ================ -->
														<div class="panel-group collapse-style-99" id="accordion">
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapse12" class="collapsed">
																			A UCasting é uma agencia?
																		</a>
																	</h4>
																</div>
																<div id="collapse12" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Não, somos uma empresa de tecnologia que facilita a contratação de profissionais para Casting. A UCasting é a maneira mais segura, simples e inteligente de encontrar oportunidades no mercado de casting.</font> 
																	</div>
																</div>
															</div>
														
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
																			Quais são os requisitos para utilizar a plataforma?
																		</a>
																	</h4>
																</div>
																<div id="collapseTwo" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black"> Você precisa possuir um CPNJ ativo. O mesmo será verificado em nosso sistema. É uma forma de segurança para com os nossos usuários.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
																			Qual o custo para utilizar a plataforma?
																		</a>
																	</h4>
																</div>
																<div id="collapseFour" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Não existe nenhum custo. Você pode desfrutar de todos os benefícios que a plataforma oferece.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="collapsed">
																			Qual o prazo de pagamento?
																		</a>
																	</h4>
																</div>
																<div id="collapsefive" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">O prazo de pagamento é limitado em até 60 dias. Porém, quanto mais rápido, maior a chance de encontrar um perfil aderente a um custo acessível.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="collapsed">
																			O que acontece em caso de não comparacimento dos usuários?
																		</a>
																	</h4>
																</div>
																<div id="collapsesix" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black"> Sabemos que é um problema recorrente e desenvolvemos uma solução para mitigarmos.
																		Os usuários poderão ficar de sobreaviso nos jobs e além disso, será necessário a confirmação com até 24 horas de antecedência. Caso contrário, o mesmo será substituída automaticamente.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseseven" class="collapsed">
																			Como é feito o fluxo financeiro?
																		</a>
																	</h4>
																</div>
																<div id="collapseseven" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black"> Para uma melhor eficiência, emitimos as notas fiscais para os usuários e os mesmos, para a empresa. 
																		O valor é depositado em uma conta transitória e fará a separação automaticamente.
																		Qualquer fluxo diferente será analisado caso a caso.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseeight" class="collapsed">
																			O que acontece em caso de cancelamento do Job?
																		</a>
																	</h4>
																</div>
																<div id="collapseeight" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Cancelamentos sempre causam frustrações, e precisamos de tempo para minimizar esse impacto quando acontecem imprevistos. Cancelamentos em cima da hora geram multas, conforme descrito nos termos de uso.Pense bem antes de aceitar um job para evitar contratempos e se programa para evitar imprevistos.</font>
																	</div>
																</div>
															</div>
															
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseten" class="collapsed">
																			O que acontece se eu fechar o Job por fora?
																		</a>
																	</h4>
																</div>
																<div id="collapseten" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Essa prática é proibida pois é nociva para toda a comunidade que utiliza a UCasting.
																		Desta forma, o cliente será banido da plataforma, connforme o termo de uso.	</font>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>		
										</div>


								<div class="tab-pane fade" id="htab2">
									<section id="Funciona"  class="main-container">
										<div class="col-md-8 col-md-offset-2">
											<h2 class="text-center title">Como <strong><font color="#00ccde">Funciona</strong></font></h2>
											<div class="separator"></div>
										</div>
										<div class="container">
											<div class="row">
												<div class="col-sm-12">
													<div align="center" class="col-sm-3">
														<img src="template/images/img-1-computer.png" alt="Cadastro" title="#U">
														<br>
														<h2 class="text-center title">Faça seu <strong>Cadastro</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5"> Seja vista pelas melhores agências e empresas do Brasil. É rápido, simples e </font><strong><font size="3.5" color="#e74c3c"> grátis. </strong></font></p>
													</div>
													<div align="center" class="col-sm-3">
														<img src="template/images/img-2-fotos.png" alt="Portfolio" title="#U">
														<br>
														<h2 class="text-center title">Crie seu <strong>Currículo</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5">Adicione suas experiências, suas melhores fotos e vídeos. Mostre que você é especial!</font></p>
													</div>	
													<div align="center" class="col-sm-3">
														<img src="template/images/img-3-canditar.png" alt="Candidate-se" title="#U">
														<br>
														<h2 class="text-center title"><strong>&nbsp;Candidate-se</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5">Participe dos processos seletivos do seu interesse e de qualquer região.</font></p>
													</div>
													<div align="center" class="col-sm-3">
														<img src="template/images/img-4-receber.png" alt="Receba" title="#U">
														<br>
														<h2 class="text-center title"><strong>Ganhe seu Dinheiro</strong></h2>
														<p class="large text-center" style="text-align:center;"><font size="3.5">Pronto, agora é so fazer seu trabalho e receber!</font></p>
													</div>
												</div>
											</div>
										</div>
									</section>

									<section id="features" class="light-gray-bg clearfix ptb ptb-sm-80">
							            <div class="container text-center">
							                <div class="col-md-8 col-md-offset-2">
							                	<h2 class="text-center">Porque <strong><font color="#00ccde">Usar</strong></font></h2>
												<div class="separator"></div>
											</div>
							                <div class="row">
							                    <div class="wow fadeInLeft col-md-4 col-sm-6 pt-80 pt-sm-0">
							                         <div class="features-box-right">
															<div class="features-icon-right"><i class="ion ion-information-circled"></i></div>
							                            <h5>INFORMAÇÃO</p></h5>
							                            <p> Todos os dados da vaga para ajudar a escolher seus trabalhos.</p>
							                        </div>
							                        <div class="features-box-right">
							                            <div class="features-icon-right"><i class="ion ion-speakerphone"></i></div>
							                            <h5>NOTIFICAÇÕES</h5>
							                            <p>Novos trabalhos disponíveis com o seu perfil e lembretes dos seus compromissos.</p>
							                        </div>
							                        <div class="features-box-right">
							                            <div class="features-icon-right"><i class="ion ion-map"></i></div>
							                            <h5>FLEXIBILIDADE</h5>
							                            <p>Sua região tem carência de vagas? Procure em outras regiões.</p>
							                        </div>
							                        <div class="features-box-right">
							                            <div class="features-icon-right"><i class="ion ion-star"></i></div>
							                            <h5>TRANSPARÊNCIA</h5>
							                            <p>Deixe sua avaliação após a cada job, assim garantimos a qualidade da sua experiência.</p>
							                        </div>
		                   						</div>
		                    					<div class="col-md-4 text-center">
													<div class="owl-carousel content-slider" align="center">
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-1.png" height="200" align="center" alt="">
														</div>
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-2.png" height="200"align="center" alt="">
														</div>
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-3.png" height="200"align="center" alt="">
														</div>
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-4.png" height="200"align="center" alt="">
														</div>
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-5.png" height="200"align="center" alt="">
														</div>
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-6.png" height="200" align="center" alt="">
														</div>
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-7.png" height="200"align="center" alt="">
														</div>
														<div class="overlay-container overlay-visible">
															<img src="template/images/Celular-Ucasting-8.png" height="200"align="center" alt="">
														</div>
													</div>
												</div>
							                    <div class="wow fadeInRight col-md-4 col-sm-6 pt-80 pt-sm-0">
							                        <div class="features-box-left">
							                            <div class="features-icon-left"><i class="ion ion-calendar"></i></div>
							                            <h5>ORGANIZAÇÃO</h5>
							                            <p>Gerencie sua agenda de eventos mais facilmente e não se perca mais no meio de tantas tarefas.</p>
							                        </div>
							                        <div class="features-box-left">
							                            <div class="features-icon-left"><i class="ion ion-ios-body"></i></div>
							                            <h5>PRATICIDADE</h5>
							                            <p>Controle o seu dia-a-dia e seja o seu próprio agente!</p>
							                        </div>
							                        <div class="features-box-left">
							                            <div class="features-icon-left"><i class="ion ion-ios-albums"></i></div>
							                            <h5>HISTÓRICO</h5>
							                            <p>Acesso a todos os jobs que você aceitou e executou.</p>
							                        </div>
							                        <div class="features-box-left">
							                            <div class="features-icon-left"><i class="ion ion-ios-locked"></i></div>
							                            <h5>SEGURANÇA</h5>
							                            <p>Sistema de cadastro seguro, verificando cada usuário e evitando falsos usuários.</p>
							                        </div>
							                    </div>
						                	</div>
						            	</div>
					       			 </section>

									<section id="FAQ" class="clearfix">
										<div class="container">
											 <div class="col-md-8 col-md-offset-2">
												<h2 class="text-center">Dúvidas <strong><font color="#00ccde">Frequentes</strong></font></h2>
											<div class="separator"></div>
											</div>
												<div class="row">
													<div class="col-md-8 col-md-offset-2">
														<!-- accordion start -->
														<!-- ================ -->
														<div class="panel-group collapse-style-99" id="accordion">
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapse12" class="collapsed">
																			A UCasting é uma agencia?
																		</a>
																	</h4>
																</div>
																<div id="collapse12" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Não, somos uma empresa de tecnologia que facilita a contratação de profissionais para Casting. A UCasting é a maneira mais segura, simples e inteligente de encontrar oportunidades no mercado de casting.</font> 
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"class="collapsed">
																			Posso me inscrever na plataforma mesmo estando cadastrado em outras ou em agências?
																		</a>
																	</h4>
																</div>
																<div id="collapseOne" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Claro! A UCasting não exige nenhuma exclusividade, queremos que todos utilizem nossa plataforma. Ter experiência na área e ter fotos profissionais no portfólio farão seu perfil ainda mais atrativo para as empresas, mas novos profissionais que estão ingressando nesse mercado são super bem-vindos!</font> 
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
																			Quais são os requisitos para utilizar a plataforma?
																		</a>
																	</h4>
																</div>
																<div id="collapseTwo" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Você será contratado diretamente pela empresa anunciante, por isso é necessário possuir um CNPJ. Recomendamos uma MEI (Micro Empreendedor Individual) pelo custo (apenas R$ 50 por mês), menor burocracia (não precisa de contador, taxa única), facilidade para abrir e gerenciar (você consegue abrir em 15 min pela internet). Entre as características do MEI estão: número ilimitado de notas emitidas, benefícios do INSS e faturamento mensal de até R$ 5.000. Saiba como fazer a sua clicando aqui.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" class="collapsed">
																			Qual o custo para utilizar a plataforma?
																		</a>
																	</h4>
																</div>
																<div id="collapseFour" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Não existe nenhum custo para cadastrar e acessar as oportunidades. Entretanto, manter o time de atendimento aos clientes, suporte de tecnologia, marketing e busca de parceiros custa bastante dinheiro, por isso cobramos 20% job feito pela plataforma. Na casting sua única preocupação é escolher o job!</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapsefive" class="collapsed">
																			Qual o prazo de pagamento?
																		</a>
																	</h4>
																</div>
																<div id="collapsefive" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">O prazo de pagamento estará disponível nas características da vaga. Como cada empresa trabalha de uma forma diferente, esse prazo é variável. Estamos estudando uma forma para diminuir significativamente o prazo.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapsesix" class="collapsed">
																			Como faço para conseguir um Job?
																		</a>
																	</h4>
																</div>
																<div id="collapsesix" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Mantenha sempre seu perfil atualizado, inclusive suas fotos, e acesse sua conta regularmente. Quando aceitar um trabalho, execute com exelência para receber uma avaliação ótima. Assim, você aumenta suas chances.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseseven" class="collapsed">
																			Quem pode anunciar um Job?
																		</a>
																	</h4>
																</div>
																<div id="collapseseven" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Empresas com CNPJ verificado e pessoas com CPF verificado.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseeight" class="collapsed">
																			Quem pode ver meu perfil?
																		</a>
																	</h4>
																</div>
																<div id="collapseeight" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Seu perfil será visto apenas pelas empresas que anunciarem um Job na plataforma e que tiverem “Match” ou quando você se candidatar a uma vaga. Ao completar o cadastro, você poderá autorizar a divulgação em redes sociais.</font>
																	</div>
																</div>
															</div>
															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapsenine" class="collapsed">
																			O que acontece em caso de cancelamento do Job?
																		</a>
																	</h4>
																</div>
																<div id="collapsenine" class="panel-collapse collapse">
																	<div class="panel-body">
																		<font color="black">Cancelamentos sempre causam frustrações, e precisamos de tempo para minimizar esse impacto quando acontecem imprevistos. Cancelamentos em cima da hora geram multas, conforme descrito nos termos de uso.Pense bem antes de aceitar um job para evitar contratempos e se programa para evitar imprevistos.</font>
																	</div>
																</div>
															</div>

															<div class="panel panel-default">
																<div class="panel-heading">
																	<h4 class="panel-title">
																		<a data-toggle="collapse" data-parent="#accordion" href="#collapseten" class="collapsed">
																			O que acontece se eu fechar o Job por fora?
																		</a>
																	</h4>
																</div>
																<div id="collapseten" class="panel-collapse collapse">
																	<div class="panel-body">
																	<font color="black">Essa prática é proibida pois é nociva para toda a comunidade que utiliza a UCasting, pois os cliente que fazem isso podem ser banidos da plataforma, diminuindo a oferta de trabalhos e diminuindo a diversidade de talentos, uma vez que esses modelos, que serão banidos. Além disso, ao praticar essa ação você estará se arriscando por um cliente que não respeita regras e o risco será somente seu.</font>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>						
									
							<!-- section start -->
										<!-- ================ -->
										<section id="FAQ" class="clearfix">
											<div class="container">
												 <div class="col-md-8 col-md-offset-2">
													<h2 class="text-center"><strong><font color="#00ccde">Opniões</strong></font></h2>
												<div class="separator"></div>
												</div>
												<div class="row">
													<div class="col-md-12">
														
															<div class="owl-carousel content-slider">
																<div class="container">
																	<div class="row">
																		<div class="col-md-8 col-md-offset-2">
																			<div class="testimonial text-center">
																				<div class="testimonial-image">
																					<img src="template/images/Pridepo.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
																				</div>
																				<h3>#Incrível!</h3>
																				<div class="separator"></div>
																				<div class="testimonial-body">
																					<blockquote>
																						<p>Com a Ucasting eu consigo me candidatar a Jobs dos mais diversos a qualquer hora em qualquer lugar. </p>
																					</blockquote>
																					<div class="testimonial-info-1">- Priscila Maldonado</div>
																					<div class="testimonial-info-2"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="container">
																	<div class="row">
																		<div class="col-md-8 col-md-offset-2">
																			<div class="testimonial text-center">
																				<div class="testimonial-image">
																					<img src="template/images/Guidepo.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
																				</div>
																				<h3>#Prático!</h3>
																				<div class="separator"></div>
																				<div class="testimonial-body">
																					<blockquote>
																						<p>O que mais me chamou a atenção é a facilidade de navegar pelo meu celular.</p>
																					</blockquote>
																					<div class="testimonial-info-1">- Guilherme Rodrigues</div>
																					<div class="testimonial-info-2"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="container">
																	<div class="row">
																		<div class="col-md-8 col-md-offset-2">
																			<div class="testimonial text-center">
																				<div class="testimonial-image">
																					<img src="template/images/Gedepo.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
																				</div>
																				<h3>#Amei!</h3>
																				<div class="separator"></div>
																				<div class="testimonial-body">
																					<blockquote>
																						<p>Não perco mais tempo em Casting correndo o risco de não ser aprovada. Pela Ucasting eles já fazem uma pré-aprovação, isso super me ajudou no meu dia a dia.</p>
																					</blockquote>
																					<div class="testimonial-info-1">- Gerlen Moura</div>
																					<div class="testimonial-info-2"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>


																<div class="container">
																	<div class="row">
																		<div class="col-md-8 col-md-offset-2">
																			<div class="testimonial text-center">
																				<div class="testimonial-image">
																					<img src="template/images/Nicaodepo.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
																				</div>
																				<h3>#O que faltava!</h3>
																				<div class="separator"></div>
																				<div class="testimonial-body">
																					<blockquote>
																						<p>Moro fora do brasil. Mas quando chego ainda posso pegar uns Jobs extra, rs.</p>
																					</blockquote>
																					<div class="testimonial-info-1">- Nicolas Padilha</div>
																					<div class="testimonial-info-2"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="container">
																	<div class="row">
																		<div class="col-md-8 col-md-offset-2">
																			<div class="testimonial text-center">
																				<div class="testimonial-image">
																					<img src="template/images/Sildepo.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
																				</div>
																				<h3>#Responsável!</h3>
																				<div class="separator"></div>
																				<div class="testimonial-body">
																					<blockquote>
																						<p>Através dele consigo gerenciar minha agenda de Jobs e ainda quanto ganho por mês. É demais.</p>
																					</blockquote>
																					<div class="testimonial-info-1">- Silmara Ribeiro</div>
																					<div class="testimonial-info-2"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="container">
																	<div class="row">
																		<div class="col-md-8 col-md-offset-2">
																			<div class="testimonial text-center">
																				<div class="testimonial-image">
																					<img src="template/images/Jodepo.jpg" alt="Jane Doe" title="Jane Doe" class="img-circle">
																				</div>
																				<h3>#Para todos!</h3>
																				<div class="separator"></div>
																				<div class="testimonial-body">
																					<blockquote>
																						<p>O sistema de currículo é ótimo. Não preciso mais usar o Facebook e outras redes socias.</p>
																					</blockquote>
																					<div class="testimonial-info-1">- Jonathan Santos</div>
																					<div class="testimonial-info-2"></div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														<br>
														<section>
															<div class="default-bg footer-top border-clear">
																<div class="container">
																	<div class="row">
																		<div class="col-md-12">
																			<div class="call-to-action text-center">
																				<div class="row">
																					<div class="col-sm-8">
																						<h2>Crie seu currículo agora</h2>
																					</div>
																					<div class="col-sm-4">
																						<p class="mt-10"><a href="#" class="btn btn-animated btn-lg btn-gray-transparent">Criar<i class="fa fa-user pl-20"></i></a></p>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</section>
													</div>
												</div>
											</div>
										</section>
										<!-- section end -->
									</section>
						</div>
				</div>
			</div>
		</section>		
		<section id="Clientes" class="clearfix">
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
				<h2 class="text-center">Jobs <strong><font color="#00ccde">executados</strong></font></h2>
					<div class="separator"></div>
				</div>
						<div class="row">		
							<div class="owl-carousel clients">
								<div class="client">
									<a href="#"><img src="images/client-1.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-2.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-3.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-4.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-5.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-6.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-7.png" alt=""></a>
								</div>
								<div class="client">
									<a href="#"><img src="images/client-8.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>


			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix dark">

				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer">
					<div class="container">
						<div class="footer-inner">
							<div class="row">
								<div class="col-md-4">
									<div class="footer-content">
										<div class="logo-footer"><img id="logo-footer" src="template/images/Logo-Ucasting.png" alt="Ucasting" width="115"></div>
										<p><font size="2">Somos uma plataforma que conecta empresas e profissionais que buscam o sucesso e a excelência profissional no mercado de casting para os mais variados tipos de eventos.A UCasting é a maneira mais segura, simples e inteligente de encontrar oportunidades no mercado de casting.</font></p>
										<ul class="list-inline mb-20">
											<li><i class="text-default fa fa-map-marker pr-5"></i><font size="1.5"> Rua Fradique Coutinho</font></li>
											<li><i class="text-default fa fa-phone pl-10 pr-5"></i><font size="1.5"> 11xxxxxxxxx</font></li>
											<li><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i><font size="1.5">contato@ucastingapp.com</font></a></li>
										</ul>
										<div class="separator-2"></div>
										<ul class="social-links circle margin-clear animated-effect-1">
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="youtube"><a target="_blank" href="https://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
											<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
											<li class="instagram"><a target="_blank" href="http://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>


								<div class="col-md-4">
									<div class="footer-content">
										<h2 class="title">Galeria de Fotos</h2>
										<div class="separator-2"></div>
										<div class="row grid-space-10">
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="images/gallery-1.jpg" alt="">
													<a href="portfolio-item.html" class="overlay-link small">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="images/gallery-2.jpg" alt="">
													<a href="portfolio-item.html" class="overlay-link small">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="images/gallery-3.jpg" alt="">
													<a href="portfolio-item.html" class="overlay-link small">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="images/gallery-4.jpg" alt="">
													<a href="portfolio-item.html" class="overlay-link small">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="images/gallery-5.jpg" alt="">
													<a href="portfolio-item.html" class="overlay-link small">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10">
													<img src="images/gallery-6.jpg" alt="">
													<a href="portfolio-item.html" class="overlay-link small">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
										</div>
										<div class="text-right space-top">
											<a href="portfolio-grid-2-3-col.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="footer-content">
										<h3 class="title">Contate-nos</h3>
										<div class="separator-2"></div>
										<div class="alert alert-success hidden" id="MessageSent2">
											Nós recebemos sua menssagem e entraremos em contato.
										</div>
										<div class="alert alert-danger hidden" id="MessageNotSent2">
											Oops! Algo de estranho aconteceu. Por favor, atualize sua página e tente novamente.
										</div>
										<form role="form" id="footer-form" class="margin-clear">
											<div class="form-group has-feedback mb-10">
												<label class="sr-only" for="name2">Nome</label>
												<input type="text" class="form-control" id="name2" placeholder="Nome" name="name2">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback mb-10">
												<label class="sr-only" for="email2">Email</label>
												<input type="email" class="form-control" id="email2" placeholder="Digite seu email" name="email2">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback mb-10">
												<label class="sr-only" for="message2">Menssagem</label>
												<textarea class="form-control" rows="4" id="message2" placeholder="Menssagem" name="message2"></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" value="Enviar" class="margin-clear submit-button btn btn-default">
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter">
					<div class="container">
						<div class="subfooter-inner">
							<div class="row">
								<div class="col-md-12">
									<p class="text-center"><font size="2">Copyright © 2016 #U CASTING. All Rights Reserved</font></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .subfooter end -->

			</footer>
			<!-- footer end -->
			
		</div>
		<!-- page-wrapper end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->
	
		<script type="text/javascript" src="template/bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="template/plugins/modernizr.js"></script>

		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="template/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="template/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="template/plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="template/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- Appear javascript -->
		<script type="text/javascript" src="template/plugins/waypoints/jquery.waypoints.min.js"></script>

		<!-- Count To javascript -->
		<script type="text/javascript" src="template/plugins/jquery.countTo.js"></script>
		
		<!-- Parallax javascript -->
		<script src="template/plugins/jquery.parallax-1.1.3.js"></script>

		<!-- Contact form -->
		<script src="template/plugins/jquery.validate.js"></script>

		<!-- Google Maps javascript -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;signed_in=true"></script>
		<script type="text/javascript" src="template/js/google.map.config.js"></script>

		<!-- Waypoints -->
		<script type="text/javascript" src="template/js/jquery.waypoints.min.js"></script>



		<!-- Background Video -->
		<script src="template/plugins/vide/jquery.vide.js"></script>

		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="template/plugins/owl-carousel/owl.carousel.js"></script>
		
		<!-- Pace javascript -->
		<script type="text/javascript" src="template/plugins/pace/pace.min.js"></script>

		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="template/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="template/plugins/SmoothScroll.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="template/js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="template/js/custom.js"></script>



	</body>
</html>
