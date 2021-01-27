<?php 

include("con_db.php");



if (isset($_POST['register'])) {
    if (strlen($_POST['pregunta1']) >= 1 && strlen($_POST['pregunta2']) >= 1 && strlen($_POST['pregunta3']) >= 1 && strlen($_POST['pregunta4']) >= 1 && strlen($_POST['pregunta5']) >= 1 && strlen($_POST['pregunta6']) >= 1) {
		
		$pregunta1 = trim($_POST['pregunta1']);
	    $pregunta2 = trim($_POST['pregunta2']);
	    $pregunta3 = trim($_POST['pregunta3']);
 		$pregunta4 = trim($_POST['pregunta4']);
 		$pregunta5 = trim($_POST['pregunta5']);
 		$pregunta6 = trim($_POST['pregunta6']);
	    $consulta = "INSERT INTO datos3( pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6) VALUES ('$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
			<h3 class="ok">¡Te has mandado comentario correctamente!</h3>
			
		   <?php
		   header("location:index.php");
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>
