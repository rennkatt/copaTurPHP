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
		
		<div class="banner saint_petersburg" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Saint Petersburg</span></h1>
                        <p>Fundada em 1703, pelo imperador Pedro, o Grande, desfruta de uma atmosfera vibrante e cosmopolita e de algumas das mais belas arquiteturas da Europa. Embora jovem, para o padrão da Rússia, tem uma história rica e emocionante, cheia de eventos dramáticos e grandes figuras históricas.</p>
                
                    </div>
                </div>
            </div>
        </div>

<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(../_complementos/images/cidades/saint_petersburg/historia.jpg);"></div>
					<div class="desc">
						<h2>História</h2>
						<p>A principal cidade portuária da Rússia foi Archangelsk, localizada no Mar Branco e era bloqueado para navegação durante os meses de inverno rigoroso, isso irritava muito o czar Pedro I - O Grande, que apaixonada pela marinha, aspirava pela construção de um novo porto para o Império Russo. Em 12 de maio de 1703, aproveitando-se da Grande Guerra do Norte, capturou a cidade de Nyens (fundada pelos suecos em 1611) e no dia 27, próximo ao estuário da ilha de Hare, estabelece o Forte de Pedro e Paulo, dando início à construção de uma nova cidade.</p>
						<p><a href="historia.php?cidade=saint petersburg" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/saint_petersburg/estadio.jpeg);"></div>
						<div class="desc">
							<h2>Estádio</h2>
							<p>Arena Krestovsky está situado na Ilha Krestovsky, em São Petersburgo, ficou pronto em abril de 2017 em meio às muitas denúncias de exploração de trabalho escravo e de corrupção envolvendo a construção - o custo total da obra foi quase 600% maior do que o previsto no projeto inicial, ficando em R$ 4,51 bilhões</p>
							<p><a href="estadio.php?cidade=saint petersburg" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/saint_petersburg/ponto_turistico.jpg);"></div>
						<div class="desc">
							<h2>Pontos Turísticos</h2>
							<p>São Petersburgo tem como grande atração o museu Hermitage, um dos mais famosos do mundo por ter um enorme acervo de peças históricas. O principal prédio do museu é o Palácio de Inverno, o mesmo foi construído no século XVIII e serviu de residência para muitos czares russos.</p>
							<p><a href="ponto_turistico.php?cidade=saint petersburg" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/saint_petersburg/hotel.jpg);"></div>
						<div class="desc">
							<h2>Hotéis</h2>
							<p>A região do centro histórico é a melhor opção para hospedar-se em São Petersburgo. Hotéis, albergues ou apartamentos de temporada, próximos à famosa Avenida Nevsky, garante ao visitante a possibilidade de fazer boa parte do roteiro a pé. </p>
							<p><a href="hotel.php?cidade=saint petersburg" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/saint_petersburg/restaurante.jpg);"></div>
						<div class="desc">
							<h2>Restaurantes</h2>
							<p>As opções pela cidade são muitas, a maioria com comidas típicas da Rússia ou até mesmo culinárias de outros países, principalmente orientais. Mas não são somente os canais de São Petersburgo que remetem à Veneza.</p>
							<p><a href="restaurante.php?cidade=saint petersburg" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/saint_petersburg/comida.jpg);"></div>
						<div class="desc">
							<h2>Comidas Típicas</h2>
							<p>São Petersburgo é uma cidade para se caminhar, onde a maioria de seus pontos turísticos estão as margens do Rio Neva e da avenida Nevskiy Prospekt, melhor ponto de referência - se estende por 4,5 quilômetros. </p>
							<p><a href="comidas.php?cidade=saint petersburg" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image " style="background-image: url(../_complementos/images/cidades/saint_petersburg/artesanato.jpg);"></div>
						<div class="desc">
							<h2>Artesanato</h2>
							<p>O Souvenir Market é um grande centro de artistas/artesãos, que até dominam bem a língua inglesa. Ótimo local para comprar lembranças legais em São Petersburgo, que não possui um artesanato único. </p>
							<p><a href="artesanato.php?cidade=saint petersburg" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
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
