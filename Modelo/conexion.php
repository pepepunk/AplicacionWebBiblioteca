<?php 

$nombreServidorMySql="localhost";
   $nombreUsuarioMysql="root";
   $claveUsuarioMySql="";
   $nombreBD="biblioteca";
   $conexion;
    
  
  $conexion=  mysqli_connect($nombreServidorMySql, $nombreUsuarioMysql, $claveUsuarioMySql)

        or die("Error en la conexion al servidor".mysqli_error());
        mysqli_select_db($conexion, $nombreBD)
        or die("Error no se encuentra la BD".mysqli_error());
$acentos = $conexion->query("SET NAMES 'utf8'");

     
 ?>