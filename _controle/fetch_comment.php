<?php

//fetch_comment.php
if(!isset($_SESSION)){
  session_start();
}

if ( isset($_POST["id"]) ){
  $postagem_id = $_POST["id"];
}

include("conecta.php");

$connect = $conexao;

$query = "
SELECT COMMENT.comment_id, COMMENT.parent_comment_id, COMMENT.postagem_id, COMMENT.comment, COMMENT.comment_sender_name, DATE_FORMAT(COMMENT.date, '%d/%m/%Y 	%H:%i:%s') AS date, 
COMMENT.login_id, LOGIN.imagem FROM tbl_comment COMMENT
INNER JOIN login LOGIN ON LOGIN.id = COMMENT.login_id 
WHERE parent_comment_id = '0' AND COMMENT.postagem_id = " . $postagem_id . " 
ORDER BY date ASC
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $imagem = isset( $row["imagem"] ) ? $row["imagem"] : 'default.png';

 $botao_excluir = '';
 $botao_comentar = '';
 if ( isset($row['login_id']) and isset($_SESSION['nivel']) ){
   $botao_comentar = '<button type="button" class="btn btn-default reply resp" id="'.$row["comment_id"].'">Responder</button>';
   if(  $row['login_id'] == $_SESSION['id'] or $_SESSION['nivel'] == 1 ){
     $botao_excluir = '<button type="button" class="btn btn-default excluir del" id="del" nome="'. $row['comment_id'] .'" >Excluir</button>';
   }
 }


 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">
  <img src="../_upload/login/'. $imagem .'" style="border-radius: 100%; width: 30px; height: 30px;"/>
  <b>'.$row["comment_sender_name"].'</b> - <i class="data-postagem">'.$row["date"].'</i></div>
  <div class="panel-body">'.$row["comment"].'</div>
  <div class="panel-footer" style="background: #fff; padding: 10px;">
      ' . $botao_comentar . ' 
      ' . $botao_excluir . '
      </div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "SELECT COMMENT.comment_id, COMMENT.parent_comment_id, COMMENT.postagem_id, COMMENT.comment, COMMENT.comment_sender_name, DATE_FORMAT(COMMENT.date, '%d/%m/%Y 	%H:%i:%s') AS date, 
              COMMENT.login_id, LOGIN.imagem FROM tbl_comment COMMENT
              INNER JOIN login LOGIN ON LOGIN.id = COMMENT.login_id 
                WHERE parent_comment_id = '".$parent_id."' ORDER BY date ASC";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row) {
     $imagem = isset( $row["imagem"] ) ? $row["imagem"] : 'default.png';

      $botao_excluir = '';
      $botao_comentar = '';
      if ( isset($row['login_id']) and isset($_SESSION['nivel']) ){
        $botao_comentar = '<button type="button" class="btn btn-default reply resp" id="'.$row["comment_id"].'">Responder</button>';
        if(  $row['login_id'] == $_SESSION['id'] or $_SESSION['nivel'] == 1 ){
          $botao_excluir = '<button type="button" class="btn btn-default excluir del" id="del" nome="'. $row['comment_id'] .'" >Excluir</button>';
        }
      }


      $output .= '
      <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
        <div class="panel-heading">
        <img src="../_upload/login/'. $imagem .'" style="border-radius: 100%; width: 30px; height: 30px;"/>
        <b>'.$row["comment_sender_name"].'</b> - <i class="data-postagem">'.$row["date"].'</i></div>
        <div class="panel-body">'.$row["comment"].'</div>
        <div class="panel-footer" style="background: #fff; padding: 10px;">
            ' . $botao_comentar . ' 
            ' . $botao_excluir . '
            </div>
      </div>
      ';
      $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

/*
if(isset($_GET['delete'])){
    $id_delete = $_GET['delete'];
    
    
    if($nivelLogado = 1){
     
        $seleciona = "SELECT * from tbl_comment WHERE comment_id = :id_delete OR parent_comment_id = :id_delete_two";
        try{
          $result = $connect->prepare($seleciona);  
          $result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);   
          $result->bindParam('id_delete_two',$id_delete, PDO::PARAM_INT);   
          
          $result->execute();
          $contar = $result->rowCount();
          if($contar>0){
            $loop = $result->fetchAll();
            foreach ($loop as $exibir){
            }
            
                  
            // exclui o registo
            $seleciona = "DELETE from tbl_comment WHERE comment_id=:id_delete OR parent_comment_id = :id_delete_two";
            try{
              $result = $connect->prepare($seleciona);
              $result->bindParam('id_delete',$id_delete, PDO::PARAM_INT);       
              $result->bindParam('id_delete_two',$id_delete, PDO::PARAM_INT);   
              
              $result->execute();
              $contar = $result->rowCount();
              if($contar>0){
                echo '<div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong>Sucesso!</strong> O comentário foi excluído.
                    </div>';
              }else{
                echo '<div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">×</button>
                          <strong>Erro!</strong> Não foi possível excluir o comentário.
                    </div>';  
              }
              
              
              }catch (PDOWException $erro){ echo $erro;}
                }
                
              }catch (PDOWException $erro){ echo $erro;}
        }
      }
  */

?>