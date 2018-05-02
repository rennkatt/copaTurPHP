<?php

	 //excluir
	if(isset($_GET['delete'])){
		$id_delete = $_GET['delete'];
		
		
		if($nivelLogado == 1){
			if ($idLogado == $id_delete) {
				echo '<div class="alert alert-danger">
	                      <button type="button" class="close" data-dismiss="alert">×</button>
	                      <strong>Erro!</strong> Usuário ativo. Não foi possível excluir o usuário!
	                </div>';
			}else{

				$seleciona = "SELECT * from login WHERE id= :id_delete";
				try{
					$result = $conexao->prepare($seleciona);	
					$result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);		
					$result->execute();
					$contar = $result->rowCount();
					if($contar>0){
						$loop = $result->fetchAll();
						foreach ($loop as $exibir){
						}
						
									
						// exclui o registo
						$seleciona = "DELETE from login WHERE id=:id_delete";
						try{
							$result = $conexao->prepare($seleciona);
							$result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);				
							$result->execute();
							$contar = $result->rowCount();
							if($contar>0){
								header('Refresh:0');
								echo '<div class="alert alert-success">
		                      <button type="button" class="close" data-dismiss="alert">×</button>
		                      <strong>Sucesso!</strong> O usuario foi excluído.
		                </div>';
							}else{
								echo '<div class="alert alert-danger">
		                      <button type="button" class="close" data-dismiss="alert">×</button>
		                      <strong>Erro!</strong> Não foi possível excluir o usuário.
		                </div>';	
							}
							
							
							}catch (PDOWException $erro){ echo $erro;}
								}
								
							}catch (PDOWException $erro){ echo $erro;}
				}
				}else{
					echo '<div class="alert alert-danger">
			                      <button type="button" class="close" data-dismiss="alert">×</button>
			                      <strong>Erro!</strong> Seu nível de usuário não permite a exclusão de registro.
			                </div>';	
				
			}
	}

?> 