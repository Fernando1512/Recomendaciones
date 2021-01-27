<?php

$conex = mysqli_connect("localhost","root","","registro1"); 

/*----- */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "registro1";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass , $dbname);

if(!$conn)
{
	die("No hay conexion: ".mysqli_connect_error());	
}

?>