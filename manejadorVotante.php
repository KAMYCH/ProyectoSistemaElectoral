
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content=""/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>
</head>
<body class="inicio">
<?php
include './clases/Coneccion.php';
include './clases/Votante.php';
include './clases/VotanteControlador.php';

$alumnoA = new VotanteControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
          $alumnoA->setId('NULL');
          $alumnoA->setDui($_REQUEST['dui']);
          $alumnoA->setNombre($_REQUEST['nombre']);
          $alumnoA->setApellido($_REQUEST['apellido']);
          $alumnoA->setFoto($_REQUEST['foto']);
          $alumnoA->setGenero($_REQUEST['genero']);
          $alumnoA->setFecha($_REQUEST['fecha']);
          $alumnoA->setDireccion($_REQUEST['direccion']);
          $alumnoA->setIddepa($_REQUEST['iddepa']);
          $alumnoA->setIdmuni($_REQUEST['idmuni']);
          $datosObj=array($alumnoA->getId(),
                           $alumnoA->getDui(),
                           $alumnoA->getNombre(),
                           $alumnoA->getApellido(),
                           $alumnoA->getFoto(),
                           $alumnoA->getGenero(),
                           $alumnoA->getFecha(),
                           $alumnoA->getDireccion(),
                           $alumnoA->getIddepa(),
                           $alumnoA->getIdmuni());
        print $alumnoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorVotante.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM registro_votante';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"registro_votante","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?> 
 <br>
 <br><br>
 <br>
<center>
  <a href="formularioVotante.php"><input type="button" name='bot' value='Regresar' class="btn btn-primary">
    <a href="index.php"><input type="button" name='bot' value='Regresar al Menu' class="btn btn-primary"></center>
     </body>
</html>