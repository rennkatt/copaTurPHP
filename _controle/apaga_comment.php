<?php

//fetch_comment.php

include("conecta.php");

$id      = $_POST['id'];

$query = "
DELETE FROM tbl_comment 
WHERE comment_id = :id OR parent_comment_id = :parent
";

$statement = $conexao->prepare($query);
      $statement->bindParam(':id', $id, PDO::PARAM_STR);
      $statement->bindParam(':parent', $id, PDO::PARAM_STR);
      
     

$statement->execute();

?>