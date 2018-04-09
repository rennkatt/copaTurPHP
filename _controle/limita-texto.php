<?php
	function limitarTexto($texto, $limite){
		  $texto = strip_tags($texto);
		  $contador = strlen($texto);
		  if ( $contador >= $limite ) { 
		  	     
		    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
		    return $texto;
		  }
		  	else{
		    	return $texto;
		  }
	} 

?>