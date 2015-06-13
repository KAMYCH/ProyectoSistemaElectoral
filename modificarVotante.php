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
<body class="">

<?php
include './clases/Coneccion.php';
include './clases/Votante.php';
include './clases/VotanteControlador.php';

$alumnoA = new VotanteControlador();


 if(isset($_REQUEST['bot'])){
          $alumnoA->setId('id');
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
                           $alumnoA->getIdmuni(),
                           );
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $alumnoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorVotante.php?accion=con\'>Ver datos</a>';
            print "</div>";
            

        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>