<?php
	try{
<<<<<<< HEAD
		//$conexao = new PDO('mysql:host=mysql472.umbler.com;dbname=copatur', 'copatur', 'katia123');
		$conexao = new PDO('mysql:host=localhost;dbname=copatur', 'root', '');
=======
		$conexao = new PDO('mysql:host=mysql472.umbler.com;dbname=copatur', 'copatur', 'katia123');
		// $conexao = new PDO('mysql:host=localhost;dbname=copatur', 'root', '');	
>>>>>>> 32b65642b388c2059f879b518a05c1e0821b345f
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
			echo 'ERROR: ' . $e->getMessage();
	}
?>
