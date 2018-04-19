<?php
//RECUPERA OS DADOS
if(!isset($_GET['id'])){ header("Location: ../_visao/index.php"); exit;}
		$id = $_GET['id'];
		$select = "SELECT * from tb_postagens WHERE id=:id";
		$contagem =1;
		
		try{
			$result = $conexao->prepare($select);
			$result->bindParam(':id', $id, PDO::PARAM_INT);			
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
					$idPost = $mostra->id;
					$titulo = $mostra->titulo;
					$data	 = $mostra->data;
					$imagem = $mostra->imagem;
					$cidade = $mostra->cidade;
					$descricao = $mostra->descricao;
					$categoria = $mostra->categoria;
					$fonte = $mostra->fonte_imagem;	
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
			$titulo 		= trim(strip_tags($_POST['titulo']));
			$data 			= trim(strip_tags($_POST['data']));
			$cidade 		= trim(strip_tags($_POST['cidade']));
			$categoria 		= trim(strip_tags($_POST['categoria']));
			$fonte 			= trim(strip_tags($_POST['fonte']));
			$descricao	 	= $_POST['descricao'];
			
			if(!empty($_FILES['img']['name'])){
					
				
				//INFO IMAGEM
				$file 		= $_FILES['img'];
				$numFile	= count(array_filter($file['name']));
				
				//PASTA
				$folder		= '../_upload/postagens/';
				
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
				$update = "UPDATE tb_postagens SET titulo=:titulo, imagem=:imagem, cidade=:cidade, descricao=:descricao, categoria=:categoria, fonte_imagem=:fonte, data=:data WHERE id=:id";
				
			
				try{
					$result = $conexao->prepare($update);
					$result->bindParam(':id', $id, PDO::PARAM_INT);
					$result->bindParam(':titulo', $titulo, PDO::PARAM_STR);
					$result->bindParam(':data', $data, PDO::PARAM_STR);
					$result->bindParam(':imagem', $novoNome, PDO::PARAM_STR);
					$result->bindParam(':cidade', $cidade, PDO::PARAM_STR);
					$result->bindParam(':descricao', $descricao, PDO::PARAM_STR);
					$result->bindParam(':categoria', $categoria, PDO::PARAM_STR);
					$result->bindParam(':fonte', $fonte, PDO::PARAM_STR);
					$result->execute();
					$contar = $result->rowCount();
					if($contar>0){
						echo '<div class="alert alert-success">
		                      <button type="button" class="close" data-dismiss="alert">×</button>
		                      <strong>Sucesso!</strong> O post foi atualizado.
		                </div>';
					}else{
						echo '<div class="alert alert-danger">
		                      <button type="button" class="close" data-dismiss="alert">×</button>
		                      <strong>Erro ao Atualizar!</strong> Não foi possível atualizar o post. Veja se foi alterado alguma coisa.
		                </div>';
					}			
				}catch(PDOException $e){
					echo $e;
				}
				}
				else if($numFile >=2){
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
								
								$arquivo = "../_upload/postagens/" .$imagem;
								unlink($arquivo);

								$update = "UPDATE tb_postagens SET titulo=:titulo, imagem=:imagem, cidade=:cidade, descricao=:descricao, categoria=:categoria, fonte_imagem=:fonte, data=:data WHERE id=:id";
				
			
								try{
									$result = $conexao->prepare($update);
									$result->bindParam(':id', $id, PDO::PARAM_INT);
									$result->bindParam(':titulo', $titulo, PDO::PARAM_STR);
									$result->bindParam(':data', $data, PDO::PARAM_STR);
									$result->bindParam(':imagem', $novoNome, PDO::PARAM_STR);
									$result->bindParam(':cidade', $cidade, PDO::PARAM_STR);
									$result->bindParam(':descricao', $descricao, PDO::PARAM_STR);
									$result->bindParam(':categoria', $categoria, PDO::PARAM_STR);
									$result->bindParam(':fonte', $fonte, PDO::PARAM_STR);
									$result->execute();
									$contar = $result->rowCount();
									if($contar>0){
										echo '<div class="alert alert-success">
						                      <button type="button" class="close" data-dismiss="alert">×</button>
						                      <strong>Sucesso!</strong> O post foi atualizado.
						                </div>';
									}else{
										echo '<div class="alert alert-danger">
						                      <button type="button" class="close" data-dismiss="alert">×</button>
						                      <strong>Erro ao cadastrar!</strong> Não foi possível atualizar o post.
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
			                      <strong>Erro ao cadastrar! </strong>'.$pop.' - Não foi possível atualizar o post.
			                </div>';
					}
				}
						
			}else{ 	}


				
			
			
		}
	 
	 
	 ?>