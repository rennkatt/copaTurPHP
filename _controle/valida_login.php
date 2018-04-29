<?php

if(isset($_GET['acao'])){
	
	if(!isset($_POST['logar'])){
	
		$acao = $_GET['acao'];
		if($acao=='negado'){
			echo '<div class="alert alert-danger">
						  <button type="button" class="close" data-dismiss="alert">×</button>
						  <strong>Erro ao acessar!</strong> Você precisa estar logado p/ acessar o Sistema.
					</div>';	
		}
	}
}



if(isset($_POST['logar'])){
		// RECUPERAR DADOS FORM
		$email = trim(strip_tags($_POST['email']));
		$senha	 = trim(strip_tags($_POST['senha']));
		
		// SELECIONAR BANCO DE DADOS
		
		$select = "SELECT * from login WHERE BINARY email=:email AND BINARY senha=:senha ";
		
		try{
			$result = $conexao->prepare($select);
			$result->bindParam(':email', $email, PDO::PARAM_STR);
			$result->bindParam(':senha', $senha, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			
			if($contar>0){

				$email = $_POST['email'];
				$senha	 = $_POST['senha'];

				$_SESSION['email'] 		= $email;
				$_SESSION['senha']  	= $senha;

				$loop = $result->fetchAll();
					foreach ($loop as $exibir){
				}

				$_SESSION['id'] 	= $exibir['id'];
				$_SESSION['nome']	= $exibir['nome'];
				$_SESSION['nivel']	= $exibir['nivel'];
				$_SESSION['email']	= $exibir['email'];
				
				echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong>Logado com Sucesso!</strong> Redirecionando para o sistema.
                </div> ';
				
				echo "<script>history.go(-2)</script>";

			}else{
				echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Erro ao logar!</strong> Usuário ou senha incorretos.
                </div>';
			}
			
		}catch(PDOException $e){
			echo $e;
		}
		
		
		
	}// se clicar no botão entrar no sistema
	
?>