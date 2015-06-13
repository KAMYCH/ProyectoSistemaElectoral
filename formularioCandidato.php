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
<meta property="og:title" content=""/>
<link rel="shortcut icon" href="imgs/kamy.jpg">
<title>Sistema de votación</title>
<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/jquery-ui/js/jquery.validate.min"></script>
<script src="./libs/jquery-ui/js/jquery.validate"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>
<script src="./libs/validacion_text_y_num.js"></script>
<script src="./libs/jquery.validate.min.js"></script>        
<script src="./libs/jquery.messages.min.js"></script>
<script src="./libs/skel-layers.min.js"></script>
 <link rel="stylesheet" href="css/miestylo.css">
<script languaje="javascript">
function habilita(form)
{
form.partidario.disabled=false;
}
function deshabilita(form)
{
form.partidario.disabled=true;
}
function submitForm(form){
oForm = window.document.forms[form];
formLen    = oForm.elements.length

  for (i=0; i<formLen; i++)
  {
    switch (oForm.elements[i].type)
    {
      case 'radio':
      if (oForm.elements[i].checked)
        if (oForm.elements[i].value != 'Partido'){
          valor = oForm.elements[i].value;
          document.forms[form].partidario2.value = valor;
        }
        else
        {
        if (document.forms['habilitar'].partidario.value != '' && document.forms['habilitar'].partidario.value!=0)
              {
      valor = document.forms['habilitar'].partidario.value;
      document.forms[form].partidario2.value = valor;
              }
        else{
          alert('Debe seleccionar un tipo de candidatura');
          return false
        }
      }
      break; 
    }
  }
  window.document.forms[form].submit()
}
</script>
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
<body onload="javascript:document.forms[0].partidario.disabled=true;" class="inicio">
<header>
<img src="imgs/KAMY LOGO.png" width="200 px" height="70 px" ><br>
<p>Formulario De Inscripción De Candidato</p>
</header>
<center>
<table>
  <form action="manejadorCandidato.php?accion=save" id="file-submit" enctype="multipart/form-data" method="post">
         

        <tr>
          <td>Dui</td>
          <td>
             <input type="text" name="dui" maxlength="10"  title="Ingrese su Dui" placeholder="00000000-0" class="required form-control" minlength="10" required="true" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);">
          </td>
        </tr>

          <tr>
                <td> Apellido: </td>
               <td>
                   <input type="text"  title="Ingrese su Apellido"  name="apellido" class="required form-control" placeholder="Apellido Candidato" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
               </tr>
              <tr>
                <td>
                    Nombre:
                </td>
               <td>
                   <input type="text"   title="Ingrese su Nombre" name="nombre" placeholder="Nombre Candidato" class="required form-control" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
           </tr>  
           <tr>
                <td>
                  Departamento:
                </td>
                <td>
                   <Select name="iddepa" title="Seleccione su Departamento" id="depto" class="required form-control" required="true" onkeypress="return validarLetras(event)">
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
                   <Select name="idmuni" title="Seleccione su Municipio" id="municipio" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
               </select>
               </td>
           </tr> 
          <tr>
            <td>tipo candidatura: </td>
               <td>       
              <input type="radio" title="Seleccione su Candidatura" name ="tipocandi" onClick="habilita(this.form)" value="Partido"> Partido
              <input type="radio" title="Seleccione su Candidatura" name ="tipocandi" onClick="deshabilita(this.form)" value="Coalision"> Coalisión
              <input type="radio" title="Seleccione su Candidatura" name ="tipocandi" onClick="deshabilita(this.form)" value="Independiente"> Independiente
               </td>
           </td>
         </tr>
            <tr>
                <td>
                Seleccione:
                </td>
                <td>
              <Select name="partido" title="Seleccione Partido" class="required form-control" required="true" onkeypress="return validarLetras(event)">
               <option value="">[..Seleccionar...]</option>
                <?php
                  $result = $conexion->query("SELECT * FROM inscri_partido");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['nombre_partido'].'">'.utf8_encode($row['nombre_partido']).'</option>';
                  }
                }
                  ?>
               </select>
               </td>
           </tr>         
                 <tr> 
                <td>
                    Departamento:
                </td>
               <td>
               <Select name="depa"  title="Seleccione su Departamento"id="depto1" class="required form-control" required="true" onkeypress="return validarLetras(event)">
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
               <tr>
             <td> Municipio:</td>
                <td>
                   <Select name="muni" title="Seleccione su Municipio" id="municipio1" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option> </select>
                    </td>        
                </tr> 
       <tr>
                <td>
                  Cargo:
                </td>
                <td>
                   <Select name="idcargo" title="Seleccione Cargo" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                        <option value="">[Seleccionar...]</option>
                  <?php
                  $result = $conexion->query("SELECT * FROM cargo" );
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['tipo_cargo'].'">'.utf8_encode($row['tipo_cargo']).'</option>';
                  }
                }
                  ?>
               </select>
               </td>
           </tr> 
      <tr>
                <td>
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary"> 
                     <a href="index.php"><input type="button" name='bot' value='Cancelar' class="btn btn-primary"></a>        
                </td>
            </td>
          </tr>
        </table>
    </form>
<div class="panel-heading">
            <a href="cerrar.php" class="label label-warning">cerrar sesion</a>
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

</div>
 <script language="javascript">
    $(document).ready(function(){
        $("#depto1").change(function () {
            $("#depto1 option:selected").each(function () {
                id_depto = $(this).val();
                $.post("municipios.php", { id_depto: id_depto }, function(data){
                    $("#municipio1").html(data);
                });
            });
        })
    });
 </script>

</div>
<br>
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