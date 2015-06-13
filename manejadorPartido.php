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
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>

</head>
<body class="">
<?php
include './clases/Coneccion.php';
include './clases/partido.php';
include './clases/partidoControlador.php';

$alumnoA = new partidoControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':

    $ruta="bandera";
    @$archivo=$_FILES['bandera']['tmp_name'];
    @$nombreArchivo=$_FILES['bandera']['name'];
    move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
    $ruta=$ruta."/".$nombreArchivo;

        if(isset($_REQUEST['bot'])){
           $alumnoA->setId('NULL');
           $alumnoA->setNombre_partido($_REQUEST['Nombre_partido']);
           $alumnoA->setBandera($ruta);
           $alumnoA->setDui($_REQUEST['Dui']);
           $alumnoA->setRepresentante($_REQUEST['Representante']);

           $datosObj=array($alumnoA->getId(),
           
                           $alumnoA->getNombre_partido(),
                           $alumnoA->getBandera(),
                           $alumnoA->getDui(),
                           $alumnoA->getRepresentante());
           print $alumnoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorPartido.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM inscri_partido';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"inscri_partido","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
          
</script>
<br>
<br><br>
<br>
<center>
  <a href="formularioPartido.php"><input type="button" name='bot' value='Regresar' class="btn btn-primary">
    <a href="index.php"><input type="button" name='bot' value='Regresar al Menu' class="btn btn-primary"></center>
      </body>
</html>