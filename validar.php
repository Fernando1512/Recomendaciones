<?php
	include("con_db.php");
	$Email=$_POST['email'];
	$Pass =$_POST['pass'];
	session_start();
	$_SESSION['email']=$Email;


	$consulta="SELECT * FROM datos WHERE email = '$Email' AND  pass= '$Pass'";

	$resultado= mysqli_query($conex,$consulta);
	$filas = mysqli_num_rows($resultado);

	if($filas){
		header("location:Recomendaciones2.php");
		$amount_of_log_calls = 0;

		$amount_of_log_calls = $Email;
		function log_message($message) {
			
			global $amount_of_log_calls;
		
			
			$amount_of_log_calls += 1;
		
			echo $message;
		}

		
	}else{
		?>
		<?php
		include("login.php");
		?>
		<div  key='resultado' >
			 ERROR EN LA AUTENTICACION
		</div>
		<?php
	}
	mysqli_free_result($resultado);
	mysqli_close($conex);

	
?>
