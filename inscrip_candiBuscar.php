<?php include './clases/Coneccion.php';?> 
<pre>
<?php $sql ="SELECT * FROM inscrip_candi WHERE id ='".$_REQUEST['id']."';"; $datos=consultaD($con, $sql,3)?> 
</pre>
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
<script src="./libs/jquery-ui/js/jquery.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>
<script src="./libs/validacion_text_y_num.js"></script>
<script src="./libs/jquery.validate.min.js"></script>        
<script src="./libs/jquery.messages.min.js"></script>
<script src="./libs/skel-layers.min.js"></script>
<link rel="stylesheet" href="css/miestylo.css">
</head>

<body class="inicio">

<header>
</header>
 <table > 
              <center>
                    <img src="imgs/KAMY LOGO.png"><br>
              <p>Formulario De Inscripción De Candidato</p>
        <form class="pager" action="modificarCandidato.php?accion=con" method="post" id="candidato">
              <input type="hidden" name="id" 
               value='<?php print $datos[0][0]?>'>
        <tr>
          <td>Dui</td>
          <td>
             <input type="text" name="dui" maxlength="10"  title="Ingrese su Dui" placeholder="00000000-0" value='<?php print $datos[0][1]?>' class="required form-control" minlength="10" required="true" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);">
          </td>
        </tr>

             <tr>
               <td> Apellido: </td>
               <td><input type="text"  title="Ingrese su Apellido"  name="apellido"  value='<?php print $datos[0][2]?>'class="required form-control" placeholder="Apellido Candidato" minlength="2" required="true" onkeypress="return validarLetras(event)"> </td>
             </tr>

              <tr>
                <td>Nombre:</td>
               <td> <input type="text"   title="Ingrese su Nombre" name="nombre" placeholder="Nombre Candidato" value='<?php print $datos[0][3]?>' class="required form-control" minlength="2" required="true" onkeypress="return validarLetras(event)"></td>
              </tr> 
            
              <tr>
                <td>Departamento:</td>
                <td><Select name="iddepa" title="Seleccione su Departamento" id="depto" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                <option value='<?php print $datos[0][4]?>'></option>    
                  <?php
                  $sql2="SELECT nombre from departamentos where codigo='".$datos[0][4]."'"; 
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0]; ?> </option>
                        <?php                
                            $sql = "SELECT codigo,nombre FROM departamentos WHERE codigo != '".$datos[0][4]."'";
                        $datos = consultaD($con, $sql);
                      foreach ($datos as $value) { print "<option value='"; print $value['codigo']; print "'>";
                                print $value['nombre']; print "</option>";
                            }                
                        ?>
                    </select> 
                    </td>   
                 </tr>

              <tr>
                <td>Municipio:</td>
                <td><Select name="idmuni" title="Seleccione su Municipio" id="municipio" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                <option value='<?php print $datos[0][5]?>'></option></select>
                 </td>
              </tr> 

              <tr>
                <td>tipo candidatura: </td>
                <td><input type="radio" title="Seleccione su Candidatura" name ="tipocandi" onClick="habilita(this.form)" value='<?php print $datos[0][6]?>'> Partido 
                <input type="radio" title="Seleccione su Candidatura" name ="tipocandi" onClick="deshabilita(this.form)"  value='<?php print $datos[0][6]?>'> Coalisión
                <input type="radio" title="Seleccione su Candidatura" name ="tipocandi" onClick="deshabilita(this.form)"value='<?php print $datos[0][6]?>'> Independiente
                </td>
           </tr>

            <!--<tr>
             <td>Seleccione:</td>
                <td><Select name="partido" title="Seleccione Partido" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                    <option value='<?php print $datos[0][7]?>'>
                        <?php 
                         $sql2="SELECT nombre_partido 
                                 from incri_partido
                               where id_inscrip_parti
                                 ='".$datos[0][7]."'";
                             $da = consultaD($con,$sql2,3);                       
                              print $da[0][0];
                                 ?>
                              </option>
                            </select>
                         </td>
                      </tr>
                          
                 <tr> 
                <td>Departamento:</td>
               <td><Select name="depa"  title="Seleccione su Departamento"id="depto1" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                       <option value='<?php print $datos[0][8]?>'> 
                        <?php 
                        $sql2="SELECT nombre from departamentos where nombre='".$datos[0][8]."'";
                        $da = consultaD($con,$sql2,3);                       
                        print $da[0][0];
                        ?>
                        </option>
                        <?php                
                            $sql = "SELECT nombre FROM departamentos WHERE nombre != '".$datos[0][8]."'";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['nombre'];
                                print "'>";
                                print $value['nombre'];
                                print "</option>";
                            }                
                        ?>
                     </select>
                    </td>
                  </tr> 

               <tr>
                <td> Municipio:</td>
                <td><Select name="muni" title="Seleccione su Municipio" id="municipio1" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                  <option value='<?php print $datos[0][9]?>'></option>
                  </select>
                </td>        
              </tr> 

                 <tr>
                     <td>Cargo:</td>
                     <td><option value='<?php print $datos[0][10]?>'>
                         <?php 
                         $sql2="SELECT tipo_cargo from cargo where id='".$datos[0][10]."'";
                         $da = consultaD($con,$sql2,3);                       
                         print $da[0][0];
                         ?>
                         </option>
                        <?php                
                            $sql = "SELECT id,tipo_cargo FROM cargo WHERE id != '".$datos[0][10]."'";
                            $datos = consultaD($con, $sql);
                            foreach ($datos as $value) {
                                print "<option value='";
                                print $value['id_cargo'];
                                print "'>";
                                print $value['tipo_cargo'];
                                print "</option>";
                            }                
                        ?>
                     
                    <Select name="idcargo" title="Seleccione Cargo" class="required form-control" required="true" onkeypress="return validarLetras(event)">
                  <?php
                  $result = $conexion->query("SELECT * FROM cargo");
                  if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                  echo '<option value="'.$row['id'].'">'.utf8_encode($row['tipo_cargo']).'</option>';
                  }
                }
                  ?>
               </select>
               </td>
             </tr> 
         </table>
      </center>
      <input type="submit" name='bot' value='Enviar' class="btn btn-primary"> 
      <a href="index.php"><input type="button" name='bot' value='Cancelar' class="btn btn-primary"></a> 
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
</script> !-->
  
                  <input type="submit" name='bot' value='Enviar' class="btn btn-primary"> 
                 <a href="index.php">
                 <input type="button" name='bot' value='Cancelar' class="btn btn-primary"></a> 
      
                <div class="panel-heading">
                 <a href="cerrar.php" class="label label-warning">cerrar sesion</a>
               </div>
          </center>
        </form>
    </table>
<br>
<footer id="footer">
    Design <a href="" > Kateryn Alejandra Hernandez</a> And <a href=""> Yenifer Marisol Campos</a> Thanks to ITCA Fepade Regional Zacatecoluca
    <p> &copy; </p>

</footer> 
</body>
</html>