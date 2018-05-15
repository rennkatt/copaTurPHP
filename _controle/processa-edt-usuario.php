<?php
if(!isset($_GET['id'])){ header("Location: ../_visao/index.php"); exit;}
if($_GET['id'] != $_SESSION['id']){ header("Location: ../_visao/index.php"); exit;}
		$id = $_GET['id'];
		$select = "SELECT *, CASE nivel WHEN 1 THEN 'Administrador' ELSE 'Comum' END AS categoria FROM login WHERE id=:id";
		$contagem =1;
		
		try{
			$result = $conexao->prepare($select);
			$result->bindParam(':id', $id, PDO::PARAM_INT);			
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
					$id = $mostra->id;
					$nome = $mostra->nome;
					$sobrenome	 = $mostra->sobrenome;
					$email = $mostra->email;
					$categotia = $mostra->categoria;
					$nivel = $mostra->nivel;
					$imagem = $mostra->imagem;
					$senha = $mostra->senha;
				}				
			}else{

				echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Aviso!</strong> Não há dados cadastrados com o id informado.
                </div>';exit;
			}
			
		}catch(PDOException $e){
			echo $e;
		}	

		$novoNome = $imagem;					
						
		// ATUALIZAR				
	  	if(isset($_POST['atualizar'])){
			$nome 		= trim(strip_tags($_POST['nome']));
			$sobrenome 			= trim(strip_tags($_POST['sobrenome']));
			$email 		= trim(strip_tags($_POST['email']));
			$senha 		= trim(strip_tags($_POST['senha']));
			
			if(!empty($_FILES['img']['name'])){
					
				
				//INFO IMAGEM
				$file 		= $_FILES['img'];
				$numFile	= count(array_filter($file['name']));
				
				//PASTA
				$folder		= '../_upload/login/';
				
				//REQUISITOS
				$permite 	= array('image/jpeg', 'image/png');
				$maxSize	= 1024 * 1024 * 5;
				
				//MENSAGENS
				$msg		= array();
				$errorMsg	= array(
					1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
					2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
					3 => 'o upload do arquivo foi feito parcialmente',
					4 => 'Não foi feito o upload do arquivo'
				);
		
				if($numFile <= 0){

					$novoNome = $imagem;
					$update = "UPDATE login SET nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha, imagem=:imagem  WHERE id=:id";
							
					try{
						$result = $conexao->prepare($update);
						$result->bindParam(':id', $id, PDO::PARAM_INT);
						$result->bindParam(':nome', $nome, PDO::PARAM_STR);
						$result->bindParam(':sobrenome', $sobrenome, PDO::PARAM_STR);
						$result->bindParam(':email', $email, PDO::PARAM_STR);
						$result->bindParam(':senha', $senha, PDO::PARAM_STR);
						$result->bindParam(':imagem', $novoNome, PDO::PARAM_STR);
						$result->execute();
						$contar = $result->rowCount();
						if($contar>0){

							if ( $id == $_SESSION['id'] ){
								$_SESSION['nome']	= $nome;
								$_SESSION['nivel']	= $nivel;
								$_SESSION['email']	= $email;
								$_SESSION['imagem']	= $imagem;
							}

							header('Refresh:0');

							echo '<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>Sucesso!</strong> O Usuário foi atualizado.
							</div>';
						}else{
							echo '<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>Erro ao Atualizar!</strong> Não foi possível atualizar o Usuário. Veja se foi alterado alguma coisa.
							</div>';
						}			
					}catch(PDOException $e){
						echo $e;
					}
				}
				else if( $numFile >=2 ){
					echo '<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								Você ultrapassou o limite de upload. Selecione apenas uma foto e tente novamente!
							</div>';
				}else{
					for($i = 0; $i < $numFile; $i++){
						$name 	= $file['name'][$i];
						$type	= $file['type'][$i];
						$size	= $file['size'][$i];
						$error	= $file['error'][$i];
						$tmp	= $file['tmp_name'][$i];
						
						$extensao = @end(explode('.', $name));
						//$novoNome = $id.".".$extensao;
						$novoNome = rand().".$extensao";
						
						if($error != 0)
							$msg[] = "<b>$name :</b> ".$errorMsg[$error];
						else if(!strstr('.jpg;.jpeg;.gif;.png', $extensao))
							$msg[] = "<b>$name :</b> imagem não suportada!";
						else if($size > $maxSize)
							$msg[] = "<b>$name :</b> imagem ultrapassa o limite de 5MB";
						else{
							
							if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
								//$msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";
								
								$arquivo = "../_upload/login/" .$imagem;
								//unlink($arquivo);
								
								$update = "UPDATE login SET nome=:nome, sobrenome=:sobrenome, email=:email, senha=:senha, imagem=:imagem WHERE id=:id";
								
							
								try{
									$result = $conexao->prepare($update);
									$result->bindParam(':id', $id, PDO::PARAM_INT);
									$result->bindParam(':nome', $nome, PDO::PARAM_STR);
									$result->bindParam(':sobrenome', $sobrenome, PDO::PARAM_STR);
									$result->bindParam(':email', $email, PDO::PARAM_STR);
									$result->bindParam(':senha', $senha, PDO::PARAM_STR);
									$result->bindParam(':imagem', $novoNome, PDO::PARAM_STR);
									$result->execute();
									$contar = $result->rowCount();
									if($contar>0){
										$_SESSION['nome']	= $nome;
										header('Refresh:0');
										echo '<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Sucesso!</strong> O Usuário foi atualizado.
										</div>';
									}else{
										echo '<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Erro ao Atualizar!</strong> Não foi possível atualizar o Usuário. Veja se foi alterado alguma coisa.
										</div>';
									}			
								}catch(PDOException $e){
									echo $e;
								}
								
							}else
								$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
						
							}
						
							foreach($msg as $pop)
							
							echo '<div class="alert alert-danger">
			                      <button type="button" class="close" data-dismiss="alert">×</button>
			                      <strong>Erro ao cadastrar! </strong>'.$pop.' - Não foi possível atualizar o usuário.
			                </div>';
					}
				}
						
			}else{ 	}


				
			
			
		}
		
		if ( isset( $_POST['usuario_admin'] ) ){
			$update = "UPDATE login SET nivel=1 WHERE id=:id";
							
			try{
				$result = $conexao->prepare($update);
				$result->bindParam(':id', $id, PDO::PARAM_INT);
				$result->execute();
				$contar = $result->rowCount();
				if($contar>0){
					echo '<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sucesso!</strong> O Usuário foi atualizado.
					</div>';
				}else{
					echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Erro ao Atualizar!</strong> Não foi possível atualizar o Usuário. Veja se foi alterado alguma coisa.
					</div>';
				}			
			}catch(PDOException $e){
				echo $e;
			}
		}

		if ( isset( $_POST['usuario_comum'] ) ){
			$update = "UPDATE login SET nivel=2 WHERE id=:id";
							
			try{
				$result = $conexao->prepare($update);
				$result->bindParam(':id', $id, PDO::PARAM_INT);
				$result->execute();
				$contar = $result->rowCount();
				if($contar>0){
					echo '<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Sucesso!</strong> O Usuário foi atualizado.
					</div>';
				}else{
					echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Erro ao Atualizar!</strong> Não foi possível atualizar o Usuário. Veja se foi alterado alguma coisa.
					</div>';
				}			
			}catch(PDOException $e){
				echo $e;
			}
		}

	 
	 ?>