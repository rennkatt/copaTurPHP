<?php

//fetch_comment.php
include("conecta.php");

$id      = $_POST['id'];

$query = "
SELECT comment_id AS total FROM tbl_comment 
WHERE postagem_id = :id
";

$res = $conexao->prepare($query);
      $res->bindParam(':id', $id, PDO::PARAM_STR);
     

$res->execute();
$res2 = $res->fetchAll();
$count = $res->rowCount();

if ($count == 1) $saida = ''. $count .' Comentário';
else $saida = ''. $count .' Comentários';

echo $saida;


?>