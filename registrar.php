<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['matricula']) >= 1 && strlen($_POST['name']) >= 1 && strlen($_POST['licenciatura']) >= 1 && strlen($_POST['semestre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['materias_cursadas']) >= 1 && strlen($_POST['materias_en_curso']) >= 1 && strlen($_POST['pass']) >= 1) {
    	$matricula = trim($_POST['matricula']);
	    $name = trim($_POST['name']);
		$licenciatura = trim($_POST['licenciatura']);
		$semestre = trim($_POST['semestre']);
		$email = trim($_POST['email']);
		$pass = trim($_POST['pass']);
 		$materias_cursadas = trim($_POST['materias_cursadas']);
 		$materias_en_curso = trim($_POST['materias_en_curso']);	   
	    $consulta = "INSERT INTO datos(nombres, apellidos, TipoRecomendacion, semestre, email,pass,materias_cursadas,materias_en_curso) VALUES ('$matricula','$name','$licenciatura', '$semestre','$email','$pass','$materias_cursadas','$materias_en_curso')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
			<h3 class="ok">¡Te has inscripto correctamente!</h3>
			
		   <?php
		   header("Location: Recomendaciones.php");
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
