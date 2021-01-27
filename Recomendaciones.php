<!DOCTYPE html>
<html lag="es">
<head>
	<meta charset="utf-8">
	<title>Sistema de Recomendaciones</title>
	<link rel="stylesheet" href="css/Estilo2.css">
</head>
<body>

<p align=" center"><img src="imagenes/logo2.png" width="1350" height="200" alt=baloncesto  ></p>
<a  href="inicio.php" ><button  type="submit" name="register" class="formulario__btn">Regresar</button></a>
<div class="principal">
<div class="tabla1">	
	<h2 align="center">Tus Recomendaciones (semestre o materia)</h2>
	<table align="center">
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Semestre</th>
				<th>Materias Cursadas</th>
				<th>Materias en curso</th>
				<th>Correo</th>
				<th>Recomendaciones</th>
			</tr>
		</thead>
	<tbody>
	<tr>
		<?php 
			include("con_db.php");
			/*$sql="SELECT * FROM datos";*/
			//$sql="select * from datos ORDER BY id DESC";
			
	
			$sql="select * from datos where id=(SELECT MAX(id) AS id FROM datos)";
			
			$result=mysqli_query($conn,$sql);

			while($mostrar=mysqli_fetch_array($result))
			{
			?>
			<tr>
				 <!--<td><?/*php echo $mostrar['id']*/ ?>-->
				<td><?php echo $mostrar['nombres'] ?>
				<td><?php echo $mostrar['apellidos'] ?>
				<td><?php echo $mostrar['semestre'] ?>
				<td><?php echo $mostrar['materias_cursadas'] ?>
				<td><?php echo $mostrar['materias_en_curso'] ?>
				<td><?php echo $mostrar['email'] ?>

			</tr>
			<?php
			}
		
		?>

		<?php 
			//semestre
	
			//$sql="SELECT * FROM datos2 WHERE semestres = (select semestre from datos where id=(SELECT MAX(id) AS id FROM datos));"
			$sql="SELECT * FROM datos2 WHERE semestres = (select semestre from datos where id=(SELECT MAX(id) AS id FROM datos) and TipoRecomendacion = 'semestre')";
			$result=mysqli_query($conn,$sql);

			while($mostrar=mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td><?//php echo $mostrar['id'] ?>
				<td><?//php echo $mostrar['nombres'] ?>
				<td><?//php echo $mostrar['apellidos'] ?>
				<td><?//php echo $mostrar['semestre'] ?>
				<td><?//php echo $mostrar['materias_cursadas'] ?>
				<td><?//php echo $mostrar['materias_en_curso'] ?>
				<td><?php echo $mostrar['referencia'] ?>

			</tr>
			<?php
			}
		
		?>

		
		<?php 
			//materia cursadas
			include("con_db.php");
			//$check = $_POST['materias_cursadas'];
			//$sql="SELECT * FROM datos2 WHERE semestres = (select semestre from datos where id=(SELECT MAX(id) AS id FROM datos));"
			$sql="SELECT * FROM datos2 WHERE /*(materia LIKE %check%) and*/ semestres = (select semestre from datos where id=(SELECT MAX(id) AS id FROM datos) and TipoRecomendacion = 'materia')";
			$result=mysqli_query($conn,$sql);

			while($mostrar=mysqli_fetch_array($result))
			{
			?>
			<tr>
				<td><?//php echo $mostrar['id'] ?>
				<td><?//php echo $mostrar['nombres'] ?>
				<td><?//php echo $mostrar['apellidos'] ?>
				<td><?//php echo $mostrar['semestre'] ?>
				<td><?//php echo $mostrar['materias_cursadas'] ?>
				<td><?//php echo $mostrar['materias_en_curso'] ?>
				<td><?php echo $mostrar['referencia'] ?>

			</tr>
			<?php
			}
		
		?>

	
	</tr>
	</tbody>
	</table>
</div>

<div class="tabla2">
<h2 align="center">Similares</h2>
<table align="center">
	<thead>
		<tr>
			<th>Semestre</th>
			<th>Materias Cursadas</th>
			<th>Materias en curso</th>
			
		</tr>
	</thead>
