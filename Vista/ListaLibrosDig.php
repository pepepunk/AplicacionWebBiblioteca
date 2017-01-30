<?php
include('../Controlador/librosDig.php');

mysqli_close($conexion);
?>

<!DOCTYPE html>

<html lang="es">
<head>
  <title>Lista Libros Digitales</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>

<nav nav class="navbar navbar-default navbar-fixed-top" role="navigation" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html"><img src="img/itsoeh2.png" style="margin-top: -7px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="listaLibrosG.php">Lista General de Libros</a></li>
        <li><a href="#">Lista de Tesis Digitales</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search" action="busqueda.php" method="POST">
        <div class="form-group input-group">
          <input type="text" class="form-control" name="buscar" placeholder="Buscar Libro...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <span class="glyphicon glyphicon-search"></span>  Buscar
            </button>
          </span>
        </div>
      </form>
      
    </div>
  </div>
</nav>

<div class="row" style="padding-top: 60px;">
  <div class="col-sm-12">
          <div class="well">
           <p style="font-weight: bold; text-align: center; font-size: 30px;">Lista de libros: Digitales</p>
          </div>
        </div>
</div>
<table border=2 width=100%>
  <tr>
    <td class='titulo'>Num. de Adquisición</td>
    <td class='titulo'>Libro</td>
    <td class='titulo'>Autor</td>
    <td class='titulo'>Carrera</td>
    <td></td>
    <td style='display:none;'></td>
    
    
  </tr>
  <?php
  while($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC)){
  
echo "
<form method='POST' action='libro.php'>
  <tr>
    <td><input type='text' style='border-width: 0px;' readonly value='".$fila['numAdquisicion']."' name='adqui'/></td>
    
      <td>".mb_strtoupper($fila['Titulo'],'UTF-8')."</td>
      <td>".mb_strtoupper($fila['Autor'],'UTF-8')."</td>
      <td>".mb_strtoupper($fila['Carrera'],'UTF-8')."</td>
      
      <td><input type='Submit' value='Ver info.' ></td>  
      <td style='display:none;'><input type='text' value='".$fila['Tipo']."' name='tipo'/></td>
  </tr>
  </form>
  ";
  
  }
?>
</table>
<br>
<footer class="container-fluid text-center">
  <p>&copy ITSOEH</p>
  <p>&copy Sistemas Computacionales</p>
</footer>

</body>
</html>

