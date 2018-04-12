<?php
	
	class UsuarioDAO{

		private $conexao;

		public function UsuarioDAO($conexao){
			$this->conexao = $conexao;
		}

		public function inserirUsuario($usuario){
			try{

				

				$sqlInserir = "Insert into login(nome, sobrenome, email, senha, nivel) values(:nome, :sobrenome, :email, :senha, :nivel)";

				$usuario->setNivel(2);

				$result = $this->conexao->prepare($sqlInserir);

				$result->bindValue(":nome", $usuario->getNome(), PDO::PARAM_STR);
				$result->bindValue(":sobrenome", $usuario->getSobrenome(), PDO::PARAM_STR);
				$result->bindValue(":email", $usuario->getEmail(), PDO::PARAM_STR);
				$result->bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);
				$result->bindValue(":nivel", $usuario->getNivel(), PDO::PARAM_STR);

				$result->execute();

				return true;

			} catch(PDOException $e){
				echo $e;
			}

			return false;
		}
	}
?>