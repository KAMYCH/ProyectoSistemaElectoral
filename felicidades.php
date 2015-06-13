<?php include './clases/Coneccion.php';?>

<?php

 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("sistema1", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM registro_votante where dui = '".$_REQUEST['var1']."'" ,$conexion);

if(mysql_query( $sql = "UPDATE voto SET voto = voto+1 WHERE `voto`.`id`;")){

    mysql_query("UPDATE registro_votante SET estado=1 WHERE dui='".$_REQUEST['var1']."'");
		}else{
			echo "error";
		}

?>
<!DOCTYPE html>
<html>
<head>
    <!--<meta http-equiv="Refresh" content="5;URL=dui.php">-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
	<style>
		.container-fluid{
			width: 800px;
		}
		.jumbotron{
			background-color: #278877;
		}
	</style>
</head>
<body onLoad="redireccionar()">

<script language="JavaScript">
  function redireccionar() {
  setTimeout("location.href='duiCerrar.php'", 5000);
  }
  </script>

<div class="jumbotron">

	<div class="container-fluid">
		<div class="panel panel-warning">
  			<div class="panel-heading">
    			<center><h3 class="panel-warning">ELECCIONES  EL SALVADOR 2015</h3></center>   

  			</div>
  		<div class="panel-body">
  		    <center><img src="./imgs/voto.jpg" width='75px' height='75px' ></center>
    		<center><h5>FELICIDADES!!! SU VOTO HA SIDO REALIZADO SATISFACTORIAMENTE</h5></center>
            <center><h5> FELIZ DIA !!!</h5></center>
  		</div>
  		<center><div class="panel-heading">
          
        </div></center>
  		
       
	</div>
</div>
</div>

	
</body>
</html>
