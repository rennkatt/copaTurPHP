<?php

//fetch_comment.php

$connect = new PDO('mysql:host=localhost;dbname=copatur', 'root', '');

$id      = $_POST['id'];

$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' AND postagem_id = :id
ORDER BY comment_id DESC
";

$statement = $connect->prepare($query);
      $statement->bindParam(':id', $id, PDO::PARAM_STR);
     

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '

 <article class="comment">
                                    
    <!-- .comment-meta -->
    <header class="comment-meta comment-author vcard">
        <img alt="" src="../_complementos/images/team/01.jpg" class="avatar" height="75" width="75">
        <cite class="fn"><a href="#" rel="external nofollow" class="url">'. $row["comment_sender_name"] .'</a>
        <span class="comment-date"> Em '. $row["date"] .'</span></cite>
    </header>
    <section class="comment-content comment">
      <p>'. $row["comment"] .'</p>
    </section>
    
    <div class="reply">
        <button type="button" class="btn-sm resp" id="'. $row['comment_id'] .'" >Responder</button>
        <button type="button" class="btn-sm hidden excluir" id="'. $row['comment_id'] .'" >Excluir</button>
    </div>
    <!-- .reply --> 
    
  </article>
  
';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
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
  $marginleft = $marginleft + 50;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   
    <ol class="children" style="margin-left:'.$marginleft.'px">
                                      
    <li class="comment even depth-3">
      <article class="comment">
        
       
        <header class="comment-meta vcard">
            <img alt="" src="../_complementos/images/team/03.jpg" class="avatar photo" height="75" width="75">
            <cite class="fn"><a href="#" rel="external nofollow" class="url">'. $row["comment_sender_name"] .'</a>
            <span class="comment-date"> Em '. $row["date"] .'</span></cite>
        </header>
        
        <section class="comment-content comment">
          <p>'. $row["comment"] .'</p>
        </section>
        <!-- .comment-content -->
        
        <!-- .reply --> 
        <div class="reply">
            <button class="btn-sm  resp" id="'. $row["comment_id"].'" >Responder</button>
            <button type="button" class="btn-sm hidden excluir" id="'. $row['comment_id'] .'" >Excluir</button>
        </div>
        <!-- .reply -->
         
      </article>
      <!-- #comment-## -->
      
    </li>
  </ol>

   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 get_qtde($connect);
 return $output;
}



function get_qtde($connect)
{
$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' AND postagem_id = :id
ORDER BY comment_id DESC
";

$res = $connect->prepare($query);
      $res->bindParam(':id', $id, PDO::PARAM_STR);
     

$res->execute();
$res2 = $res->fetchAll();
$count = $res->rowCount();
$saida = ''. $count .' Comentários';

return $saida;

}
?>