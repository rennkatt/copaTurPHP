<?php
ob_start();
if ( !isset($_SESSION) ){
    session_start();
}
if(isset($_SESSION['email']) && (isset($_SESSION['senha']))){
	//header("Location: home.php");exit;
}
	include("../_controle/conecta.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>


		<!-- TITULO DO SITE -->
		<title>CopaTur</title>

		 <!-- Latest compiled and minified CSS -->

		<!-- icon -->
		<link rel="shortcut icon" type="image/icon" href="../_complementos/images/icone.png"/>
		
		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="../_complementos/css/font-awesome.min.css" />
		<link rel="stylesheet" href="../_complementos/lib/fontello/css/fontello.css" />
		
		<!--animate.css-->
		<link rel="stylesheet" href="../_complementos/css/animate.css" />
		
		<!--parceiros.css--->
		<link rel="stylesheet" href="../_complementos/css/parceiros.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="../_complementos/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="../_complementos/css/datepicker.css" >

		<!-- range css-->
        <link rel="stylesheet" href="../_complementos/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="../_complementos/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="../_complementos/css/bootsnav.css"/>

		<link rel="stylesheet" type="text/css" href="../_complementos/css/light-red.css">
		<!--style.css-->
		<link rel="stylesheet" href="../_complementos/css/ma-in.css" />
		<link rel="stylesheet" href="../_complementos/css/style.css" />

		
		<!--responsive.css-->
		<link rel="stylesheet" href="../_complementos/css/responsive.css" />
	
	<style>
	
</style>
		
        

    </head>
	
    <body id="body"  onload="load()">

		<!-- preloader -->
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        				<!-- main nav -->
        <nav class="navbar navbar-default navbar-fixed-top">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <div class="logo"><a class="navbar-brand page-scroll pad0" href="#"><img src="../_complementos/images/logo.png" alt=""></a></div><!-- /.logo-->
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                <ul class="nav navbar-nav navbar-right">
	                    <li class="hidden">
	                        <a href="#page-top"></a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="">Home</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#gallery" onclick="desser_mais()">Cidades</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#about" onclick="desser_mais()">Sobre Nós</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="#contact" onclick="desser_mais()">Contato</a>
	                    </li>

	                    <li>
	                        <a class="page-scroll" href="#parceiros" onclick="desser_mais()">Parceiros</a>
	                    </li>
						
	                     <?php if(isset($_SESSION['email']) && (isset($_SESSION['senha']))){ ?>
                        <li class="dropdown nav-item">
		                    <a href="#" class=" dropdown-toggle" data-toggle="dropdown" data-aria-haspopup="true" data-aria-expanded="false"><i class="fa fa-user"></i> <?php echo $_SESSION['nome']; ?> <b class="caret"></b></a>
		                    
		                    <ul class="dropdown-menu black">
		                        <li class="dropdown-item">
								<a href="../_visao/usuario_edita.php?id=<?php echo $_SESSION['id'] ?>" class="external"><i class="fa fa-fw fa-user"></i> Perfil </a>
		                        </li>
		                        
		                        <?php if ($_SESSION['nivel'] == 1) {
		                        	# code...
			                        echo "<li class='dropdown-item'>
			                            <a href='administrativo.php' class='external'><i class='fa fa-fw fa-users'></i> Painel Administrativo </a>
			                        </li>
			                        
			                        ";
		                         } ?>
		                        <li class="dropdown-item">
		                            <a href="../_controle/sair.php" class="external" onClick="return confirm('Deseja realmente sair do Sistema?')"><i class="fa fa-fw fa-power-off"></i> Sair </a>
		                        </li>
		                    </ul>
		                </li>
		                <?php } else { ?>
		                <li><a href="home.php?link=2" class="external">Entrar</a></li>
		                <?php } ?>

	                </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container-fluid -->
	    </nav>
				<!-- /main nav -->
				
            </div>
        <!--
        End Fixed Navigation
        ==================================== -->
		<div class="banner" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Rússia</span></h1>
                        <p>A Fifa World Cup – Russia 2018 cria a oportunidade perfeita para mostrar essa grande nação ao mundo, sua força intercontinental traduz mais de dois mil anos de conquistas e, une suas 83 federações em uma única língua, cultura e religião. A Rússia como conhecemos teve inicio no desenvolvimento das ideias da Terceira Roma, o grão-duque Ivã IV, o "Terrível", foi oficialmente coroado o primeiro czar ("césar") da Rússia em 1547. Mas, apenas, em 1991, na primeira eleição direta presidencial na história russa e, após a desintegração da União Soviética, renasce o amor às tradições e a beleza desse povo.</p>                        
                    </div>
                </div>
            </div>
        </div>

		<!--galley start-->
		<section id="gallery" class="gallery">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2 class="animated2">
							Cidades Sedes 
						</h2>
						<p>O impossível se revela: Conseguir demostrar toda a cultura da maior nação do mundo em apenas onze de suas milhares de cidades é uma tarefa árdua, mas compensadora. A escolha não foi fácil e, inúmeras outras belezas ficarão ainda escondidas, entretanto foi sábia, pois com pouco veremos o muito desse continente, sua história; Sua força de vida.</p>
					</div><!--/.gallery-header-->

					<div class="gallery-box">
						<div class="gallery-content">
						  	<div class="filtr-container">
						  		<div class="row">

						  			<div class="col-md-12 padding-0">
						  				<div class="filtr-item-2" >
											<a href="moscow.php"><img class="" src="../_complementos/images/home/022.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Moscow</p>			
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="kaliningrad.php"><img src="../_complementos/images/home/03.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Kaliningrad</p>			
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="kazan.php"><img src="../_complementos/images/home/04.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Kazan</p>			
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="nizhny_novgorod.php"><img src="../_complementos/images/home/05.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Nizhny Novgorod</p>		
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="rostov_on_don.php"><img src="../_complementos/images/home/0
												6.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Rostov-on-Don</p>
												</div> <!-- /.item-title-->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="saint_petersburg.php"><img src="../_complementos/images/home/07.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Saint Petersburg</p>	
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="samara.php"><img src="../_complementos/images/home/08.png" alt="portfolio image"/>
												<div class="item-title">
													<p>Samara</p>		
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="saransk.php"><img src="../_complementos/images/home/09.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Saransk</p>		
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="sochi.php"><img src="../_complementos/images/home/10.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Sochi</p>		
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="volgograd.php"><img src="../_complementos/images/home/11.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Volgograd</p>		
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  			<div class="col-md-6 padding-0">
						  				<div class="filtr-item">
											<a href="yekaterinburg.php"><img src="../_complementos/images/home/12.jpg" alt="portfolio image"/>
												<div class="item-title">
													<p>Yekaterinburg</p>		
												</div><!-- /.item-title -->
											</a>
										</div><!-- /.filtr-item -->
						  			</div><!-- /.col -->

						  		</div><!-- /.row -->

						  	</div><!-- /.filtr-container-->
						</div><!-- /.gallery-content -->
					</div><!--/.galley-box-->
				</div><!--/.gallery-details-->
			</div><!--/.container-->

		</section><!--/.gallery-->
		<!--gallery end-->


		<!--discount-offer start-->
		<section class="discount-offer">
			<div class="container overlay">
				<div class="row">
					<div class="col-sm-12">
						<div class="dicount-offer-content text-center">
							<h2  class="animated2">Quanto tempo falta para o início da Copa 2018?</h2>
							<div class="campaign-timer">
								<div id="timer">
									<div class="time time-after" id="days">
										<span></span>
									</div><!--/.time-->
									<div class="time time-after" id="hours">

									</div><!--/.time-->
									<div class="time time-after" id="minutes">

									</div><!--/.time-->
									<div class="time" id="seconds">

									</div><!--/.time-->
								</div><!--/.timer-->
							</div><!--/.campaign-timer-->
							
						</div><!-- /.dicount-offer-content-->
					</div><!-- /.col-->
				</div><!-- /.row-->
			</div><!-- /.container-->

		</section><!-- /.discount-offer-->
		<!--discount-offer end-->

		<!--packages start-->
		<section id="about" class="about-us">
			<div class="container">
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2  class="animated2">
							Sobre Nós 
						</h2>
						<p>
							 Nosso Time
						</p>
					</div><!--/.gallery-header-->
					
				</div><!--/.gallery-details-->
				<div class="row wow fadeInUp">
          <div class="col-md-2 pull-left">
            <div class="member">
              <center><div class="pic  "><img src="../_complementos/images/team/01.jpg" class="img-responsive   "  width="150px" alt=""></div>
               <h4>Renato Moura</h4>
              <span>Gerente de Projeto</span>
              <ul class="social">
                <li><a class="facebook" target="_blank" href="https://www.facebook.com/renatomoura7"></a></li>
                <li><a class="instagram " target="_blank" href="https://www.instagram.com/renatomoura7/"></a></li>
                <li><a class="twitter hidden " target="_blank" href="#"></a></li>
                <li><a class="github" target="_blank" href="https://github.com/rennkatt"></a></li>
                <li><a class="google-plus hidden" target="_blank" href="#"></a></li>
            </ul></center>
              
            </div>
          </div>

          <div class="col-md-2 pull-left">
            <div class="member">
              <center><center><div class="pic  "><img src="../_complementos/images/team/02.jpg" class="img-responsive   " width="150px"  alt=""></div>
              <h4>Elder Cordeiro</h4>
              <span>Design</span>
              <ul class="social">
                <li><a class="facebook" target="_blank" href="https://www.facebook.com/jnelderc"></a></li>
                <li><a class="instagram" target="_blank" href="https://www.instagram.com/jnelderc/"></a></li>
                <li><a class="twitter" target="_blank" href="https://twitter.com/jnelderc"></a></li>
                <li><a class="github" target="_blank" href="https://github.com/jnelderc"></a></li>
                <li><a class="google-plus" target="_blank" href="https://plus.google.com/+ElderCordeiro"></a></li>
            </ul></center>
              
            </div>
          </div>

          <div class="col-md-2 pull-left">
            <div class="member">
              <center><div class="pic  "><img src="../_complementos/images/team/03.jpg" class="img-responsive   " width="150px" alt=""></div>
              <h4>Erico Vinicio</h4>
              <span>Analista</span>
              <ul class="social">
                <li><a class="facebook hidden" target="_blank" href="#"></a></li>
                <li><a class="instagram hidden" target="_blank" href="#"></a></li>
                <li><a class="twitter hidden" target="_blank" href="#"></a></li>
                <li><a class="github hidden" target="_blank" href="#"></a></li>
                <li><a class="google-plus hidden" target="_blank" href="#"></a></li>
            </ul></center>
              
            </div>
          </div>

          <div class="col-md-2 pull-left">
            <div class="member">
             <center><div class="pic  "><img src="../_complementos/images/team/04.jpg" class="img-responsive   " width="150px" alt=""></div>
              <h4>Hyago Sayomar</h4>
              <span>Desenvolvedor</span>
              <ul class="social">
                <li><a class="facebook" target="_blank" href="https://www.facebook.com/hyago.sayomar"></a></li>
                <li><a class="instagram " target="_blank" href="https://www.instagram.com/hyagodiaz_/?hl=pt-br"></a></li>  
                <li><a class="twitter hidden" target="_blank" href="#"></a></li>
                <li><a class="github" target="_blank" href="https://github.com/HyagoDiaz"></a></li>
                <li><a class="google-plus hidden " target="_blank" href="#"></a></li>
            </ul></center>
              
            </div>
          </div>

           <div class="col-md-2 pull-left">
            <div class="member">
              <center><div class="pic  "><img src="../_complementos/images/team/05.jpg" class="img-responsive   " width="150px" alt=""></div>
              <h4>Jefferson Gonçalves</h4>
              <span>Desenvolvedor</span>
              <ul class="social">
                <li><a class="facebook hidden" target="_blank" href="#"></a></li>
                <li><a class="instagram hidden" target="_blank" href="#"></a></li>
                <li><a class="twitter hidden" target="_blank" href="#"></a></li>
                <li><a class="github" target="_blank" href="https://github.com/Jerffeson"></a></li>
                <li><a class="google-plus hidden" target="_blank" href="#"></a></li>
            </ul></center>
              
            </div>
          </div>

           <div class="col-md-2 pull-left">
            <div class="member">
              <center><div class="pic  "><img src="../_complementos/images/team/06.jpg" class="img-responsive   " width="150px" alt=""></div>
              <h4>Robson Lemos</h4>
              <span>Testador</span>
              <ul class="social">
                <li><a class="facebook" target="_blank" href="https://www.facebook.com/robson.lemos.75"></a></li>
                <li><a class="instagram" target="_blank" href="https://www.instagram.com/robsonlemos2011/"></a></li>
                <li><a class="twitter hidden" target="_blank" href="#"></a></li>
                <li><a class="github" target="_blank" href="https://github.com/robsonlemos"></a></li>
                <li><a class="google-plus" target="_blank" href=" https://plus.google.com/u/0/117987277098925056760"></a></li>
            </ul></center>
              
            </div>
          </div>
        </div>

        

			</div><!--/.container-->



		</section>

					
		<section id="contact" class="contact ">
	        <div class="container overlay">
	            <div class="row">
	                <div class="col-lg-12">
	                    <div class="section-title text-center">
	                        <h2>Dúvidas e Sugestões</h2>
	                        <p class="white-text">Mande-nos sua mensagem</p>
	                    </div>

	                    <?php

                            if(isset($_GET['mail'])){
                            		$id_mail = $_GET['mail'];
                               
                                if ($id_mail = 'success'){
                               
                                    echo '<div class="alert alert-success">
                                              <button type="button" style="margin-top: 0px;" class="close" data-dismiss="alert">×</button>
                                              <strong>Sucesso!</strong> Email enviado com sucesso.
                                            </div>';
                                } else {
                                    echo '<div class="alert alert-danger">
                                      <button type="button" style="margin-top: 0px;" class="close" data-dismiss="alert">×</button>
                                      <strong>Erro!</strong> Não foi possível excluir o post.
                                    </div>';
                                }
                            }
                            
                            ?>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-12">
	                    <form name="sentMessage" id="contactForm" action="../_email/enviar.php" method="post" enctype="multipart/form-data" role="form" novalidate>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Seu Nome *" id="nome" name="nome" required data-validation-required-message="Por favor, escreva o seu nome." required>
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="email" id="email" name="email" class="form-control" placeholder="Seu Email *" id="email" required data-validation-required-message="Por favor, escreva o seu e-mail." required>
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="text" name="assunto" id="assunto" class="form-control" placeholder="Seu Assunto *" id="assunto" required data-validation-required-message="Por favor, escreva o assunto deste e-mail." required>
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <textarea class="form-control" placeholder="Sua Mensagem *" id="message" name="mensagem" required data-validation-required-message="Por favor, escreva sua mensagem." required></textarea>
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                            </div>
	                            <div class="clearfix"></div>
	                            <div class="col-lg-12 text-center">
	                                <div id="success"></div>
	                                <button type="submit" id="enviar"  value="Enviar" name="enviar" class="btn btn-primary">Enviar Mensagem</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            
	        </div>
	        
	    </section>

	    <section id="parceiros" class="about-us" style="background: #fff">
				<div class="container text-center">   
				<div class="gallery-details">
					<div class="gallary-header text-center">
						<h2  class="animated2">
							Nossos Parceiros 
						</h2>
						
					</div><!--/.gallery-header-->
					
				</div><!--/.gallery-details--> 

			  <div class="row" style="margin-top: 2em;">
			    <div class="col-sm-6">
			      <img src="../_complementos/images/parceiros/logo-in-40.png" style="height: 100px;" alt="Image">
			      <br>
			      <h5 style="padding-top: 10px;">CHUTE DE GÊNIO</h5>
			      <br>
			      <p class="chute">O projeto chute de gênio consiste em fazer simulações da copa do mundo de 2018. A ideia central é ter um hanking de quem acertou.</p><br>
			      <a href="http://chutedegenio.herokuapp.com/" target="_blank"><button type="button" class="btn btn-primary">Saiba mais</button></a>
			    </div>

			    <div class="col-sm-6"> 
			    	
			      <img src="../_complementos/images/parceiros/futhistoria.png" style="height: 60px;background-color: #002752;padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;margin-top: 20px;margin-bottom: 20px;" alt="Image" class="futimg">
			      
			       <h5 style="padding-top: 10px;">FUTHISTÓRIA</h5>
			       <br>
			      <p class="fut">O projeto futhistória vai te mostrar tudo o que você quer saber sobre as seleções da copa de 2018.</p><br>
			       <a href="http://futistoria-br.umbler.net/" target="_blank"><button type="button" class="btn btn-primary">Saiba mais</button></a>
			    </div>
			 
			  </div>
			</div>
		</section>

		
		<footer  class="footer-copyright">
			<div class="container">
				
				<hr>
				<div class="foot-icons ">
					
		        	<p>&copy; 2018 <a href="#">CopaTur</a>.</p>

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer>

		 <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
		
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
		<script src="../_complementos/js/jquery.js"></script>

		<!--bootstrap.min.js-->
		<script  src="../_complementos/js/bootstrap.min.js"></script>
	
		<!-- Twitter Bootstrap -->
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

		<!-- bootsnav js -->
		<script src="../_complementos/js/bootsnav.js"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="../_complementos/js/jquery.filterizr.min.js"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
		<script src="../_complementos/js/cbpAnimatedHeader.js"></script>
		<script src="../_complementos/js/classie.js"></script>
    
		<!--jquery-ui.min.js-->
        <script src="../_complementos/js/jquery-ui.min.js"></script>

        <!-- counter js -->
		<script src="../_complementos/js/jquery.counterup.min.js"></script>
		<script src="../_complementos/js/waypoints.min.js"></script>

		<!--owl.carousel.js-->
        <script  src="../_complementos/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
		<script src="../_complementos/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="../_complementos/js/datepicker.js"></script>

		<!--Custom JS-->
		<script src="../_complementos/js/script.js"></script>
		<script src="../_complementos/js/custom.js"></script>
    </body>
</html>

<script>
	function desser_mais(){
		setTimeout(
			function(){
				window.scrollTo( 0, window.pageYOffset + 1);
			}, 1);		
		console.log("desseu");
	}
</script> 