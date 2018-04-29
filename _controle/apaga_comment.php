<?php

//fetch_comment.php

include("conecta.php");

$id      = $_POST['id'];

$query = "
UPDATE tbl_comment 
SET comment = ' Mensagem apagada pelo autor ou administrador' 
WHERE comment_id = :id
";

$statement = $conexao->prepare($query);
      $statement->bindParam(':id', $id, PDO::PARAM_STR);
     

$statement->execute();

?>