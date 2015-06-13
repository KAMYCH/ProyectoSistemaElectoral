<?php include './clases/Coneccion.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Votacion :: Coalision Municipal</title>
<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="./lbs/jquery.multiselect.css" />
<link rel="stylesheet" type="text/css" href="./lbs/style.css" />
<link rel="stylesheet" type="text/css" href="./lbs/prettify.css" />
<link rel="stylesheet" type="text/css" href="./lbs/jquery-ui.css" />
<script type="text/javascript" src="./lbs/jquery.js"></script>
<script type="text/javascript" src="./lbs/jquery-ui.min.js"></script>
<script type="text/javascript" src="./lbs/jquery.multiselect.js"></script>
<script type="text/javascript" src="./lbs/prettify.js"></script>
<script type="text/javascript">
$(function(){

	$("select").multiselect({
		selectedList: 4
	});
	
});
</script>

</head>
<body onload="prettyPrint();">
 <header>
      <img src="imgs/KAMY LOGO.png" width="250px" height="50"><br>
         <h1 class="px"><br>
           <span></span></h1>
           <p>Inscripción de Coalisiones</p>
    </header>

<div class="container">
  <form action="?accion=save" method="post">
       <br> 
           <div class="row">
            
                <div class="col-xs-2">
                  Departamento:
                </div>
                <div class="col-xs-2">

                   <Select name="depa" id="depto" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
                        
                  <?php
                  $result = $conexion->query("SELECT * FROM departamentos");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['codigo'].'">'.utf8_encode($row['nombre']).'</option>';
                  }
                }
                  ?>
               </select>
               </div>
           </div> 
           <br> 
       <div class="row">
                
                <div class="col-xs-2">
                  Municipio:
                </div>
                <div class="col-xs-2">
                   <Select name="muni" id="municipio" class="required form-control" required="true" onkeydown="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
                       
               </select>
               </div>
           </div> 
           
<br> 

	<div class="row">
                
                <div class="col-xs-2">
                  Seleccione:
                </div>
                <div class="col-xs-2">
		          <select name="example-list" multiple="multiple" style="width:100px">
		            <?php
                  $result = $conexion->query("SELECT * FROM inscri_partido");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['id'].'">'.utf8_encode($row['nombre_partido']).'</option>';
                  }
                }
                  ?>
		</select>
		</div>
	 <br> <br><br><br>
        <center>
           <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar'  class="btn btn-primary">
                    <input type="submit" name='bot' value='Cancelar' class="btn btn-primary">
                </div>

             <br>
                <div class="panel-heading">
            <a href="menu.php" class="label label-primary">Menu Principal</a>
            <a href="cerrar.php" class="label label-primary">Cerrar Sesion</a>
        </div>
         </center>

</form>

</body>
<script language="javascript">
    $(document).ready(function(){
        $("#depto").change(function () {
            $("#depto option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio").html(data);
                });
            });
        })
    });
</script>
</body>
<footer id="footer">
  Design <a href="http://www.facebook.com/DanielGarcia1994">DannyDj Garcia</a> And <a href="http://www.facebook.com/kevin.rogel08">Kvin Rögell</a> Thanks to ITCA Fepade Regional Zacatecoluca
  <p> &copy; Copyright DEKA 2015 Sistema Electoral </p>

</footer>
</html>
