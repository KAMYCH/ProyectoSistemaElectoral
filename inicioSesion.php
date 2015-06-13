<?php
  session_start();
  include 'serv.php';
  if(isset($_SESSION['user'])){
  echo '<script> window.location="index.php"; </script>';
  }
?>
<?php include './clases/Coneccion.php';?>
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content="Simulador de votación"/>
<title>Sistema de votación : Inicio Sesión</title>
<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.10.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/jquery.messages.min.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
     

</head>
<body class="inicio">

<header>
<img src="imgs/KAMY LOGO.png"  width="200 px" height="70 px"><br>
<p>Formulario Inicio Sesión</p>
</header>
 
<div class="container">

      <form action="validar.php" method="post" class="pager">

            <table class="table-bordered">
          <div class="row">

          <div class="col-xs-2">
                    Usuario:
                </div>

               <div class="col-xs-3">
                   <input type="text" name="user" placeholder="Ingrese Su Usuario" class="required form-control" minlength="2" required="true">
               </div>
           </div>
           <div class="row">

<br>
          <div class="col-xs-2">
                   clave:
                </div>

               <div class="col-xs-3">
                   <input type="password" name="pw" class="required form-control" placeholder="Ingrese Su Contraseña" minlength="2" required="true">
               </div>
           </div>
                    
<br>
                <?php if (isset($_REQUEST['msg'])) { ?>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class='label alert-danger'>
                               <?php echo "Error al inicio de sesion";?> 

                            </div>
                        </div>
                    </div>
                    <br>
                    <?php }  ?>
           <div class="row">
                <td colspan="2">
                    <input type="submit" name='login' value='Enviar' class="btn btn-primary">
                    <input type="submit" name='bot' value='Cancelar' class="btn btn-primary">
                </div>
            </div>

            </table>
           

     </form>

</div>




<br><br><br>
<footer id="footer">
    Design <a href="" > Kateryn Alejandra Hernandez</a> And <a href=""> Yenifer Marisol Campos</a> Thanks to ITCA Fepade Regional Zacatecoluca
    <p> &copy; </p>

</footer> 
</body>
</html>
