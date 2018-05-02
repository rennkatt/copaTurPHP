<?php

		if(isset($_GET['alteraNivel'])){
		$id_edita = $_GET['alteraNivel'];
		
		
		if($nivelLogado == 1){
			if ($idLogado == $id_edita) {
				echo '<div class="alert alert-danger">
	                      <button type="button" class="close" data-dismiss="alert">×</button>
	                      <strong>Erro!</strong> Usuário ativo. Não foi possível excluir o usuário!
	                </div>';
			}else{

				$seleciona = "SELECT * from login WHERE id= :id_edita";
				try{
					$result = $conexao->prepare($seleciona);	
					$result->bindParam('id_edita',$id_edita, PDO::PARAM_INT);		
					$result->execute();
					$contar = $result->rowCount();
					if($contar>0){
						while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
							$nivel = $mostra->nivel;
							
						}
						
						if ($nivel == '1') {
							$nivelEdita = '2';
						} else {
							$nivelEdita = '1';
						}

						$update = "UPDATE login SET nivel=:nivel WHERE id=:id";

						try{
							$result = $conexao->prepare($update);
							$result->bindParam(':id', $id_edita, PDO::PARAM_INT);
							$result->bindParam(':nivel', $nivelEdita, PDO::PARAM_INT);
							$result->execute();
							$contar = $result->rowCount();
							if($contar>0){
								
								echo '<div class="alert alert-success">
				                      <button type="button" class="close" data-dismiss="alert">×</button>
				                      <strong>Sucesso!</strong> O nível do usuario foi atualizado.
				                </div>';
							}else{
								echo '<div class="alert alert-danger">
				                      <button type="button" class="close" data-dismiss="alert">×</button>
				                      <strong>Erro ao cadastrar!</strong> Não foi possível atualizar o nível do usuário.
				                </div>';
							}			
						}catch(PDOException $e){
							echo $e;
						}
					}

						
				}catch(PDOException $e){
							echo $e;}
			}
				}else{
					echo '<div class="alert alert-danger">
			                      <button type="button" class="close" data-dismiss="alert">×</button>
			                      <strong>Erro!</strong> Seu nível de usuário não permite a exclusão de registro.
			                </div>';	
				
		}
	}
		
	 
	 ?>