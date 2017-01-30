<?php 
include('../Modelo/conexion.php');


$numAdqui=$_POST['adqui'];
$titulo=$_POST['titulo'];
$seccion=$_POST['seccion'];
$autor=$_POST['autor'];

$consulta="SELECT * FROM libros AND numAdquisicion='".$numAdqui."';";

$resultado=mysqli_query($conexion,$consulta);

 ?>