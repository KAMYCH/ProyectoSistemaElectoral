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
<body class="inicio">

<?php
include './clases/Coneccion.php';
include './clases/candidato.php';
include './clases/candidatoControlador.php';

$alumnoA = new candidatoControlador();


if(isset($_REQUEST['bot'])){
          $alumnoA->setId('NULL');
          $alumnoA->setDui('dui');
          $alumnoA->setApellido($_REQUEST['apellido']);
          $alumnoA->setNombre($_REQUEST['nombre']);
          $alumnoA->setIddepa($_REQUEST['iddepa']);
          $alumnoA->setIdmuni($_REQUEST['idmuni']);
          $alumnoA->setTipocandi($_REQUEST['tipocandi']);
          $alumnoA->setIdcargo($_REQUEST['idcargo']);
          $alumnoA->setPartido($_REQUEST['partido']);
          $alumnoA->setDepa($_REQUEST['Depa']);
          $alumnoA->setMuni($_REQUEST['Muni']);
          $datosObj=array($alumnoA->getId(),
                           $alumnoA->getDui(),
                           $alumnoA->getApellido(),
                           $alumnoA->getNombre(),
                           $alumnoA->getIddepa(),
                           $alumnoA->getIdmuni(),
                           $alumnoA->getTipocandi(),
                           $alumnoA->getIdcargo(),
                           $alumnoA->getPartido(),
                           $alumnoA->getDepa(),
                           $alumnoA->getMuni());
            print "<div id='dialogo' title='Exito' style='display: none;'>";
            print '<p>Mensaje: ';
            print $alumnoA->modificarDatos($con,$datosObj);
            print '<span class="badge glyphicon glyphicon-ok"></span></p>';
            print '<a href=\'manejadorCandidato.php?accion=con\'>Ver datos</a>';
            print "</div>";
        }
 ?><script>
$(document).ready(function(){
   $("#dialogo").dialog();
});
</script>
      </body>
</html>

