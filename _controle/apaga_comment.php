<?php

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=copatur', 'root', '');

$id      = $_POST['id'];

$query = "
UPDATE tbl_comment 
SET comment = ' Mensagem apagada pelo autor ou administrador' 
WHERE comment_id = :id
";

$statement = $connect->prepare($query);
      $statement->bindParam(':id', $id, PDO::PARAM_STR);
     

$statement->execute();

?>