<?php

if(isset($_SESSION['usuario']) && (isset($_SESSION['senha']))){
	header("Location: index.php");exit;
}
	include("../_controle/conecta.php");
?>

	<div class="">
		
		<section id="login" class="login">
			<div class="container">
		    	<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<?php include_once("../_controle/valida_login.php");
							  include_once("../_controle/CadUsuario.php");			
							
							  	// Mostra msg de erro
								if ( isset($_GET['erro_cod']) ){
									$erro_cod = $_GET['erro_cod'];
									$erro_msg = $_GET['erro_msg'];
									
									if ( !isset($erro_msg) ){
										$erro_msg = "A operação não pôde ser realizada!";
									}

									switch($erro_cod){
										case 1:
											echo '<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>'. $erro_msg .'</strong> 
											</div> ';	
											break;
										case 2:
											echo '<div class="alert alert-warning">
											<button type="button" class="close" data-dismiss="alert">×</button>
											<strong>Preencha as informações obrigatórias!</strong> 
											</div> ';		
											break;
									}
												
								}
							  
						?>
						<div class="panel panel-login">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-6">
										<a href="#" class="active" id="login-form-link">Entrar</a>
									</div>
									<div class="col-xs-6">
										<a href="#" id="register-form-link">Registrar</a>
									</div>
								</div>
								<hr>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
										<form data-toggle="validator" id="login-form" action="#" method="post" enctype="multipart/form-data" role="form" style="">
											<div class="form-group">
												<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-mail" value="" required>
												<div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<input type="password" name="senha" id="senha" tabindex="2" class="form-control" placeholder="Senha" required>
												<div class="help-block with-errors"></div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6 col-sm-offset-3">
														<input type="submit" name="logar" id="logar" tabindex="4" class="form-control btn btn-login" value="Entrar">
													</div>
												</div>
											</div>
											
										</form>
										<form data-toggle="validator" id="register-form" action="#" method="post" enctype="multipart/form-data" role="form" style="display: none;">
											<div class="row">
												<div class="col-xs-12 col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label required" for="email">Nome<sup style="color:red">*</sup></label>
								                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Digite seu Nome" tabindex="1" required>
								                        <div class="help-block with-errors"></div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label required" for="email">Sobrenome<sup style="color:red">*</sup></label>
														<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Digite seu Sobrenome" tabindex="2" required>
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label required" for="email">Email<sup style="color:red">*</sup></label>
												<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Digite seu Endereço de Email"  tabindex="3" required>
												<div class="help-block with-errors"></div>
											</div>
											<div class="row">
												<div class="col-xs-12 col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label required" for="senha">Senha<sup style="color:red">*</sup></label>
														<input type="password" name="password" id="input_password" class="form-control input-lg" placeholder="Digite sua Senha" data-minlength="6" tabindex="4" required>
														<div class="help-block">Mínimo de 6 caracteres</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-6">
													<div class="form-group">
														<label class="control-label required" for="email">Confirmação da Senha<sup style="color:red">*</sup></label>
														<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirme sua senha" data-match="#input_password" data-match-error="As senhas estão diferentes" tabindex="5" required>
														<div class="help-block with-errors"></div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6 col-sm-offset-3">
														<input type="submit" name="registrar" id="registrar" class="form-control btn btn-register" value="Registrar" tabindex="6">
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>			

	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>

<script type="text/javascript">
	$(function() {

	    $('#login-form-link').click(function(e) {
	        $("#login-form").delay(100).fadeIn(100);
	        $("#register-form").fadeOut(100);
	        $('#register-form-link').removeClass('active');
	        $(this).addClass('active');
	        e.preventDefault();
	    });
	    $('#register-form-link').click(function(e) {
	        $("#register-form").delay(100).fadeIn(100);
	        $("#login-form").fadeOut(100);
	        $('#login-form-link').removeClass('active');
	        $(this).addClass('active');
	        e.preventDefault();
	    });

	});

	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'fa fa-check-square-o'
                },
                off: {
                    icon: 'fa fa-square-o'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});



		
</script> 	
	