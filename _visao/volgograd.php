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
		
		<div class="banner volgograd" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Volgograd</span></h1>
                        <p>Eternizada nos cinemas: "Nas Trincheiras de Stalingrado" de Viktor Nekrasov e, "Vida e Destino" de Vassily Grossman. Foi local de uma das batalhas mais importantes da história do mundo. Em 10 de janeiro de 1943, o General Konstantin Rokossovsky lançou a Operação Ring, que acabaria por conduzir à aniquilação dos restos do Sexto Exército alemão que rodeado a cidade.</p>
                
                    </div>
                </div>
            </div>
        </div>

<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(../_complementos/images/cidades/volgograd/historia.jpg);"></div>
					<div class="desc">
						<h2>História</h2>
						<p>Tsaritsyn foi seu primeiro nome, originada em 1555, evidências documentadas na confluência dos rios Tsaritsa e Volga datam apenas de 1589. Grigori Zasekin estabeleceu a fortaleza Sary Su (o nome local em idioma tártaro significa "água amarela" ou "rio amarelo") como parte das defesas da instável fronteira meridional do Tzarismo da Rússia. </p>
						<p><a href="historia.php?cidade=volgograd" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/volgograd/estadio2.jpg);"></div>
						<div class="desc">
							<h2>Estádio</h2>
							<p>A Arena Volgograd, localizada ao lado do Memorial de Mamayev Kurgan, um dos principais pontos turísticos da cidade, e às margens do Rio Volga, foi construída em 1958, no lugar de um depósito de óleo e, espera-se que sua reinauguração seja mais uma conquista depois de completamente reformado para a disputa da Copa do Mundo.</p>
							<p><a href="estadio.php?cidade=volgograd" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/volgograd/ponto_turistico.jpg);"></div>
						<div class="desc">
							<h2>Pontos Turísticos</h2>
							<p>A cidade é muito conhecia pelo seu histórico soviético e pelas grandes batalhas travadas em seu território. Assim, os principais monumentos históricos fizeram parte da guerra ou foram construídos para homenagear os que faleceram durante os confrontos. </p>
							<p><a href="ponto_turistico.php?cidade=volgograd" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/volgograd/hotel.jpg);"></div>
						<div class="desc">
							<h2>Hotéis</h2>
							<p>Sem dúvida, a melhor região onde ficar em Volgograd é a do centro da cidade. A antiga Stalingrado era considerada uma das principais cidades da União Soviética comunista, por isso nessa área você vai encontrar muitos pontos turísticos relacionados a essa época, como museus e monumentos. </p>
							<p><a href="hotel.php?cidade=volgograd" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/volgograd/restaurante.jpg);"></div>
						<div class="desc">
							<h2>Restaurantes</h2>
							<p>A influência europeia é grande em Volgogrado e a especialidade da cidade são as ‘espetadas de carne’, chamadas de chachlík. Elas podem ser encontradas em todos os restaurantes. Outro prato muito servido é o frango à Kiev (filé de peito de frango recheado com manteiga e salsinha), prato que veio da Ucrânia.</p>
							<p><a href="restaurante.php?cidade=volgograd" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/volgograd/comida.jpg);"></div>
						<div class="desc">
							<h2>Comidas Típicas</h2>
							<p>Frango Kiev é um prato de filé de frango socado e enrolado em torno de manteiga fria, então revestido com ovos e migalhas de pão, e frito ou assado. Em geral, o prato de peito de frango recheado também é conhecido nas culinárias ucraniana, russa e polonesa como côtelette de volaille.</p>
							<p><a href="comidas.php?cidade=volgograd" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image " style="background-image: url(../_complementos/images/cidades/volgograd/artesanato.jpg);"></div>
						<div class="desc">
							<h2>Artesanato</h2>
							<p>Em nossa pesquisa, não encontramos menção ao artesanato da cidade de Volgogrado. Mas, na Rússia, há uma grande variedade de solvernis em oferta, que vale a pena conferir. </p>
							<p><a href="artesanato.php?cidade=volgograd" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
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
