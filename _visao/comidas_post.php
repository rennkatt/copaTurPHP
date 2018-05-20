<?php 
  include_once("../_controle/conecta.php");
 
 	if(isset($_GET['cidade'])){
		$cidade = $_GET['cidade'];
		
	}

	$sql = "SELECT POSTAGEM.*, LOGIN.nome, LOGIN.imagem, .LOGIN.sobre, LOGIN.link_fb, LOGIN.link_insta, 
	LOGIN.link_tw, LOGIN.link_gh, LOGIN.link_google from tb_postagens POSTAGEM 
	INNER JOIN login LOGIN ON LOGIN.id = POSTAGEM.login_id WHERE categoria='comidas' AND cidade=:cidade LIMIT 1";
			//Edita aqui a categoria...
	
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->bindParam(':cidade', $cidade, PDO::PARAM_STR);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
      
		          $titulo = $exibe->titulo;
		          $descricao = $exibe->descricao;
		          $data = $exibe->data;
		          $data = date('d/m/Y',strtotime($data));
		          $imagem = $exibe->imagem;
		          $cidade = $exibe->cidade;
		          $categoria = $exibe->categoria;
		          $fonte  = $exibe->fonte_imagem;
				  $autor = $exibe->nome;
		          $imagem = $exibe->imagem;
		          $sobre = $exibe->sobre;
		          $link_fb = $exibe->link_fb;
		          $link_insta = $exibe->link_insta;
		          $link_tw = $exibe->link_tw;
		          $link_gh = $exibe->link_gh;
		          $link_google = $exibe->link_google;
		          $id = $exibe->id;
		    }
		}else{
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						A postagem não existe!
					</div>';
	            
		}
				
	}catch(PDOException $erro){ echo $erro;}


?>            
        
