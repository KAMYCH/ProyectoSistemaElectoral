<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM cargo WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
      
       </pre> 
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content=""/>
<title>Sistema de votación :: Votante</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.10.js"></script>
        <script src="./libs/jquery-ui/js/jquery.js"></script>
        <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/jquery.messages.min.js"></script>
        <script src="./libs/validacion/validacion_text_y_num.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>

</head>
<body class="inicio">

<header>
<img src="imgs/KAMY LOGO.png"><br>
<p>Formulario De Apertura</p>
</header>
 <div class="container">
        <form action="modificarOpciones.php" method="post"  class="pager" id="registro">
             <table class="table-bordered">
             <div class="row">
            
                <div class="col-xs-2">
                    tipo
                </div>
               <div class="col-xs-2">
             <input type="hidden" name="id" value='<?php print $datos[0][0]?>'>
            <input type="text" name="tipo" value='<?php print $datos[0][1]?>'
                    >
                    
               </div>
           </div>
<br>
          <div class="row">
            
                <div class="col-xs-2">
                    año a efectuar
                </div>
               <div class="col-xs-2">
               <input type="text" name="year" value='<?php print $datos[0][2]?>'
                     class="required form-control">
                  
           
            
 <br>                  
            <div class="row">
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                    <input type="submit" name='bot' value='Cancelar' class="btn btn-primary">
                </div>
            </div>
        </table>
     </form>

</div>

</div>


<br><br><br>

<footer id="footer">
    Design <a href="" a</a> And <a href=""></a> Thanks to ITCA Fepade Regional Zacatecoluca
    <p> &copy; </p>

</footer>   
</body>
</html>
