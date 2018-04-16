<?php include_once("../_controle/seguranca.php"); ?>

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

    <script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>

<script type="text/javascript">
	jQuery(function($){
	   $("#data").mask("99/99/9999",{placeholder:"dd/mm/yyyy"});
	});
</script>



<div class="wrapper">
    <section id="global-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption-content sec-title text-center white wow animated fadeInDown">
              <h2>CADASTRAR POSTAGEM</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<?php include_once("../_controle/processa-cad-postagem.php"); ?>
	
	<br>

	<div class="container">
	 	<div class="row">
	      	<div class="col-lg-10 col-lg-offset-1">
		        <div class="panel panel-default">
		         	<div class="panel-body">
			            <legend>NOVA POSTAGEM</legend>
			            <form id="edit-profile" class="form-horizontal" action="" method="post" enctype="multipart/form-data">
			              	<div class="row">
			              		<input class="hidden" id="autor" name="autor" value="<?php echo $_SESSION['nome']; ?>"></input>
				                <div class="col-lg-12">
				                	<label class="control-label" for="username">Título</label>
				                  <input type="text" id="titulo" value="" name="titulo" placeholder="TITULO" class="form-control">
				                </div><!-- col-lg-6 -->
				            	<br><br>
				            	<div class="col-lg-4 hidden">
				            		<label class="control-label" for="username">Data</label>
				                    <input type="text" class="form-control" id="data" value="" name="data">
				                </div><!-- col-lg-4 -->

				                <div class="col-lg-2">
				                	<label class="control-label" for="username">Exibir</label>
					                  <select class="form-control" id="exibir"  name="exibir">
						                    <option>Sim</option>
						                    <option>Não</option>
					                  </select>
			               		 </div><!-- col-lg-2 --> 

			               		  

				                <div class="col-lg-3">
				                	<label class="control-label" for="username">Categoria</label>
				                  <select class="form-control" id="categoria"  name="categoria">
					                    <option>PROJETO FASSA</option>
					                    <option>ENACTUS IFCE CRATO</option>
					                    <option>NOVOS PROJETOS</option>
					                    <option>OUTROS</option>
				                  </select>
				                </div><!-- col-lg-4 -->

				                <div class="col-lg-2  hidden">
				                	<label class="control-label" for="username">Status</label>
				                  <select class="form-control" id="status"  name="status">
				                    <option>Publicado</option>
				                    <option>Rascunho</option>
				                  </select>
			               		 </div><!-- col-lg-2 -->

				                <div class="col-lg-6">
				                  <br>
				                  <label class="control-label" for="image">Imagem Destacada</label>
				                  <input type="file" multiple class="span6 fileinput" id="imagem" name="img[]">
				                </div>

				                	<br>
			             	</div><!-- row -->
			              		<br>
			              		<div >
			              			<textarea class="span8 summernote" id="summernote" name="descricao" id="descricao" rows="10" placeholder="Escreva sua mensagem" style="height: 300px;"><br>Escreva sua mensagem aqui <br></textarea><br>
			              		</div>


			              		<div class="form-actions">
									<input type="submit" name="cadastrar" class="btn btn-primary btn-block" value="Salvar">
									<a href="administrativo.php?link=6" class="btn btn-block btn-warning" value="Cancelar" >Voltar Postagens</a>
								</div> <!-- /form-actions -->
						 
		            	</form>
		         	</div><!-- panel-body -->
		        </div><!-- panel -->
	      	</div><!-- col-lg-10 -->
	    </div><!-- row -->
	</div><!-- container -->
</div>
<!-- /wrapper -->



