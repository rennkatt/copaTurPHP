<?php 
  include_once("conecta.php");
 
 	if(isset($_GET['cidade'])){
		$cidade = $_GET['cidade'];
		echo $cidade;
	}

	$sql = "SELECT * from tb_postagens WHERE categoria='historia' AND cidade=:cidade LIMIT 1";
	echo $sql;
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
		          $autor = $exibe->autor;
		          $id = $exibe->id;
		    }
		}else{
			echo '<div class="alert alert-danger">
	                  <button type="button" class="close" data-dismiss="alert">×</button>
	                  <strong>Aviso!</strong> Não há post cadastrado em nosso banco de dados ou a página não existe.
	            </div>';
	            
		}
				
	}catch(PDOException $erro){ echo $erro;}


?>            
        
        