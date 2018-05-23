<?php
 	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$msg = $_POST['mensagem'];
	 
	ini_set('display_errors', 1);
 
	error_reporting(E_ALL);

	$headers = "From: ". $nome;
	 
	$corpoemail = '<b>Fale Conosco - Fabricando a Web</b>
	             
	               Nome: '   .$nome.' /n
	               Email:'   .$email.'/n
	               Assunto:' .$assunto.' /n
	               Mensagem:'.$msg.' /n';
	 
	 
	 
	 
	if(mail("renatomoura557@yahoo.com.br", "Fale Conosco",$corpoemail,$headers)){
	 
	 
	       echo "<script>alert('Mensagem enviada com sucesso!');</script>"; 
	       header("Location: ../index.php");
	 
	} else{
	 
	      echo "<script>alert('Erro ao enviar, tente diretamente pelo email renatomoura557@yahoo.com.br');</script>";  
 	}
?>