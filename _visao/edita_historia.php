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
		<link rel="shortcut icon" type="image/icon" href="../_complementos/images/logo.png"/>
		
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
	                <div class="logo"><a class="navbar-brand page-scroll" href="#page-top" href="index.html">copa<span>Tur</span>
									</a>
								</div><!-- /.logo-->
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
		
		<div id="wrapper">
        
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
                                    <a href="gerencia_historia.php">História</a>
                                </li>
                                <li>
                                    <a href="gerencia_estadio.php">Estádios</a>
                                </li>
                                <li>
                                    <a href="gerencia_ponto_turistico.php">Pontos Turísticos</a>
                                </li>
                                <li>
                                    <a href="gerencia_hotel.php">Hotéis</a>
                                </li>
                                <li>
                                    <a href="gerencia_restaurante.php">Restaurantes</a>
                                </li>
                                <li>
                                    <a href="gerencia_comida.php">Comidas Típicas</a>
                                </li>
                                <li>
                                    <a href="gerencia_artesanato.php">Artesanato</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                         <li>
                            <a href="gerencia_usuarios.php"><i class="fa fa-user fa-fw"></i> Usuários</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" style="text-align: center;" >Editar História</h3>

					<?php include_once("../_controle/processa-edt-postagem.php"); ?>

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                     <form id="edit-profile" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						<div class="row">
						<input class="hidden" id="autor" name="autor" value="<?php echo $_SESSION['nome']; ?>"></input>
						
                        <div class=" col-lg-12 pad10">
                            <label class="control-label" for="username">Título</label>
				                  <input type="text" id="titulo" value="<?php echo $titulo;?>" name="titulo" placeholder="TITULO" class="form-control">
                        </div>
                        <div class=" col-lg-12 pad10 hidden">
                            <label class="control-label" for="username">Data</label>
				                    <input type="text" class="form-control" id="data" value="<?php echo $data;?>" name="data">
                        </div>
                        <div class=" col-lg-12 pad10 hidden">
                            <label class="control-label" for="categoria">Categoria</label>
				            <input type="text" class="form-control" id="categoria" value="historia" name="categoria">
                        </div>

                        <div class=" col-lg-12 pad10">
                            <label class="control-label" for="cidade">Cidade Sede</label>
			                  
				                  <select class="form-control" id="cidade"  name="cidade">
					                    <option selected><?php echo $cidade;?></option>
					                    <option>Moscow</option>
					                    <option>Kazan</option>
					                    
				                  </select>
                        </div>
                        <div class=" col-lg-12 pad10">
                            <label>Imagem Destacada</label>
				                  <input type="file" multiple class="span6 fileinput" id="imagem" name="img[]">
				                   <img src="../_upload/postagens/<?php echo $novoNome;?>" width="200px"/>
                        </div>
                        <div class=" col-lg-12 pad10">
                            
                            <textarea class=" summernote" id="summernote" name="descricao" id="descricao" rows="10" placeholder="Escreva sua mensagem" ><?php echo $descricao;?></textarea>
                        </div>
                        
                        <div class="form-actions col-lg-12">
							
							<input type="submit" name="atualizar" class="btn btn-primary btn-block" value="atualizar">
							<a href="gerencia_historia.php" class="btn btn-block btn-warning" value="Cancelar" >VOLTAR</a>
							<a href="gerencia_historia.php?delete=<?php echo $id;?>" class="btn btn-danger btn-block" onClick="return confirm('Deseja realmente exluir o post?')" >EXCLUIR PUBLICAÇÃO</a>
						</div> <!-- /form-actions -->

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
