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
                    	
                        <h1>Pontos Turísticos de <span><?php echo $_GET['cidade']?></span></h1>
                       		<ol class="breadcrumb">
						  <li><a href="index.php">Home</a></li>
						  <li><a href="<?php  
								switch ($_GET['cidade']) {
								    case 'Kazan';
								    case 'kazan':
								        echo 'kazan.php';
								        break;
								    case 'Moscow';
								    case 'moscow':
								        echo 'moscow.php';
								        break;
								    case 'Kaliningrad';
								    case 'kaliningrad':
								        echo 'kaliningrad.php';
								        break;
								    case 'Nizhny Novgorod';
								    case 'nizhny novgorod':
								        echo 'nizhny_novgorod.php';
								        break;
								    case 'Rostov On Don';
								    case 'rostov on don':
								        echo 'rostov_on_don.php';
								        break;
								    case 'Saint Petersburg';
								    case 'saint petersburg':
								        echo 'saint_petersburg.php';
								        break;
								    case 'Samara';
								    case 'samara':
								        echo 'samara.php';
								        break;
								    case 'Saransk';
								    case 'saransk':
								        echo 'saransk.php';
								        break;
								    case 'Sochi';
								    case 'sochi':
								        echo 'sochi.php';
								        break;
								    case 'Volgograd';
								    case 'volgograd':
								        echo 'volgograd.php';
								        break;
								    case 'Yekaterinburg';
								    case 'yekaterinburg':
								        echo 'yekaterinburg.php';
								        break;
								    default:
								    	header("Location: ../_visao/index.php");
								    	break;

								}
							?>" style="text-transform: capitalize"><?php echo $_GET['cidade']?></a></li>
						  <li class="active">Pontos Turísticos</li>
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
                                    <?php 
			                    		include("ponto_turistico_post.php"); 
			                    				//edita aqui...
			                            if($contar > 0 ){
			                        ?>
                                    
                                    <!-- .entry-title -->
                                    <h1 class="entry-title hidden"><?php echo $titulo;?></h1>
                                    
                                </header>
                                <!-- .entry-header -->
                                
                                <!-- .featured-image -->
                                <div class="featured-image">
                                    <img src="../_upload/postagens/<?php echo $imagem;?>" alt="blog-image">
                                    <cite>Fonte da imagem: <a href="http://<?php echo $fonte;?>" title="test link">Clique Aqui...</a></cite>
                                </div>
                                <!-- .featured-image -->
                                                                
                                
                                
                                <!-- .entry-content -->
                                <div class="entry-content">
                                    <?php echo ($descricao)?>
                                    
                                     <!-- .post-tags -->
                                     <div class="post-tags tagcloud">
                                        <a href="artesanato.php?cidade=<?php echo ($cidade)?>" rel="tag">Artesanato</a>
                                        <a href="hotel.php?cidade=<?php echo ($cidade)?>" rel="tag">Hotéis</a>
                                        <a href="restaurante.php?cidade=<?php echo ($cidade)?>" rel="tag">Restaurantes</a>
                                        <a href="comidas.php?cidade=<?php echo ($cidade)?>" rel="tag">Comidas Típicas</a>
                                        <a href="estadio.php?cidade=<?php echo ($cidade)?>" rel="tag">Estádios</a>
                                        <a href="historia.php?cidade=<?php echo ($cidade)?>" rel="tag">História</a>
                                     </div>
                                     <!-- .post-tags -->
                                    
                                     
                                     <!-- .share-links -->
                                     <div class="share-links">
                                        
                                        <h3>COMPARTILHE ESTA POSTAGEM</h3>
                                        
                                        <div class="share-links-wrap">
                                                                        
                                            <a rel="nofollow" target="_blank" href="mailto:?subject=Eu quero que veja essa postagem&amp;body=Olha esta postagem : Pontos Turísticos de <?php echo ($cidade)?> - http://copatur-com-br.umbler.net/_visao/ponto_turistico.php?cidade=<?php echo ($cidade)?>" title="Mande esta postagem por e-mail"><i class="pw-icon-mail"></i></a>
                                            
                                            <a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http://copatur-com-br.umbler.net/_visao/ponto_turistico.php?cidade=<?php echo ($cidade)?>" title="Compartilhe esta postagem no Google+"><i class="pw-icon-gplus"></i></a>
                                            
                                            <a rel="nofollow" target="_blank" href="http://twitter.com/home?status=http://copatur-com-br.umbler.net/_visao/ponto_turistico.php?cidade=<?php echo ($cidade)?>" title="Compartilhe esta postagem no Twitter"><i class="pw-icon-twitter"></i></a>
                                              
                                            <a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http://copatur-com-br.umbler.net/_visao/ponto_turistico.php?cidade=<?php echo ($cidade)?>" title="Compartilhe esta postagem no Facebook"><i class="pw-icon-facebook"></i></a>

                                            <!-- Atualiza aqui tbm. -->
                                        
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
                                                <a href="#"><img alt="Johnny Doe" src="../_complementos/images/team/02.jpg" class="avatar"></a>												
                                            </div>
                                            <!-- .author-img -->
                                            
                                            <!-- .author-info -->
                                            <div class="author-info">
                                                <h4 class="author-name"><?php echo ($autor)?></h4>
                                                <p>Sobre o autor</p>
                                                
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
                            <!-- #comments -->
                            <div id="comments" class="comments-area">
                            	
                              
                              <h3 class="comments-title" id="comments-title"></h3>
                              
                              <!-- .commentlist -->
                              <div id="display_comment"></div>
                              <!-- .commentlist -->
                              
                              
                              <!-- #respond --> 
                              <div id="respond"> 
                              
                                <h3 id="reply-title">Deixe seu comentário <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancela resposta</a></small></h3>
                                
                                <!-- .commentform -->
                                <form action="#" method="post" id="comment_form">
                                
                                  <input type="text" name="comment_name" id="comment_name" class="form-control hidden" value="<?php echo $_SESSION['nome']; ?>" placeholder="Enter Name" />

                                  <input type="text" name="postagem_id" id="postagem_id" class="form-control hidden" value="<?php echo ($id)?>"  />

                                  <p class="comment-form-comment">
                                    <textarea id="comment_content" name="comment_content" rows="5" placeholder="Entre com seu comentário" 
                                    <?php if(!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){ echo 'class =hidden';}
                                    ?> aria-required="true"></textarea>
                                  </p>
                                  
                                  <p class="form-submit">
                                    <input type="hidden" name="comment_id" id="comment_id" value="0"/>
     								<input type="submit" name="submit" id="submit" class="btn button primary <?php if(!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){ echo ' hidden';}
                                    ?> " value="Postar Comentário" /><span id="comment_message"></span>
                                  </p>
                                  
                                </form>
                                <!-- .commentform -->
                                
                              </div>
                              <!-- #respond --> 
								

				                <?php if(!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){ ?> 
				                <h3><center><a type="button" id="comment_content" name="comment_content" href="home.php?link=2" class="btn button primary external">Entre para comentar!</a></center></h3>
				                <?php } ?>
                             
                            <!-- #comments -->
                            <!-- #comments -->
                            
                            
                            
               		</div>
                    <!-- layout-fixed -->
                    
                    
                    
                    
                
                	<?php } ?> 
                	
                
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
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"../_controle/add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
     load_qtde();
    }
   }
  })
 });

 load_comment();
 load_qtde();

 function load_comment()
 {
  $.ajax({
   url:"../_controle/fetch_comment.php",
   method:"POST",
   data: 'id='+ $('#postagem_id').val(),
   success:function(data)
   {
    $('#display_comment').html(data);

   }
  })
 }

  function load_qtde()
 {
  $.ajax({
   url:"../_controle/fetch_quantidade.php",
   method:"POST",
    data: 'id='+ $('#postagem_id').val(),
   success:function(data)
   {
    $('#comments-title').html(data);

   }
  })
 }

 $(document).on('click', '.resp', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_content').focus();
 });

 $(document).on('click', '.excluir', function(){
  var comment_id = $(this).attr("id");

  $.ajax({
   url:"../_controle/apaga_comment.php",
   method:"POST",
   data: 'id='+ comment_id,
   success:function(data)
   {
     load_comment();

   }
  })
  	
 });
 
});
</script>
