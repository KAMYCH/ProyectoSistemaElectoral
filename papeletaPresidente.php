<?php include './clases/Coneccion.php';?>

<?php
session_start();

if(isset($_SESSION['barra'])) {?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">



<style type="text/css">


 body {background: #FFFFCC;
    font-family: 'Hammersmith One', 
    sans-serif;}

body.inicio {background: #FFFFCC;}

.bloque{
  position: relative;
  display: inline-block;
  margin: auto 0;
  margin-left: 45px;
  margin-right: 45px;
  padding: 10px 0px 0 10px;

}


ul,ol {
      list-style: none;
    
      }

div > li > img {
  float: left;
}


</style>

</head>
<body class="inicio" >

<header>

<p>Elecciones Presidenciales</p>
</header>
 <div>
 
    <?php

 $sql = 'SELECT * FROM inscri_partido';
        $datoss =  consultaD($con, $sql);
//var_dump($datoss);
foreach ($datoss as $key)
  
/*$_REQUEST['var1'];
$_REQUEST['var2'];
$_REQUEST['var3'];*/

 {
 
    print(' 
      
        <div class="bloque">
         <form action="manejadorPresidentes.php?accion=save" method="post">
         <input type="hidden" name="var1" value="'.$_REQUEST['var1'].'">
         <input type="hidden" name="var2" value="'.$_REQUEST['var2'].'">
         <input type="hidden" name="var3" value="'.$_REQUEST['var3'].'">
            <div>
            <input type="hidden" name="candidatura" value="Presidentes">
            </div>
            <input type="hidden" name="voto" value='.$key['nombre_partido'].'>
            <img src='.$key['bandera'].'  width="200" height="150" /><br>
            <input type="submit" name="bot" value="Votar" class="btn btn-primary">
            </form>
          </div>
      
            ');
            

 }

?>
        
<br><br><br>
</body>
</html>
 <?php }else{
    header("Location:Votante1.php");
 } ?>
 