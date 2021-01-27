<?php

include("con_db.php");

$cod = $_POST["txtcodigo"];
$apellidos = $_POST["txtapellidos"];
$nom = $_POST["txtnombre"];
$semestre = $_POST["txtsemestre"];
$correo = $_POST["txtcorreo"];
$M_Cursadas= $_POST["txtM_Cursadas"];
$M_Curso= $_POST["txtM_Curso"];



if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['limpiardatos']))
{
	header("Location: principal.php");
}


if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['modificardatos']))
{
	$sqlmodificar = "UPDATE datos SET nombres='$nom',apellidos='$apellidos',semestre='$semestre',email='$correo',materias_cursadas='$M_Cursadas',materias_en_curso='$M_Curso' WHERE id=$cod ";

	if(mysqli_query($conn,$sqlmodificar))
	{
		header("Location: principal.php");
	}else 
	{
		echo "Error: " .$sql."<br>".mysql_error($conn);
	}
		
		
}
	
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['eliminardatos']))
	
{
	$sqleliminar = "DELETE FROM datos WHERE id= $cod";
	if(mysqli_query($conn,$sqleliminar))
	{
		header("Location: principal.php");
	}else 
	{
		echo "Error: " .$sql."<br>".mysql_error($conn);
	}
			
			
}

?>