<?php session_start(); ?>

<?php

 $dui = $_REQUEST['barra'];


 $conexion = mysql_connect("localhost", "root") or die ("PROBLEMA AL CONECTAR");


 mysql_select_db("sistema1", $conexion) or die ("ERROR AL CONECTAR A LA BASE DE DATOS");

 
 $estandar= mysql_query( "SELECT * FROM registro_votante where dui = '$dui' AND estado=0" ,$conexion);
  //var_dump($estandar);
  //exit();
 if (mysql_num_rows($estandar)>0) {
					$row = mysql_fetch_array($estandar);
					$_SESSION["barra"] = $row['dui']; 
					header("location:papeletaPresidente.php?var1=".$row['dui']."&var2=".$row['iddepa']."&var3=".$row['idmuni']);
				}
				else{
					header("Location:votante1.php?msg=1");
				}
			
		?>	

