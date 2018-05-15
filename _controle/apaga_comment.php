<?php

include("conecta.php");

$id      = $_POST['id'];



$query = "
SELECT * FROM tbl_comment 
WHERE comment_id = :id
";

$statement = $conexao->prepare($query);
$statement->bindParam(':id', $id, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row){
	$query = "
	DELETE FROM tbl_comment 
	WHERE comment_id = :id
	";

	$statement = $conexao->prepare($query);
	$statement->bindParam(':id', $id, PDO::PARAM_STR);
	$statement->execute();

	excluir_comment($conexao, $row["comment_id"]); 
}



function excluir_comment($conexao, $parent_id){
 
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $conexao->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 
 if($count > 0)
 {
  foreach($result as $row)
  {
	$query = "
	DELETE FROM tbl_comment 
	WHERE parent_comment_id = :id
	";

	$statement = $conexao->prepare($query);
	$statement->bindParam(':id', $parent_id, PDO::PARAM_STR);
	$statement->execute();

	excluir_comment($conexao, $row["comment_id"]); 
  }
 }
 
}

