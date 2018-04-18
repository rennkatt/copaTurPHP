<?php
	
	class UsuarioDAO{

		private $conexao;

		public function UsuarioDAO($conexao){
			$this->conexao = $conexao;
		}

		public function inserirUsuario($usuario){
			try{

				$busca_usuario = "SELECT COUNT(id) AS total FROM login WHERE email = :email";
				$p_busca_usuario = $this->conexao->prepare($busca_usuario);
				$p_busca_usuario->bindValue(":email", $usuario->getEmail());
				$p_busca_usuario->execute();
				$row = $p_busca_usuario->fetch(PDO::FETCH_ASSOC);

				if ( isset($row['total']) and $row['total'] > 0 ){
					return array(false, "Esse email já está existe no sistema!");
				}

				$sqlInserir = "INSERT INTO login(nome, sobrenome, email, senha, nivel) values(:nome, :sobrenome, :email, :senha, :nivel)";

				$usuario->setNivel(2);

				$result = $this->conexao->prepare($sqlInserir);

				$result->bindValue(":nome", $usuario->getNome(), PDO::PARAM_STR);
				$result->bindValue(":sobrenome", $usuario->getSobrenome(), PDO::PARAM_STR);
				$result->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
				$result->bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);
				$result->bindValue(":nivel", $usuario->getNivel(), PDO::PARAM_STR);

				$result->execute();

				return array( true, "");

			} catch(PDOException $e){
				echo $e;
			}

			return array( false, "" );
		}
	}
?>