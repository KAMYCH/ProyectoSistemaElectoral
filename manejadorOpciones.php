<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content=""/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
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
include './clases/opciones.php';
include './clases/opcionesControlador.php';

$alumnoA = new opcionesControlador();

$accion= $_REQUEST['accion'];
switch ($accion) {
    case 'save':
        if(isset($_REQUEST['bot'])){
           $alumnoA->setId('NULL');
           $alumnoA->setTipo($_REQUEST['tipo']);
           $alumnoA->setYear($_REQUEST['year']);
           $datosObj=array($alumnoA->getId(),
                           $alumnoA->getTipo(),
                           $alumnoA->getYear());
           print $alumnoA->guardarDatos($con,$datosObj);
           print '<a href=\'manejadorOpciones.php?accion=con\'>Ver datos</a>';
       }else{
           print 'No se ha enviado datos ';
       }
        break;
    case 'con':        
        $sql = 'SELECT * FROM cargo';
        $datoss =  consultaD($con, $sql);

        print imprimetabla($datoss,"cargo","table table-bordered table-striped",1);
        break;
        default:
        print 'No hay Accion que realizar';
        break;
      }
 ?>  
          
</script>
<center>
  <a href="formularioOpciones.php"><input type="button" name='bot' value='Regresar' class="btn btn-primary">
    <a href="index.php"><input type="button" name='bot' value='Regresar al Menu' class="btn btn-primary"></center>
      </body>
</html>