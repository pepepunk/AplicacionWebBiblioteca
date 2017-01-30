<?php 
	include('../Modelo/conexion.php');

	$consulta="SELECT * FROM tesis";
	$resultado=mysqli_query($conexion,$consulta);

 ?>