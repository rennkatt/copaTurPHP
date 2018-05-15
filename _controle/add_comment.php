<?php

//add_comment.php
if ( !isset($_SESSION) ){
    session_start();
}

include("conecta.php");
$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<label class="text-danger">  Comentário é requirido</label>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name, postagem_id,  login_id) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name, :postagem_id, :login_id)
 ";
 $statement = $conexao->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':postagem_id' => $_POST["postagem_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name,
   ':login_id' => $_SESSION['id'] 
  )
 );
 $error = '<label class="text-success">  Comentário Adicionado</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>