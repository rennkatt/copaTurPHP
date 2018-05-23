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
		
		<div class="banner kaliningrad" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Kaliningrad</span></h1>
                         <p>Exclave russo entre a Polónia e a Lituânia, à beira do Mar Báltico. Fundada em 1255 pelos Cavaleiros Teutónicos sob o nome de Königsberg - "montanha do rei”. A cidade de muitos: No século XIII, foi parte da Polônia; Também foi a capital da Prússia Oriental e, a partir de 1871, fez parte do Império Alemão.</p>
                
                    </div>
                </div>
            </div>
        </div>

<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(../_complementos/images/cidades/kaliningrad/historia.jpeg);"></div>
					<div class="desc">
						<h2>História</h2>
						<p>A 1.255 km a oeste de Moscou, é um enclave russo no coração da Europa, sem conexão terrestre com o resto do país. A região costumava fazer parte da Prússia (então conhecida como Königsberg), possível perceber isso pela arquitetura; é como se estivéssemos em uma cidade medieval alemã.  </p>
						<p><a href="historia.php?cidade=kaliningrad" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/kaliningrad/estadio.jpeg);"></div>
						<div class="desc">
							<h2>Estádio</h2>
							<p>O Kaliningrad Stadiumou ou Arena Baltika está sendo construído propositalmente para a Fifa World Cup - Russia 2018.  Ele fica em uma ilha no próprio centro da cidade em um local que já foi muito florescente, com quadras de habitação, empresas e grande população, mas que foi devastada pela Segunda Guerra, ficando deserta por 70 anos. O Mundial é a chance de  recuperação.</p>
							<p><a href="estadio.php?cidade=kaliningrad" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/kaliningrad/ponto_turistico.jpeg);"></div>
						<div class="desc">
							<h2>Pontos Turísticos</h2>
							<p>A região de Kaliningrado é responsável por cerca de 90% da produção mundial de âmbar. Por isso, para ver os espécimes mais raros, é preciso ir ao Museu do Âmbar, localizado em uma fortaleza da metade do século XIX. <br><br><br><br><br></p>
							<p><a href="ponto_turistico.php?cidade=kaliningrad" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/kaliningrad/hotel.jpeg);"></div>
						<div class="desc">
							<h2>Hotéis</h2>
							<p>De acordo com a cotação 18 de abril de 2018, R$ 1 equivale a 18,00 rublos russos. Mas para fazer trocas para a moeda local, a melhor opção é usar dólar norte-americano e euro. Os custos diários na Rússia podem variar de acordo com o seu orçamento. Em uma viagem de baixo custo, é possível gastar cerca de R$ 90 com hospedagem em quartos compartilhados e alimentação em lugares simples.</p>
							<p><a href="hotel.php?cidade=kaliningrad" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image image-ab" style="background-image: url(../_complementos/images/cidades/kaliningrad/restaurante.jpeg);"></div>
						<div class="desc">
							<h2>Restaurantes</h2>
							<p>Mesmo para um europeu comum, é fácil satisfazer todos os caprichos em Kaliningrado: à taxa de câmbio atual, os preços até mesmo para os serviços de "luxo" - por padrões locais - não são altos. Para se ter uma ideia da estética prussiana, os visitantes costumam ir a um bairro restaurado de Koenigsberg, chamado Village Fishing. Um complexo de spa e restaurantes com vista para o principal marco da cidade: A Catedral do século 14 situada na ilha de Kneiphof.</p>
							<p><a href="restaurante.php?cidade=kaliningrad" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(../_complementos/images/cidades/kaliningrad/comida.jpeg);"></div>
						<div class="desc">
							<h2>Comidas Típicas</h2>
							<p>Os antigos portões e fortificações, datados do século XVII, são as principais atrações para quem gosta de história. Visitar as margens do mar Báltico podem ajudar os torcedores com uma pausa após assistir aos jogos da Copa.</p>
							<p><a href="comidas.php?cidade=kaliningrad" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image " style="background-image: url(../_complementos/images/cidades/kaliningrad/artesanato.jpeg);"></div>
						<div class="desc">
							<h2>Artesanato</h2>
							<p>A região de Kaliningrado é responsável por cerca de 90% da produção mundial de âmbar, tendo até o “Museu Âmbar”, que guarda os espécimes mais raros, Itens de âmbar artesanal são vendidos em todos os grandes centros comerciais, mas o melhor custo-benefício é oferecido por fornecedores locais. </p>
							<p><a href="artesanato.php?cidade=kaliningrad" class="btn btn-primary btn-luxe-primary">Saiba Mais <i class="fa fa-angle-right"></i></a></p>
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
