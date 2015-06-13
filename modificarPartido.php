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
include './clases/partido.php';
include './clases/partidoControlador.php';

$AlumnoA = new partidoControlador();
$ruta="bandera";
    @$archivo=$_FILES['bandera']['tmp_name'];
    @$nombreArchivo=$_FILES['bandera']['name'];
    move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
    $ruta=$ruta."/".$nombreArchivo;

 if(isset($_REQUEST['bot'])){
           $AlumnoA->setId('id');
           $AlumnoA->setNombre_partido($_REQUEST['Nombre_partido']);
           $AlumnoA->setBandera($ruta);
           $AlumnoA->setDui($_REQUEST['Dui']);
           $AlumnoA->setRepresentante($_REQUEST['Representante']);
           $datosObj=array($AlumnoA->getId(),
                           $AlumnoA->getNombre_partido(),
                           $AlumnoA->getBandera(),
                           $AlumnoA->getDui(),
                           $AlumnoA->getRepresentante(),
                           );
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $AlumnoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorPartido.php?accion=con\'>Ver datos</a>';
            print "</div>";

        }
 ?>
 <script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>