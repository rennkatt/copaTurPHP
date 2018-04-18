<?php
	
	include_once("Usuario.php");
	include_once("UsuarioDAO.php");
    include_once("conecta.php");

	if(isset($_POST['registrar'])) {

		if (!empty($_POST['first_name']) and !empty($_POST['last_name']) and !empty($_POST['email']) and !empty($_POST['password_confirmation']) ) {

			$Usuario = new Usuario($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password_confirmation']);

			$UsuarioDAO = new UsuarioDAO($conexao);

			list($dados_retorno, $msg_retorno) = $UsuarioDAO->inserirUsuario($Usuario);

			if( $dados_retorno ){
				echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Operação realizada com sucesso!</strong> 
                 	  </div> ';

                header("Location: ../_visao/index.php"); 	 
                 
			} else {
				header("Location: ../_visao/home.php?link=2&erro_cod=1&erro_msg=". $msg_retorno );
			}

		} else {
			header("Location: ../_visao/home.php?link=2&erro_cod=2"); 	
		}
	}	

?>