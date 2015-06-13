<?php include './clases/Coneccion.php';?>
<pre>
<?php  
$sql ="SELECT * FROM registro_votante WHERE id ='".$_REQUEST['id']."';";
        $datos= consultaD($con, $sql,3)
       ?>
       </pre> 
<html>
<head>
<meta charset="utf-8">
<meta property="og:title" content=""/>
<title>Sistema de votación : Votante</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <script src="./libs/jquery-ui/js/jquery.js"></script>
        <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/validacion/validacion_text_y_num.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="./libs/validacion_text_y_num.js"></script>
        <script src="./libs/jquery.validate.min.js"></script>
        <script src="./libs/jquery.messages.min.js"></script>
        <script src="./libs/skel-layers.min.js"></script>
        <script src="./libs/validacion_text_y_num.js"></script>
<script src="./libs/jquery.validate.min.js"></script>        
<script src="./libs/jquery.messages.min.js"></script>
<script src="./libs/skel-layers.min.js"></script>
        <link rel="stylesheet" href="css/miestylo.css">
</head>
<body class="inicio">

<header>
<header> <img src="imgs/KAMY LOGO.png"  width="200 px" height="70 px"><br>
                 <center>
               <table> 
                <p>Formulario Registro Votante</p></header>
                <form action="modificarVotante.php" method="post" id="registro">
                 <input type="hidden" name="id" 
                    value='<?php print $datos[0][0]?>'>
             <tr>

                <td > Dui: </td>
               <td >
               <input type="text" name="dui" maxlength="10"  title="Ingrese su Dui" placeholder="00000000-0" class="required form-control" minlength="10" required="true"  value='<?php print $datos[0][1]?>' onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);">
               </td>
           </tr>
        <tr>
        <td> Nombre:</td>
             <td><input type="text" name="nombre" title="Ingrese su Nombre" placeholder="Ingrese Su Nombre"  value='<?php print $datos[0][2]?>' class="required form-control" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
              </tr>
            <tr>
                <td>Apellido:</td>
               <td><input type="text" name="apellido" title="Ingrese su Apellido" placeholder="Ingrese Su Apellido"  value='<?php print $datos[0][3]?>' class="required form-control" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
           </tr>
           <tr>
                <td>Foto:</td>
               <td><input type="File" title="Ingrese su Foto"  value='<?php print $datos[0][4]?>' name="foto" required="true">
               </td>
                 </tr>

             <tr>
                <td>
                    Gènero:
                </td>
               <td >
                Hombre <input type="radio" name ="genero"  value='<?php print $datos[0][5]?>' required="">
                Mujer <input type="radio" name ="genero"  value='<?php print $datos[0][5]?>' required=""> 
               </td>
             </tr>
                  <tr>
                <td>
                    Fecha de Vencimiento:
                </td>
               <td>
                   <div class="input-group">                   
                    <input type="date"  title="Ingrese la fecha de vencimiento del Dui" name="fecha" id="fechac"  value='<?php print $datos[0][6]?>' class="required form-control">
                    <span id="fechac" class="input-group-addon glyphicon glyphicon-calendar"></span>
               </td>
           </td>
       </td>
   </tr>
                 <tr>
                <td>
                    Direcciòn:
                </td>
               <td>
                <textarea name="direccion" title="Ingrese su Direccion" cols="80" rows="3" placeholder="Ingrese Su Direcciòn"  value='<?php print $datos[0][7]?>' class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)"></textarea>
                   
               </td>
           </tr>
            <tr>
            
                <td>Departamento: </td>
               <td><select name='iddepa' id="depto" class="required form-control">
                  <option value='<?php print $datos[0][8]?>'>
                   <?php 
                    $sql2="SELECT nombre from departamentos where codigo='".$datos[0][8]."'"; $da = consultaD($con,$sql2,3); print $da[0][0];
                        ?></option>
                        <?php                
                     $sql = "SELECT codigo,nombre FROM departamentos WHERE codigo != '".$datos[0][8]."'";
                 $datos = consultaD($con, $sql);
                  foreach ($datos as $value) {
                 print "<option value='";
                 print $value['codigo']; print "'>";
                print $value['nombre']; print "</option>";
                            }                
                        ?>
               </select>
            
               </td>
            <tr>
                <td>Municipio:</td>
               <td>
              <select name='idmuni' id="municipio" class="required form-control">
                        <option value='<?php print $datos[0][9]?>'>  
               </select>
               </td>
           </tr>                  
            <tr>
                <td colspan="2">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                    <input type="submit" name='bot' value='Cancelar' class="btn btn-primary">
                </td>
            </tr>
        </table>
        </center>     
     </form>
</div>
</div>
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
<br><br><br>

<footer id="footer">
    Design <a href="" > Kateryn Alejandra Hernandez</a> And <a href=""> Yenifer Marisol Campos</a> Thanks to ITCA Fepade Regional Zacatecoluca
    <p> &copy; </p>

</footer>   
</body>
</html>




