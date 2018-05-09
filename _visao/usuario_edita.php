<?php
ob_start();
session_start();
if(isset($_SESSION['email']) && (isset($_SESSION['senha']))){
	//header("Location: home.php");exit;
}
    include("../_controle/conecta.php");
    include_once("../_controle/seguranca.php"); 
	if($_SESSION['nivel']==2) {
		//header("Location: index.php");exit;
	}
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
 
		 <!-- Main jQuery -->
        <script src="../_complementos/js/jquery.js"></script>

        <!--bootstrap.min.js-->
        <script  src="../_complementos/js/bootstrap.min.js"></script>
    
        <script  src="../_complementos/js/validator.js"></script>

        <link href="../_complementos/lib/summernote/summernote.css" rel="stylesheet">
	<script src="../_complementos/lib/summernote/summernote.js"></script>

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
				
		<!--responsive.css-->
		<link rel="stylesheet" href="../_complementos/css/responsive.css" />

		 <link href="../_complementos/lib/metisMenu/metisMenu.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../_complementos/lib/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../_complementos/lib/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../_complementos/css/sb-admin-2.css" rel="stylesheet">
	
	

		<!-- Page-Level Demo Scripts - Tables - Use for reference -->
     <script>
		$(document).ready(function() {
		  $('#summernote').summernote();
		});
	</script>
        

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
		
		<div id="wrapper">

        <?php
        if($_SESSION['nivel']==1) {
        ?>
         <!-- Navigation -->
        <nav class=" border" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="administrativo.php">Painel Administrativo</a>
            </div>
            <!-- /.navbar-header -->

            <div class="sidebar" role="navigation">
                <div class="sidebar-nav">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Publicações<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="historia_gerencia.php">História</a>
                                </li>
                                <li>
                                    <a href="estadio_gerencia.php">Estádios</a>
                                </li>
                                <li>
                                    <a href="ponto_turistico_gerencia.php">Pontos Turísticos</a>
                                </li>
                                <li>
                                    <a href="hotel_gerencia.php">Hotéis</a>
                                </li>
                                <li>
                                    <a href="restaurante_gerencia.php">Restaurantes</a>
                                </li>
                                <li>
                                    <a href="comidas_gerencia.php">Comidas Típicas</a>
                                </li>
                                <li>
                                    <a href="artesanato_gerencia.php">Artesanato</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="usuarios_gerencia.php"><i class="fa fa-user fa-fw"></i> Usuários</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <?php
        }
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php include_once("../_controle/processa-edt-usuario.php"); ?>                  

                    <h3 class="page-header" style="text-align: left;" >Editar Usuário - <?php echo $categotia;?>                   
                    </h3>
                    <a href="usuarios_gerencia.php" class="btn btn-primary" style="float: right;">VOLTAR</a>                            
                    
                    <!-- Altera aqui -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                     <form id="edit-profile" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                     
                        <div class="row">
						<input class="hidden" id="autor" name="autor" value="<?php echo $_SESSION['nome']; ?>"></input>
                        
                        <div class="col-lg-6 pad10">                            
                                   <img src="../_upload/login/<?php echo isset( $imagem ) ? $imagem : 'default.png' ;?>" style="border-radius: 75%; width: 63px; height: 63px;"/>
                                   <br>       
                                   <br>                            
				                  <input type="file" multiple class="span6 fileinput" id="imagem" name="img[]">
                        </div>
                        
                        <div class=" col-lg-12 pad10">
                            <label class="control-label" for="username">Nome</label>
				                  <input type="text" id="nome" value="<?php echo $nome;?>" name="nome" placeholder="TITULO" class="form-control" required>
                        </div>
                        <div class=" col-lg-12 pad10">
                            <label class="control-label" for="username">Sobrenome</label>
				                    <input type="text" class="form-control" id="sobrenome" value="<?php echo $sobrenome;?>" name="sobrenome">
                        </div>

                        <div class=" col-lg-12 pad10">
                            <label class="control-label" for="username">Email</label>
				                    <input type="email" class="form-control" id="email" value="<?php echo $email;?>" name="email" required>
                        </div>

                         <div class=" col-lg-12 pad10">
                            <label class="control-label" for="username">Nova Senha</label>
				                    <input type="password" class="form-control" id="senha" value="<?php echo $senha;?>" name="senha" required>
                        </div>
                            
                        <div class="form-actions col-lg-12" style="margin-top: 50px">
							<input type="submit" name="atualizar" class="btn btn-success" value="ATUALIZAR">
							
						</div> <!-- altera aqui. -->

						</div>
                    </form>
					
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
          

		
 
		
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

		<!-- Metis Menu Plugin JavaScript -->
    <script src="../_complementos/lib/metisMenu/metisMenu.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../_complementos/lib/datatables/js/jquery.dataTables.js"></script>
    <script src="../_complementos/lib/datatables-plugins/dataTables.bootstrap.js"></script>
    <script src="../_complementos/lib/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../_complementos/js/sb-admin-2.js"></script>

    
    </body>
</html>
