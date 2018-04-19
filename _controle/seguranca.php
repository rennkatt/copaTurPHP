<?php
ob_start();

if(!isset($_SESSION['email']) && (!isset($_SESSION['senha']))){
	header("Location: ../_visao/index.php");exit;
}
	include("../_controle/conecta.php");
		
	$usuarioLogado = $_SESSION['email'];
	$senhaLogado = $_SESSION['senha'];
	
// seleciona a usuario logado
		$selecionaLogado = "SELECT * from login WHERE email=:usuarioLogado AND senha=:senhaLogado";
		try{
			$result = $conexao->prepare($selecionaLogado);	
			$result->bindParam('usuarioLogado',$usuarioLogado, PDO::PARAM_STR);		
			$result->bindParam('senhaLogado',$senhaLogado, PDO::PARAM_STR);		
			$result->execute();
			$contar = $result->rowCount();	
			
			if($contar =1){
				$loop = $result->fetchAll();
				foreach ($loop as $show){
					$idLogado = $show['id'];
					$nomeLogado = $show['nome'];
					$emailLogado = $show['email'];
					$senhaLogado = $show['senha'];
					$nivelLogado = $show['nivel'];
				}
			}
			
			}catch (PDOWException $erro){ echo $erro;}
	
?>