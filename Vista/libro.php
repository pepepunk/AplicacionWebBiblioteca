<?php 
include('../Modelo/conexion.php');


$numAdqui=$_POST['adqui'];
$tipo=$_POST['tipo'];

$consulta="SELECT * FROM ".$tipo." WHERE numAdquisicion='".$numAdqui."';";

$resultado=mysqli_query($conexion,$consulta);
mysqli_close($conexion);

 ?>
  <!DOCTYPE html>
<html lang="en">
<head>
  <title>Info. de libro</title>
  <meta charset="utf-8">
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
        <li><a href="ListaLibrosDig.php">Lista de Tesis Digitales</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search" action="busqueda.php" method="POST">
        <div class="form-group input-group">
          <input type="text" class="form-control" name="buscar" placeholder="Buscar Libro...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit" >
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
           <p style="font-weight: bold; text-align: center; font-size: 30px;">Información del Libro.</p>
          </div>
        </div>
</div>
  
<div class="container text-center" style="padding-top: 20px;">
<?php 

 while($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC)){

    if($tipo=='libros')
    {
      echo'
      <div class="row">
        <div class="col-sm-3 well">
          <div class="well">
            
            <p>Recuerda que este y todos los libros que estan en esta página los puedes encontrar disponibles en la biblioteca del ITSOEH.</p>
          </div>
        </div>

        <div class="col-sm-7">
          <div class="row">
           <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Nombre del libro</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p style="font-size: 19px; font-weight: bold;">'.mb_strtoupper($fila['Titulo'],'UTF-8').'</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Autor</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p>'.mb_strtoupper($fila['Autor'],'UTF-8').'</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Num. de Adquisición</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p>'.mb_strtoupper($fila['numAdquisicion'],'UTF-8').'</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Sección de biblioteca</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p>'.mb_strtoupper($fila['Seccion'],'UTF-8').'</a></p>
              </div>
            </div>
          </div>
          </div>
       
      </div>';
      mysql_close($conexion);
    } 
    else{
      echo'
      <div class="row">
        <div class="col-sm-3 well">
          <div class="well">
            
            <p>Recuerda que este y todos los libros que estan en esta página los puedes encontrar disponibles en la biblioteca del ITSOEH.</p>
          </div>
          
          
         
        </div>
        <div class="col-sm-7">
        
          
          
          <div class="row">
           <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Nombre del libro</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p style="font-size: 19px; font-weight: bold;">'.mb_strtoupper($fila['Titulo'],'UTF-8').'</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Autor</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p>'.mb_strtoupper($fila['Autor'],'UTF-8').'</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Num. de Adquisición</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p>'.mb_strtoupper($fila['numAdquisicion'],'UTF-8').'</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Carrera del autor</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p>'.mb_strtoupper($fila['Carrera'],'UTF-8').'</a></p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="well">
               <p style="font-weight: bold;">Ver libro</p>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="well">
                <p><a href="archivos/'.$fila['numAdquisicion'].'.pdf".pdf target="_blank">Ver Archivo En Línea</a></p>
              </div>
            </div>
          </div>
        </div>
       
      </div>';
      
    }
  }
  
   ?>
</div>
<br><br>

<hr>
<footer class="container-fluid text-center">
  <p>&copy ITSOEH</p>

  <p>&copy Sistemas Computacionales</p>
</footer>

</body>
</html>

