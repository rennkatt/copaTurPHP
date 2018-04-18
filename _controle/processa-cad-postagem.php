<?php
	  	if(isset($_POST['cadastrar'])){
			$titulo 		= trim(strip_tags($_POST['titulo']));
			$data 			= trim(strip_tags($_POST['data']));
			$cidade 		= trim(strip_tags($_POST['cidade']));
			$categoria 		= trim(strip_tags($_POST['categoria']));
			$fonte 			= trim(strip_tags($_POST['fonte']));
			$autor 			= $_POST['autor'];
			$descricao	 	= $_POST['descricao'];
			
			
			
			
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
			echo '<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						Selecione uma imagem e tente novamente!
					</div>';
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
					echo $msg[] = "<b>$name :</b> ".$errorMsg[$error];
				else if(!in_array($type, $permite))
					echo $msg[] = "<b>$name :</b> Erro imagem não suportada!";
				else if($size > $maxSize)
					echo $msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 5MB";
				else{
					
					if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){
						//$msg[] = "<b>$name :</b> Upload Realizado com Sucesso!";
					
			$insert = "INSERT into tb_postagens (titulo, data, imagem, cidade, descricao, categoria, autor, fonte_imagem) VALUES (:titulo, now(), :imagem, :cidade, :descricao, :categoria, :autor, :fonte)";
		
		try{
			$result = $conexao->prepare($insert);
			$result->bindParam(':titulo', $titulo, PDO::PARAM_STR);
			$result->bindParam(':imagem', $novoNome, PDO::PARAM_STR);
			$result->bindParam(':cidade', $cidade, PDO::PARAM_STR);
			$result->bindParam(':descricao', $descricao, PDO::PARAM_STR);
			$result->bindParam(':categoria', $categoria, PDO::PARAM_STR);
			$result->bindParam(':autor', $autor, PDO::PARAM_STR);
			$result->bindParam(':fonte', $fonte, PDO::PARAM_STR);
			$result->execute();
			$contar = $result->rowCount();
			if($contar>0){
				echo '<div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Sucesso!</strong> O post foi cadastrado.
                </div>';
			}else{
				echo '<div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">×</button>
                      <strong>Erro ao cadastrar!</strong> Não foi possível cadastrar o post.
                </div>';
			}			
		}catch(PDOException $e){
			echo $e;
		}	
						
						
						
						
						
							
					}else
						$msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro...";
				
				}
				
				foreach($msg as $pop)
				echo '';
					//echo $pop.'<br>';
			}
		}
			

			
		}
	 
	 
	 ?>