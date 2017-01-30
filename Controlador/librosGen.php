<?php 
	include('../Modelo/conexion.php');

	$consulta="SELECT Titulo, Autor, numAdquisicion, Tipo FROM libros
				UNION 
			   SELECT Titulo, Autor, numAdquisicion, Tipo FROM tesis";
	$resultado=mysqli_query($conexion,$consulta);
	

 ?>