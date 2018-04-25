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
		<link rel="stylesheet" href="../_complementos/lib/fontello/css/fontello.css" />
		
		
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
		<link rel="stylesheet" href="../_complementos/css/main.css" />
		<link rel="stylesheet" href="../_complementos/css/992.css" />
		<link rel="stylesheet" href="../_complementos/css/768.css" />
		
		
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
	                <div class="logo"><a class="navbar-brand page-scroll pad0" href="#page-top" href="index.html"><img src="../_complementos/images/logo.png" alt=""></a></div><!-- /.logo-->
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
		                            <a href="#" class="external"><i class="fa fa-fw fa-user"></i> Perfil </a>
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
		
		<div class="banner" id="home">
            <div class="overlay">
                <div class="container">
                    <div class="intro-text">
                        <h1>Bem Vindo à <span>Moscow</span></h1>
                       	<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li><a href="#">Moscow</a></li>
						  <li class="active">História</li>
						</ol>
                        
                    </div>
                </div>
            </div>
        </div>

 <div id="page" class="hfeed site">
        
        
        
        <!-- site-main -->
        <div id="main" class="site-main">
        
                 
                        
            <!-- primary -->
        	<div id="primary" class="content-area">
            	
                <!-- site-content -->
                <div id="content" class="site-content" role="main"> <!-- layout-fixed -->
                    <div class="layout-fixed"> <!-- .hentry -->
                            <article class="hentry type-post">
                            
                            	
                                <!-- .entry-header -->
                                <header class="entry-header">
                                    
                                    
                                    <!-- .entry-title -->
                                    <h1 class="entry-title">História de Moscow</h1>
                                    
                                </header>
                                <!-- .entry-header -->
                                
                                <!-- .featured-image -->
                                <div class="featured-image">
                                    <img src="../_complementos/images/cidades/moscow/historia.jpeg" alt="blog-image">
                                    <cite>Fonte da imagem: <a href="#" title="test link">test link</a></cite>
                                </div>
                                <!-- .featured-image -->
                                                                
                                
                                
                                <!-- .entry-content -->
                                <div class="entry-content">
                                    
                                    
                                                                                                            
                                    <p class="drop-cap">A 1.255 km a oeste de Moscou, é um enclave russo no coração da Europa, sem conexão terrestre com o resto do país. A região costumava fazer parte da Prússia (então conhecida como Königsberg), possível perceber isso pela arquitetura; é como se estivéssemos em uma cidade medieval alemã. </p>
                                    
                                    <p>No fim da Segunda Guerra Mundial, em 1945, a cidade de Königsberg foi anexada pela União Soviética, enquanto se aguardava a decisão definitiva sobre questões territoriais (incluindo a partição da antiga Prússia Oriental) que viria no acordo de paz, valendo até lá o que fora decidido pelos Aliados (União Soviética, Estados Unidos e Grã-Bretanha) participantes da Conferência de Potsdam.</p>
                                    
                                    <p>Königsberg foi renomeada Kaliningrado em 1946, após a morte de Mikhail Kalinin, um dos bolcheviques originais. A população alemã sobrevivente foi expulsa da área, entre 1946 e 1949, e a cidade foi repovoada por cidadãos soviéticos. A língua alemã foi substituída pela língua russa. A cidade, que fora devastada pelos bombardeios britânicos durante a Guerra, foi reconstruída. Por ser o território mais ocidental da URSS, o Oblast de Kaliningrado tornou-se uma área estrategicamente importante durante a Guerra Fria. A Frota do Báltico (soviética) permaneceria em Kaliningrado, ao longo dos anos 1950, e, por sua importância estratégica, a cidade foi fechada a visitantes estrangeiros. E em 1957 foi firmado um acordo, que passaria a vigorar posteriormente, delimitando a fronteira entre a Polônia e a União Soviética. </p>
                                                                    
                                    <p>Kaliningrad possui as maiores dunas de areia da Europa, no menor parque nacional da Rússia: O Istmo da Curlândia, uma estreita faixa de areia que separa o Mar Báltico e a Lagoa da Curlândia. Pelas suas dimensões, comprimento, dunas altíssimas, o istmo não tem análogos na Europa. Em um só dia aqui se pode ver florestas de pinheiros de beleza extraordinária, mar e dunas altíssimas, caminhar pelas praias do Báltico que se estendem por vários quilômetros e encontrar âmbar. Também se pode ouvir a música das areias. Quando você caminha pelo istmo, a areia produz sons únicos que se juntam em melodias. Quase um milhão de turistas são atraídos todo ano por suas belezas.</p>
                                                                        
                                    <h2>Como chegar:</h2>

                                    <p>De avião: Não existem voos diretos das principais capitais brasileiras para Moscou, apenas com conexões em outras cidades europeias - o tempo total de viagem saindo de São Paulo, por exemplo, é de no mínimo 16 horas, já contando a parada na conexão. A capital da Rússia é servida por três aeroportos: Sheremetyevo International, Moscou Domodedovo e Moscou Vnukovo.</p>
                                    <p>De trem: É possível acessar Moscou das principais cidades da Europa, mas essa não é uma viagem das mais rápidas e nem das mais baratas. Passageiros provenientes de Praga (República Tcheca), Kiev (Ucrânia) e Budapeste (Hungria) desembarcam na estação Kievskiy, enquanto trens de alta velocidade provenientes de São Petersburgo chegam na estação Leningradskiy. Neste último trajeto, o tempo é de 3h50.</p>
                                    <p>De carro: Moscou pode ser acessada de carro, mas a capital russa tem um trânsito local bastante confuso, além de toda má fama dos motoristas, que, no geral, não respeitarem sinais de trânsito e limites de velocidade. Além disso, os engarrafamentos são constantes na cidade que abriga dois dos estádios da Copa 2018.</p>



 

                                    
                                    <p>Leia mais em: <a href="https://br.sputniknews.com/portuguese.ruvr.ru/2012_10_16/Copa-Mundial-de-2018-em-Kaliningrado-areias-cantantes-e-buscas-de-ambar/">sputniknews</a> | 
                                    	<a href="https://en.wikipedia.org/wiki/Kaliningrad">wikipedia</a></p>
                                    
                                     <!-- .post-tags -->
                                     <div class="post-tags tagcloud">
                                        <a href="#" rel="tag">Pontos Turísticos</a>
                                        <a href="#" rel="tag">Hotéis</a>
                                        <a href="#" rel="tag">Restaurantes</a>
                                        <a href="#" rel="tag">Comidas Típicas</a>
                                        <a href="#" rel="tag">Estádios</a>
                                        <a href="#" rel="tag">Artesanato</a>
                                     </div>
                                     <!-- .post-tags -->
                                    
                                     
                                     <!-- .share-links -->
                                     <div class="share-links">
                                        
                                        <h3>COMPARTILHE ESTA POSTAGEM</h3>
                                        
                                        <div class="share-links-wrap">
                                                                        
                                            <a rel="nofollow" target="_blank" href="mailto:?subject=Eu quero que veja essa postagem&amp;body=Olha esta postagem : História de Moscow - http://copatur-com-br.umbler.net/_visao/moscow.php" title="Email this post to a friend"><i class="pw-icon-mail"></i></a>
                                            
                                            <a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http://copatur-com-br.umbler.net/_visao/moscow.php" title="Compartilhe esta postagem no Google+"><i class="pw-icon-gplus"></i></a>
                                            
                                            <a rel="nofollow" target="_blank" href="http://twitter.com/home?status=http://copatur-com-br.umbler.net/_visao/moscow.php" title="Compartilhe esta postagem no Twitter"><i class="pw-icon-twitter"></i></a>
                                              
                                            <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http://copatur-com-br.umbler.net/_visao/moscow.php" title="Compartilhe esta postagem no Facebook"><i class="pw-icon-facebook"></i></a>
                                        
                                        </div>
                                        
                                     </div>
                                     <!-- .share-links -->
                                     
                                        
                                    <!-- .about-author -->
                                    <aside class="about-author">
                                        
                                        <h3 class="section-title">ESCRITO POR</h3>
                                        
                                        <!-- .author-bio --> 
                                        <div class="author-bio">
                                            
                                            <!-- .author-img --> 
                                            <div class="author-img">
                                                <a href="#"><img alt="Johnny Doe" src="../_complementos/images/team/01.jpg" class="avatar"></a>												
                                            </div>
                                            <!-- .author-img -->
                                            
                                            <!-- .author-info -->
                                            <div class="author-info">
                                                <h4 class="author-name">Lorem lorem</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolores, modi recusandae ipsa iure nesciunt ducimus odit quos maiores molestiae blanditiis. Voluptatem ipsam eaque, dolorum deserunt ratione. Rem, fugit. Nemo.</p>
                                                
                                                <!-- SOCIAL -->
                                                <ul class="social">
                                                    <li><a class="facebook" href="#"></a></li>
                                                    <li><a class="instagram" href="#"></a></li>
                                                    <li><a class="twitter" href="#"></a></li>
                                                    <li><a class="github" href="#"></a></li>
                                                    <li><a class="google-plus" href="#"></a></li>
                                                </ul>
                                                <!-- SOCIAL -->
                                                
                                            </div>
                                            <!-- .author-info -->
                                            
                                        </div>
                                        <!-- .author-bio --> 
                                        
                                    </aside>
                                    <!-- .about-author -->
                                    
                                        

                                </div>
                                <!-- .entry-content -->
                                  
                            
                                
                            </article>
                            <!-- .hentry -->
                        
                        
                            <!-- #comments -->
                            <div id="comments" class="comments-area">
                              
                              <h3 class="comments-title">3 Commentários</h3>
                              
                              <!-- .commentlist -->
                              <ol class="commentlist">
                                <li class="comment even thread-even depth-1">
                                  
                                  <!-- #comment-## -->
                                  <article class="comment">
                                    
                                    <!-- .comment-meta -->
                                    <header class="comment-meta comment-author vcard">
                                        <img alt="" src="../_complementos/images/team/01.jpg" class="avatar" height="75" width="75">
                                        <cite class="fn"><a href="#" rel="external nofollow" class="url">Lorem Lorem</a></cite>
                                        <span class="comment-date">15 de abril de 2018, às 16:16</span>
                                    </header>
                                    <!-- .comment-meta -->
                                    
                                    <!-- .comment-content -->
                                    <section class="comment-content comment">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, aut eveniet amet vel! Similique officia repellendus temporibus. Voluptatum tempore quasi repellendus, nostrum in adipisci dicta dignissimos sed veniam laboriosam nihil!</p>
                                    </section>
                                    <!-- .comment-content -->
                                    
                                    <!-- .reply --> 
                                    <div class="reply">
                                        <a class="comment-reply-link" href="#">Responder</a>
                                    </div>
                                    <!-- .reply --> 
                                    
                                  </article>
                                  <!-- #comment-## -->
                                  
                                  <!-- .comment depth-2 -->
                                  <ol class="children">
                                  
                                    <li class="comment odd alt depth-2 ">
                                      
                                      <!-- #comment-## -->
                                      <article class="comment">
                                      
                                        <!-- .comment-meta -->
                                        <header class="comment-meta vcard">
                                            <img alt="" src="../_complementos/images/team/02.jpg" class="avatar photo" height="75" width="75">
                                            <cite class="fn"><a href="#" rel="external nofollow" class="url">Ipsum</a></cite>
                                            <span class="comment-date">15 de abril de 2018, às 16:16</span>
                                        </header>
                                        <!-- .comment-meta -->
                                        
                                        <!-- .comment-content -->
                                        <section class="comment-content comment">
                                          <p>Lorem Lorem Ipsum</p>
                                        </section>
                                        <!-- .comment-content -->
                                        
                                        <!-- .reply --> 
                                        <div class="reply">
                                            <a class="comment-reply-link" href="#">Responder</a>
                                        </div>
                                        <!-- .reply -->  
                                        
                                      </article>
                                      <!-- #comment-## -->
                                      
                                      <!-- .comment depth-3 -->
                                      <ol class="children">
                                      
                                        <li class="comment even depth-3">
                                          <article class="comment">
                                            
                                            <!-- .comment-meta -->
                                            <header class="comment-meta vcard">
                                                <img alt="" src="../_complementos/images/team/03.jpg" class="avatar photo" height="75" width="75">
                                                <cite class="fn"><a href="#" rel="external nofollow" class="url">Joao</a></cite>
                                                <span class="comment-date">15 de abril de 2018, às 16:16</span>
                                            </header>
                                            <!-- .comment-meta -->
                                            
                                            
                                            <!-- .comment-content -->
                                            <section class="comment-content comment">
                                              <p>Lorem</p>
                                            </section>
                                            <!-- .comment-content -->
                                            
                                            <!-- .reply --> 
                                            <div class="reply">
                                                <a class="comment-reply-link" href="#">Responder</a>
                                            </div>
                                            <!-- .reply -->
                                             
                                          </article>
                                          <!-- #comment-## -->
                                          
                                        </li>
                                      </ol>
                                      <!-- .comment depth-3 -->
                                      
                                    </li>
                                  </ol>
                                  <!-- .comment depth-2 -->
                                  
                                </li>
                                <!-- .comment depth-1 -->
                                
                                
                                
                                
                              </ol>
                              <!-- .commentlist -->
                              
                              
                              <!-- #respond --> 
                              <div id="respond">
                              
                                <h3 id="reply-title">Deixe seu comentário <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancela resposta</a></small></h3>
                                
                                <!-- .commentform -->
                                <form action="#" method="post" id="commentform">
                                
                                  
                                  <p class="comment-form-comment">
                                    <textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>
                                  </p>
                                  
                                  <p class="form-submit">
                                    <input type="submit" name="submit" id="submit" class="button primary" value="Postar Commentário">
                                    <input type="hidden" name="comment_post_ID" value="16" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                  </p>
                                  
                                </form>
                                <!-- .commentform -->
                                
                              </div>
                              <!-- #respond --> 
                              
                            </div>
                            <!-- #comments -->
                            
                            
                            
               		</div>
                    <!-- layout-fixed -->
                    
                    
                    
                    
                
                	
                	
                
                </div>
                <!-- site-content -->
                
            </div>
            <!-- primary --> 
            
            
            
               
        
        
        
        
        </div>
        <!-- site-main -->
        
       

        
	</div>
		
		<footer  class="footer-copyright">
			<div class="container">
				
				
				<div class="foot-icons ">
					
		        	&copy; 2018 <a href="#">CopaTur</a>.

		        </div><!--/.foot-icons-->
				<div id="scroll-Top">
					<i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
				</div><!--/.scroll-Top-->
			</div><!-- /.container-->

		</footer>
		
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
		<script src="../_complementos/js/scri-pt.js"></script>
		<script src="../_complementos/js/custom.js"></script>
    </body>
</html>
