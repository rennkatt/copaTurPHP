<?php
ob_start();
session_start();
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
		<meta Http-Equiv="Cache-Control" Content="no-cache">  
		<meta Http-Equiv="Pragma" Content="no-cache">  
		<meta Http-Equiv="Expires" Content="0">
		
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

		<!-- icon -->
		<link rel="shortcut icon" type="image/icon" href="../_complementos/images/icone.png"/>
		
		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="../_complementos/css/font-awesome.min.css" />
		
		<!--animate.css-->
		<link rel="stylesheet" href="../_complementos/css/animate.css" />

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
		<link rel="stylesheet" href="../_complementos/css/style.css" />
		
		<!--responsive.css-->
		<link rel="stylesheet" href="../_complementos/css/responsive.css" />

		
        

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
	                        <a class="page-scroll" href="index.php#home">Home</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="index.php#gallery">Cidades</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="index.php#about">Sobre Nós</a>
	                    </li>
	                    <li>
	                        <a class="page-scroll" href="index.php#contact">Contato</a>
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
		                            <a href="../_controle/sair.php" class="external"><i class="fa fa-fw fa-power-off"></i> Sair </a>
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
		
		<div class="banner sochi" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Sochi</span></h1>
                         <p>Cidade resort da Rússia, situada no Krai de Krasnodar, no sudoeste do país, nas proximidades das montanhas nevadas do Cáucaso e do mar Negro. Aspectos físicos da região, praias e montanhas, fazem de Sótchi o destino de milhares de russos durante suas férias.</p>
                
                    </div>
                </div>
            </div>
        </div>

<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(../_complementos/images/cidades/sochi/história.jpg);"></div>
					<div class="desc">
						<h2>História</h2>
						<p>Os russos não tinham conhecimento detalhado da área até Barão Feodor Tornau investigar a rota costeira de Gelendzhik para Gagra, e através das montanhas para Kabarda, na década de 1830. Em 1838, o forte de Alexandria foi nomeado Navaginsky, um ano depois foi fundada na foz do rio Sochi como parte da linha costeira do Mar Negro... </p>
						<p><a href="historia.php?cidade=sochi" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/sochi/estádio2.jpg);"></div>
						<div class="desc">
							<h2>Estádio</h2>
							<p>Batizado em honra a um pico montanhoso na parte ocidental da cordilheira principal do Cáucaso, o Estádio de Fisht (ou estádio Olímpico de Fisht) foi construído em 2013 para os Jogos Olímpicos e Paraolímpicos de Inverno, em 2014, e posteriormente reformado para receber jogos de futebol. </p>
							<p><a href="estadio.php?cidade=sochi" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/sochi/ponto.jpg);"></div>
						<div class="desc">
							<h2>Pontos Turísticos</h2>
							<p>Sochi é uma das cidades com clima mais ameno da Rússia, sendo um dos principais destinos de milhares de turistas durante as férias, já que as temperaturas, tanto no inverno quanto no verão, são agradáveis. A região onde ficará um dos estádios da Copa é rodeada com água tépida e altas montanhas nevadas. </p>
							<p><a href="ponto_turistico.php?cidade=sochi" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/sochi/hotelresort.jpg);"></div>
						<div class="desc">
							<h2>Hotéis</h2>
							<p>A melhor região para ficar em Sochi é o centro, próximo ao porto. É ali que você vai encontrar a maior parte das principais atrações da cidade, como parques, museus, praias e construções históricas. Local de uma grande variedade de cafés, restaurantes, lojas e opções de hospedagem, que vão desde hostels até grandes hotéis 5 estrelas. </p>
							<p><a href="hotel.php?cidade=sochi" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/sochi/restaurante.jpg);"></div>
						<div class="desc">
							<h2>Restaurantes</h2>
							<p>A cidade de Sochi oferece grande variedade de restaurantes, sendo muitos deles specializados com a comida local. Confira aqui três dos melhores restaurantes de culinária russa de Sochi.</p>
							<p><a href="restaurante.php?cidade=sochi" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/sochi/comidakhachapuri.jpg);"></div>
						<div class="desc">
							<h2>Comidas Típicas</h2>
							<p>A culinária caucasiana não é propriamente um lugar para se visitar mas, sem sombra de dúvidas, é uma atração à parte! E não há melhor lugar para você experimentar suas delícias que não seja em Sochi.</p>
							<p><a href="comidas.php?cidade=sochi" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image " style="background-image: url(../_complementos/images/cidades/sochi/artesanato.jpg);"></div>
						<div class="desc">
							<h2>Artesanato</h2>
							<p> <p class="drop-cap">Em nossa pesquisa, não encontramos menção ao artesanato da cidade de Sochi. Mas, na Rússia, há uma grande variedade de solvernis em oferta (Espécie de lembrancinhas). Souvernirs russas vêm em várias formas, as mais comuns são as bonecas russas.</p></p>
							<p><a href="artesanato.php?cidade=sochi" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>


	
	
		
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