<thead>
<tbody>
	<tr>
	<?php 
			include("con_db.php");
			//$sql="select * from datos ORDER BY id DESC";
			
	
			//$sql="select * from datos where id=(SELECT MAX(id) AS id FROM datos)";
			$sql="SELECT * FROM datos ORDER BY RAND() LIMIT 3 ";
			$result=mysqli_query($conn,$sql);

			while($mostrar=mysqli_fetch_array($result))
			{
			?>
			<tr>
				 <!--<td><?/*php echo $mostrar['id']*/ ?>-->
				<td><?php echo $mostrar['semestre'] ?>
				<td><?php echo $mostrar['materias_cursadas'] ?>
				<td><?php echo $mostrar['materias_en_curso'] ?>
				

			</tr>
			<?php
			}
		
		?>
	</tr>
</tbody>
</thead>
<thead>
<tbody>
	<tr>
	<?php 
			//materia curso
			/*
			$check1 = $_POST['materias_en_curso'];
			//$sql="SELECT * FROM datos2 WHERE semestres = (select semestre from datos where id=(SELECT MAX(id) AS id FROM datos));"
			$sql="SELECT * FROM datos2 WHERE materia LIKE '$check1'";
			$result=mysqli_query($conn,$sql);

			while($mostrar=mysqli_fetch_array($result))
			{
			?>
			<tr>
			
				<td><?//php echo $mostrar['semestre'] ?>
				<td><?//php echo $mostrar['materias_cursadas'] ?>
				<td><?//php echo $mostrar['materias_en_curso'] ?>
				<td><?php echo $mostrar['referencia'] ?>

			</tr>
			<?php
			}*/
		
		?>
	</tr>
</tbody>
</thead>
<thead>

</table>
</div>
<div class="encuesnta">
	<h2 align="center">Dejanos tu opinio</h2>
	<form class="formulario" action="RegistroComentario.php" method="post" >

		<fieldset >
			<h3>¿QUE TE PARECIO EL SISTEMA?</h3>
				<input type="radio" value="Exelente" name="pregunta1" id="radio4" >Exelente
				<input type="radio" value="Más o menos" name="pregunta1" id="radio5" >Más o menos
				<input type="radio" value="Mal" name="pregunta1" id="radio6" >Malo

		</fieldset>
		<fieldset>
			<h3>¿NOS RECOMEDARIAS?</h3>
			<input type="radio" value="si" name="pregunta2" id="radio7" required="required">Si
			<input type="radio" value="no" name="pregunta2" id="radio8" required="required">No
		</fieldset>
		<fieldset>
			<h3>¿TE FUE DE UTILIDAD?</h3>
			<input type="radio" value="si" name="pregunta3" id="radio9" >Si
			<input type="radio" value="no" name="pregunta3" id="radio10" >No
		</fieldset>
		<fieldset>
			<h3>¿LOS RECOMENDACIONES FUERON LAS QUE BUSCABAS?</h3>
			<input type="radio" value="si" name="pregunta4" id="radio11" >Si
			<input type="radio" value="no" name="pregunta4" id="radio12" >No
		</fieldset>
		<fieldset>
			<h3>¿VOLVERIAS A UTILIZAR ESTE CITIO?</h3>
			<input type="radio" value="si" name="pregunta5" id="radio13" >Si
			<input type="radio" value="no" name="pregunta5" id="radio14" >No
		</fieldset>
		<fieldset>
			<h3>¿COMO PODRIAMOS MEJORAR DEJANOS TU RESPUESTA?</h3>
			<input class="control" name="pregunta6" type="text" placeholder="Respuesta">
		</fieldset>
		<p align="center">
		<input class="boton" type="submit" name="register" value="Enviar Respuesta" >
		</p>
	</form>
	


</div>
<div class="abajo">
	<div class="img2">
		<p align=" center"><img src="imagenes/logo1.png" width="300" height="150" alt=baloncesto  ></p>
	</div>
	<h4 align="center">Contactos</h4>
	<p align="center"><strong>Moises Coba Turriza</strong> </p>
	<p align="center"><strong>Fernando Pomol</strong> </p>
	<p align="center"><strong>+52 (98)6 112 43 56</strong> </p>
</div>
</div>
</body>
</html>