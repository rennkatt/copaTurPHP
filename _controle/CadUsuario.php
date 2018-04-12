<?php
	
	include_once("Usuario.php");
	include_once("UsuarioDAO.php");
    include_once("conecta.php");

	if(isset($_POST['registrar'])) {

		if (!empty($_POST['first_name']) and !empty($_POST['last_name']) and !empty($_POST['email']) and !empty($_POST['password_confirmation']) ) {

			$Usuario = new Usuario($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password_confirmation']);

			$UsuarioDAO = new UsuarioDAO($conexao);

			if($UsuarioDAO->inserirUsuario($Usuario)){
				echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Operação realizada com sucesso!</strong> 
                 	  </div> ';

                header("Location: ../_visao/index.php"); 	 
                 
			} else {				
				 header("Location: ../_visao/home.php?link=2&erro_cod=1"); 	 
			}

		} else {
			header("Location: ../_visao/home.php?link=2&erro_cod=2"); 	 			
		}	
	}	

?>