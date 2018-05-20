<?php
	try{
		// $conexao = new PDO('mysql:host=mysql472.umbler.com;dbname=copatur', 'copatur', 'katia123');
		$conexao = new PDO('mysql:host=localhost;dbname=copatur', 'root', '');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
			echo 'ERROR: ' . $e->getMessage();
	}
?>
