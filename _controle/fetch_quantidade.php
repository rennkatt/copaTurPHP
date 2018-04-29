<?php

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=copatur', 'root', '');

$id      = $_POST['id'];
     
$query = "
SELECT * FROM tbl_comment 
WHERE postagem_id = :id
ORDER BY comment_id DESC
";

$res = $connect->prepare($query);
      $res->bindParam(':id', $id, PDO::PARAM_STR);
     

$res->execute();
$res2 = $res->fetchAll();
$count = $res->rowCount();

if ($count == 1) $saida = ''. $count .' Comentário';
else $saida = ''. $count .' Comentários';

echo $saida;


?>