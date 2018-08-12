<?php
		$conexao = new PDO('mysql:host=mysql942.umbler.com;dbname=copatur.com', 'copatur.com', 'katia123');
		//$conexao = new PDO('mysql:host=localhost;dbname=copatur', 'root', '');
		$conexao ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
