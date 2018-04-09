<?php include_once("../_controle/seguranca.php"); 
	 
	  include("../_controle/limita-texto.php");
?>

<script src="../_complementos/js/maps.js"></script>

<div class="wrapper">
    <section id="global-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption-content sec-title text-center white wow animated fadeInDown">
              <h2>GERENCIAR USUÁRIOS</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section>
    	<div class="inbox-head">
			<h3>Usuários</h3>
			<form action="#" method="post" enctype="multipart/form-data" class="pull-right position">
				<div class="input-append">
					<input type="text" class="sr-input" name="palavra-busca" placeholder="Pesquisar Pontos">
					<button class="btn sr-btn" type="submit"><i class="fa fa-search"></i></button>
				</div>
			</form>

		</div>
    </section>
    <?php 
    	 include_once("../_controle/excluir-usuario.php"); 
    	  include_once("../_controle/processa-edt-usuario.php"); 
    ?>
    <div class="container">
		<div class="row no-gutters">
		  <div class="col-12 col-sm-6 col-md-8">

		  </div>
		  	<div class="lg-side " >
		  		<div class="inbox-body">
		  			<div class="mail-option" style="overflow-x:auto;">
		  				<table class="table table-inbox table-hover table-responsive">
		  					<thead>
								<tr class="unread">
									<th onclick="myFunction(this)" width=5% class="">Nº</th>
				                    <th width=15% class="">Nome</th>
				                    <th width=20% > Endereço</th>
				                    <th width=12%> Cidade</th>
				                    <th width=8%> Estado</th>
				                    <th width=10%> Telefone</th>
				                    <th width=10%> Nível de Acesso</th>
				                    <th width=15%> </th>
								</tr>
							</thead>
							<tbody>
								<?php
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
										$select = "SELECT * from login WHERE nome LIKE '%$busca%' ORDER BY nome LIMIT $inicio, $quantidade";	
									}else{
										$select = "SELECT * from login ORDER BY nome LIMIT $inicio, $quantidade";
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
				                    <td <?php echo "data-url='$url'" ?> ><H5> <?php echo $mostra->nome;?></H5> </td>
				                    <td <?php echo "data-url='$url'" ?> > <H5><?php echo limitarTexto($mostra->endereco, $limite=
				                    	200)?> </H5></td>
				                    <td <?php echo "data-url='$url'" ?> ><H5> <?php echo $mostra->cidade;?></H5> </td>
				                    <td <?php echo "data-url='$url'" ?> ><H5> <?php echo $mostra->estado;?></H5> </td>
				                    <td <?php echo "data-url='$url'" ?> ><H5> <?php echo $mostra->telefone;?></H5> </td>
				                    <td <?php echo "data-url='$url'" ?> ><H5> <?php 
				                    		if ($mostra->nivel == 1) {
				                    			echo "Administrador";
				                    		} else {echo "Usuário Padrão";}

				                    ?></H5> </td>	
				                    <td class="td-actions">
				                    	<a href="administrativo.php?link=10&pg=<?php echo $pg;?>&atualiza=<?php echo $mostra->id;?>" class="btn btn-success btn-sm" onClick="return confirm('Deseja realmente alterar o nível de acesso?')"><i class="fa fa-pencil-square-o" ></i> Alterar nível </a>
				                    	<a href="administrativo.php?link=10&pg=<?php echo $pg;?>&delete=<?php echo $mostra->id;?>" class="btn btn-danger btn-sm" onClick="return confirm('Deseja realmente exluir o post?')" ><i class="fa fa-times"> </i></a>
				                    </td>
				                  </tr>
				                  <?php


								    echo '<script>var id = "'. $mostra->id .'";</script>';

								}				
							}else{
								echo '<div class="alert alert-danger">
				                      <button type="button" class="close" data-dismiss="alert">×</button>
				                      <strong>Aviso!</strong> Não há usuario em nosso banco de dados ou a página não existe.
				                </div>';
							}
							
						}catch(PDOException $e){
							echo $e;
						}
				?>            
							</tbody>	
		  				</table>  	
		  			</div>
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


		  		</div>

		  	</div>	
		  <div class="col-6 col-md-4">
		  	
		  </div>
		</div>
	</div>
</div>

