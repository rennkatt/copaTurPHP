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
						
						<li>
	                        <a class="page-scroll" href="index.php#parceiros">Parceiros</a>
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
		
		<div class="banner moscow" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Moscow</span></h1>
                        <p>Se você quer conhecer fantasmas ou conversar com espíritos, basta dar um passeio por Moscow, que tem um arsenal de mitos e lendas arrepiantes, e desfruta da reputação de ser uma das cidades mais misteriosas e estranhas da Europa.</p>
                                       
                    </div>
                </div>
            </div>
        </div>

<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(../_complementos/images/cidades/moscow/historia.jpeg);"></div>
					<div class="desc">
						<h2>História</h2>
						<p>Não existe uma data precisa de sua fundação, sabe-se apenas que a mais de 870 anos foi a capital da Moscovia, do subsequente Czarado da Rússia e, durante a Guerra Fria, Moscou foi a capital da extinta União Soviética e, mesmo que alguma cicatriz nos traga à memoria esta época, as pérolas arquitetônicas do ciclo do Império se espalham por essa capital icônica. </p>
						<p><a href="historia.php?cidade=moscow" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/moscow/estadio.jpeg);"></div>
						<div class="desc">
							<h2>Estádios</h2>
							<p>Moscou é a única cidade em que os jogos da Copa do Mundo irão decorrer em dois estádios. Os jogos mais importantes, incluindo a final, serão acolhidos pelo legendário estádio Luzhniki. Luzhniki será acompanhado pelo estádio Spartak, o qual já foi testado com êxito durante a Copa das Confederações. </p>
							<p><a href="estadio.php?cidade=moscow" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/moscow/ponto_turistico.jpeg);"></div>
						<div class="desc">
							<h2>Pontos Turísticos</h2>
							<p>Olhando Moscou do alto, por satélite, veremos as três ‘Ring Roads’ bem definidas e, ao centro o contorno do Kremlin. Habitada por povo ‘fino-úgricos’, dois séculos antes de Cristo, a colina do rio Neglinnaya recebeu, no século XI, uma estrutura fortificada que fora destruída em 1237 pelos mongóis e reconstruída em 1339. Mas desde 1331 já era conhecida como Kremlin. </p>
							<p><a href="ponto_turistico.php?cidade=moscow" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/moscow/hotel.jpeg);"></div>
						<div class="desc">
							<h2>Hotéis</h2>
							<p>O mundo volta os olhos à Rússia. Além de estádios modernos com tecnologia de ponta, a ‘Fifa World Cup - Russia 2018’ escolheu a dedo cidades capazes de encantar a todos com suas belezas e mistérios e Moscou com sua grandiosidade é o palco central desta festa. </p>
							<p><a href="hotel.php?cidade=moscow" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/moscow/restaurante.jpeg);"></div>
						<div class="desc">
							<h2>Restaurantes</h2>
							<p>Por ser uma megalópole, Moscou conta com inúmeras opções de comida, sejam típicas da Rússia ou até mesmo de outras nacionalidades. Confira três dos melhores restaurantes de culinária russa em Moscou:</p>
							<p><a href="restaurante.php?cidade=moscow" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/moscow/comida_tipica.jpeg);"></div>
						<div class="desc">
							<h2>Comidas Típicas</h2>
							<p>A origem do pelmeni não é clara e existem várias versões. A mais aceite afirma que a receita foi descoberta nos Urais por exploradores russos, que observaram que a população local usava um prato semelhante (chamado "pelnian", literalmente "orelha de urso", na língua local), que consistia em pedaços de carne envolvida num pão muito fino. </p>
							<p><a href="comidas.php?cidade=moscow" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image " style="background-image: url(../_complementos/images/cidades/moscow/artesanato.jpg);"></div>
						<div class="desc">
							<h2>Artesanato</h2>
							<p>As ‘Matrioskas’ reinam absolutas em Moscou. Elas estão por todos os lados: dos camelôs da Praça Vermelha aos luxuosos quiosques nos shoppings da cidade. Mas é em uma feira de artesanato que as bonecas ganham suas mais variadas formas e estilos.</p>
							<p><a href="artesanato.php?cidade=moscow" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
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
