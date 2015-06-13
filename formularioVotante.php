<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>

<?php include './clases/Coneccion.php';?>
<?php
$conexion = new mysqli('127.0.0.1', 'root', '', 'sistema1');
?>
<html>
<head>
<meta charset="utf-8"> 
<meta property="og:title" content="Simulador de votación"/>
<link rel="shortcut icon" href="imgs/kamy.jpg">
<title>Sistema de votación  Votante</title>
<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
        <script src="./libs/jquery-2.1.0.js"></script>
        <script src="./libs/jquery-ui/js/jquery.js"></script>
        <link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
        <script src="./libs/validacion/jquery.validate.min.js"></script>
        <script src="./libs/validacion/messages.js"></script>
        <script src="./libs/validacion/validacion_text_y_num.js"></script>
        <script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="./libs/jquery-ui/js/jquery.validate.js"></script>
        <script src="./libs/jquery-ui/js/jquery.validate.min.js"></script>
        <script src="./libs/validacion_text_y_num.js"></script>
        <script src="./libs/jquery.validate.min.js"></script>
        <script src="./libs/jquery.messages.min.js"></script>
        <script src="./libs/skel-layers.min.js"></script>
         <link rel="stylesheet" href="css/miestylo.css">
<script type="text/javascript">
function justNumbers(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
 
return /\d/.test(String.fromCharCode(keynum));
document.tree.miSelect.options[indice].text
}
var patron = new Array(2,2,4)
var patron2 = new Array(1,3,3,3,3)
var patron3 = new Array(8,1)
function mascara(d,sep,pat,nums){
if(d.valant != d.value){
  val = d.value
  largo = val.length
  val = val.split(sep)
  val2 = ''
  for(r=0;r<val.length;r++){
    val2 += val[r]  
  }
  if(nums){
    for(z=0;z<val2.length;z++){
      if(isNaN(val2.charAt(z))){
        letra = new RegExp(val2.charAt(z),"g")
        val2 = val2.replace(letra,"")
      }
    }
  }
  val = ''
  val3 = new Array()
  for(s=0; s<pat.length; s++){
    val3[s] = val2.substring(0,pat[s])
    val2 = val2.substr(pat[s])
  }
  for(q=0;q<val3.length; q++){
    if(q ==0){
      val = val3[q]
    }
    else{
      if(val3[q] != ""){
        val += sep + val3[q]
        }
    }
  }
  d.value = val
  d.valant = val
  }
}
</script>
</head>
<body class="inicio">
    <table>
  <center>
  <form action="manejadorVotante.php?accion=save" method="post" id="registro" class="pager">
          <header> <img src="imgs/KAMY LOGO.png"  width="200 px" height="70 px"><br>
                <p>Formulario Registro Votante</p></header>
             <tr>
                <td > Dui: </td>
               <td >
               <input type="text" name="dui" maxlength="10"  title="Ingrese su Dui" placeholder="00000000-0" class="required form-control" minlength="10" required="true" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);">
               </td>
           </tr>
        <tr>
        <td> Nombre:</td>
             <td><input type="text" name="nombre" title="Ingrese su Nombre" placeholder="Ingrese Su Nombre" class="required form-control" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
              </tr>
            <tr>
                <td>Apellido:</td>
               <td><input type="text" name="apellido" title="Ingrese su Apellido" placeholder="Ingrese Su Apellido" class="required form-control" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
           </tr>
           <tr>
                <td>Foto:</td>
               <td><input type="File" title="Ingrese su Foto" name="foto" required="true">
               </td>
                 </tr>

             <tr>
                <td>
                    Gènero:
                </td>
               <td >
                Hombre <input type="radio" name ="genero" value="Hombre" required="">
                Mujer <input type="radio" name ="genero" value="Mujer" required=""> 
               </td>
             </tr>
                  <tr>
                <td>
                    Fecha de Vencimiento:
                </td>
               <td>
                   <div class="input-group">                   
                    <input type="date"  title="Ingrese la fecha de vencimiento del Dui" name="fecha" id="fechac" class="required form-control">
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
                <textarea name="direccion" title="Ingrese su Direccion" cols="80" rows="3" placeholder="Ingrese Su Direcciòn" class="required form-control" minlength="2" required="true" onkeydown="return validarLetras(event)"></textarea>
                   
               </td>
           </tr>
            <tr>
            
                <td>
                    Departamento:
                </td>
               <td>
               <Select name="iddepa" id="depto"  title="Seleccione su Departamento" class="required form-control" required="true" onkeypress="return validarLetras(event)">
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
               </td>
               </tr>
                 <tr>
                <td>
                 Municipio:
                </td>
               <td>
               <Select name="idmuni" id="municipio" title="Seleccione su Municipio" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
               </select>
               </td>
           </tr>             
            <div class="row">
                <td colspan="5">
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary">
                   <a href="index.php"><input type="button" name='bot' value='Cancelar' class="btn btn-primary"></a>
                </td>
            </div> 
        </table>
     </form>
</tr>
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
<br><br>
 </center>
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