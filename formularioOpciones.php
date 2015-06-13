<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>

<?php include './clases/Coneccion.php';?>
<!--<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistema1');
?>-->
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
 <link rel="stylesheet" href="css/miestylo.css">
</head>
<body class="inicio">

<header>
<img src="imgs/KAMY LOGO.png" width="250px" height="50"><br>
<p>Inscripción de Partido Politico</p>
</header>

 <div class="container">
        <form action="validar1.php" id="opciones" method="post" class="pager">
             <table class="table-bordered">
            <div class="input-sm">
                <div class="form-group ">
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" id="checkbox" value="Presidentes"> Presidencial <br>
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" id="checkbox" value="Diputados"> Diputados <br>
                <input class="checkbox-inline"  type="checkbox" name="checkbox[]" id="checkbox" value="Alcaldes"> Alcaldes 
                </div>
            </div>
          <br>
            <br><br> 
             <div class="row">
                <div class="col-xs-3">
                Año a Efectuar:
                </div>
                <div class="col-xs-9">
                <input type="text" name="year" id="year" placeholder="Ingrese Año Electoral a Aperturar" class="required form-control" minlength="4" required="true"><br>
                </div>
            </div>
            

            <div class="row">
                <div colspan="2">
                    <input type="submit" name='bot' value='Guardar' class="btn btn-primary"> 
                   <a href="index.php"> <input type="button" name='bot' value='Cancelar' class="btn btn-primary"> 
                </div>
            </div>
            <br>
            <a href="cerrar.php" class="label label-primary">Cerrar Sesion</a>
        </div>
           </table>
     </form>

</div>

</div>
<br><br><br>
        <footer id="footer">
    Design <a href="" > Kateryn Alejandra Hernandez</a> And <a href=""> Yenifer Marisol Campos</a> Thanks to ITCA Fepade Regional Zacatecoluca
    <p> &copy; </p>
</footer>   
   </body>
</html>
<?php
}else{
  echo '<script> window.location="inicioSesion.php"; </script>';
}
?>
