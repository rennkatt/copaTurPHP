<?php 
  include_once("../_controle/conecta.php");
 
 	if(isset($_GET['id'])){
		$idUrl = $_GET['id'];
	}
	$sql = "SELECT * from tb_postagens WHERE exibir='Sim' AND id=:id LIMIT 1";
	try{
		$resultado = $conexao->prepare($sql);
		$resultado->bindParam('id',$idUrl, PDO::PARAM_INT);
		$resultado->execute();
		$contar = $resultado->rowCount();
		
		if($contar > 0 ){
			while($exibe = $resultado->fetch(PDO::FETCH_OBJ)){
      
          $titulo = $exibe->titulo;
          $descricao = $exibe->descricao;
          $data = $exibe->data;
          $data = date('d/m/Y',strtotime($data));
          $imagem = $exibe->imagem;
          $exibir = $exibe->exibir;
          $categoria = $exibe->categoria;
          $status  = $exibe->status;
          $autor = $exibe->autor;
          $id = $_GET['id'];
	      }
		}else{
			echo '<div class="alert alert-danger">
	                  <button type="button" class="close" data-dismiss="alert">×</button>
	                  <strong>Aviso!</strong> Não há post cadastrado em nosso banco de dados ou a página não existe.
	            </div>';
		}
				
	}catch(PDOException $erro){ echo $erro;}


?>            
        
        