
<div class="wrapper">
    <section id="global-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption-content sec-title text-center white wow animated fadeInDown">
              <h2>GERENCIAR POSTS</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
    	<div class="inbox-head">
			<h3>Postagens</h3>
			<form action="#" method="post" enctype="multipart/form-data" class="pull-right position">
				<div class="input-append">
					<input type="text" class="sr-input" name="palavra-busca" placeholder="Pesquisar Postagens">
					<button class="btn sr-btn" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>

		</div>
    </section>

<div class="container">
<div class="row">
	<div class="lg-side " >
		
	  
	     <a href="administrativo.php?link=4"><button class="btn btn-primary pull-right" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add"><i class="fa fa-plus"></i> Adicionar Postagem</button></a>
		<div class="inbox-body">
			<div class="mail-option" style="overflow-x:auto;">
				<table class="table table-inbox table-hover table-responsive">				
					<thead>
						<tr class="unread">
							<th onclick="myFunction(this)" width=2% class="">Nº</th>
		                    <th width=16% class="">Título da Postagem</th>
		                    <th width=8% > Data</th>
		                    <th width=8%> Imagem</th>
		                    <th width=8%> Exibição</th>
		                    <th width=50%>Resumo</th>
		                    <th width=8%> </th>
						</tr>
					</thead>
					<tbody>
									
<?PHP


	if(empty($_GET['pg'])){}
	else{ 
	$pg =$_GET['pg'];
	if(!is_numeric($pg)){
		
		echo '<script language= "JavaScript">
						location.href="administrativo.php?link=6";
			</script>';
	}

	}


	if(isset($pg)){ $pg = $_GET['pg'];}else{ $pg = 1;}

	if(isset($_POST['palavra-busca'])){
		$quantidade = 10000;
	}else{
		$quantidade = 10;
	}


	$inicio = ($pg*$quantidade) - $quantidade;

	if(isset($_POST['palavra-busca'])){
		$busca = addslashes($_POST['palavra-busca']);
		$select = "SELECT * from tb_postagens WHERE titulo LIKE '%$busca%' ORDER BY id DESC LIMIT $inicio, $quantidade";	
	}else{
		$select = "SELECT * from tb_postagens ORDER BY id DESC LIMIT $inicio, $quantidade";
	}


	$contagem =$inicio + 1;
			
			try{
				$result = $conexao->prepare($select);			
				$result->execute();
				$contar = $result->rowCount();
				if($contar>0){
					while($mostra = $result->FETCH(PDO::FETCH_OBJ)){
						$url = "administrativo.php?link=1&id=".$mostra->id;
	?>           		

	                  <tr>
	                  	<td <?php echo "data-url='$url'" ?> ><H5><?php echo $contagem++;?></H5></td>
	                    <td <?php echo "data-url='$url'" ?> ><H5> <?php echo $mostra->titulo;?></H5> </td>
	                    <td <?php echo "data-url='$url'" ?> > <H5><?php $data=$mostra->data; $data = date('d/m/Y',strtotime($data)); echo $data;?></H5> </td>
	                    <td <?php echo "data-url='$url'" ?> ><img src="../_upload/postagens/<?php echo $mostra->imagem;?>" width="50"/></td>
	                    <td <?php echo "data-url='$url'" ?> ><H5><?php echo $mostra->exibir;?></H5></td>
	                    <td <?php echo "data-url='$url'" ?> > <H5><?php echo limitarTexto($mostra->descricao, $limite=200)?> </H5></td>
	                    <td class="td-actions">
	                    	<a href="administrativo.php?link=5&id=<?php echo $mostra->id;?>" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i></a>
	                    	<a href="administrativo.php?link=6&pg=<?php echo $pg;?>&delete=<?php echo $mostra->id;?>" class="btn btn-danger btn-sm" onClick="return confirm('Deseja realmente exluir o post?')" ><i class="fa fa-times"> </i></a>
	                    </td>
	                  </tr>
		<?php
						echo '<script>var id = "'. $mostra->id .'";</script>';
					}				
				}else{
					echo '<div class="alert alert-danger">
	                      <button type="button" class="close" data-dismiss="alert">×</button>
	                      <strong>Aviso!</strong> Não há post cadastrado em nosso banco de dados ou a página não existe.
	                </div>';
				}					
			}catch(PDOException $e){
					echo $e;
				}
		?>                  
                  
                
                </tbody>
              </table>  
            </div> 
            <!-- /widget-content --> 

<!-- inicio botoes -->

<style>
/* paginacao */

.paginas{width:100%;padding:10px 0;text-align:center;background:#fff;height:auto;margin:10px auto;}
.paginas a{width:auto;padding:4px 10px;background:#eee;color:#333;margin:0px 2.5px; }
.paginas a:hover{text-decoration:none;background:#00BA8B; color:#fff;}

<?php
	if(isset($_GET['pg'])){
		$num_pg = $_GET['pg'];	
	}else{$num_pg = 1;}
?>

.paginas a.ativo<?php echo $num_pg;?>{background:#00BA8B; color:#fff;}

</style>


<?php
if(isset($_POST['palavra-busca'])){
	$busca = addslashes($_POST['palavra-busca']);
	$sql = "SELECT * from tb_postagens WHERE titulo LIKE '%$busca%'";	
}else{
	$sql = "SELECT * from tb_postagens";
}
	
	try{
			$result = $conexao->prepare($sql);			
			$result->execute();
			$totalRegistros = $result->rowCount();
		}catch(PDOException $e){
			echo $e;
		}
		
		if($totalRegistros <=$quantidade){}
		else{
			$paginas = ceil($totalRegistros/$quantidade);
			if($pg > $paginas){
				echo '<script language= "JavaScript">
					location.href="administrativo.php?link=6";
					</script>';}
			$links = 5;	
			
			if(isset($i)){}
			else{$i = '1';}

?>

<div class="paginas">

	<a href="administrativo.php?link=6&pg=1">Primeira Página</a>
    
    <?php
		if(isset($_GET['pg'])){
			$num_pg = $_GET['pg'];	
		}
		
		for($i = $pg-$links; $i <= $pg-1; $i++){
			if($i<=0){}
			else{ 
	?>
     
    <a href="administrativo.php?link=6&pg=<?php echo $i;?>"  class="ativo<?php echo $i;?>"><?php echo $i;?></a>
         
<?php  }} ?>
    
    <a href="administrativo.php?link=6&pg=<?php echo $pg;?>" class="ativo<?php echo $i;?>"><?php echo $pg;?></a>

<?php
	for($i = $pg+1; $i <= $pg+$links; $i++){
		if($i>$paginas){}
		else{
?>
			
	<a href="administrativo.php?link=6&pg=<?php echo $i;?>" class="ativo<?php echo $i;?>"><?php echo $i;?></a>		
		
<?php
		}
	}
?>

<a href="administrativo.php?link=6&pg=<?php echo $paginas;?>">Última página</a>		

 
</div><!-- paginas -->





<?php
		}
?>

<!-- fim botoes paginacao -->            


          </div>
          <!-- /widget --> 
      		</div><!-- span 12 -->
            
            
    </div><!-- row -->        
     
      
          
        </div>
        <!-- /span6 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </section>
  <!-- /main-inner --> 
</div>
<!-- /main -->


