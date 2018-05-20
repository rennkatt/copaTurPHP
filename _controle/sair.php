<?php
session_start();
session_destroy();

//Remove todas as informações contidas na variaveis globais
unset($_SESSION['id'],			
$_SESSION['nome'], 		
$_SESSION['nivel'], 
$_SESSION['login'], 		
$_SESSION['senha']);

//redirecionar o usuário para a página de login
header("Location: ../_visao/index.php");
?>