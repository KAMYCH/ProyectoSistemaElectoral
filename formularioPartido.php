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
<meta property="og:title" content=""/>
<link rel="shortcut icon" href="imgs/kamy.jpg">
<title>Sistema de votación</title>

<link href="./css/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="./libs/bootstrap/css/bootstrap.css">
<script src="./libs/jquery-2.1.0.js"></script>
<link rel="stylesheet" href="./libs/jquery-ui/css/smoothness/jquery-ui-1.10.4.custom.min.css">
<script src="./libs/validacion/jquery.validate.min.js"></script>
<script src="./libs/validacion/messages.js"></script>
<script src="./libs/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="./libs/validacion/validacion_text_y_num.js"></script>
<link rel="stylesheet" href="./libs/bootstrap-3.0.3-dist/dist/css/bootstrap.min.css">
<script src="./libs/jquery-ui/js/jquery-1.11.2.min.js"></script>
<script src="./libs/validacion_text_y_num.js"></script>
<script src="./libs/jquery.validate.min.js"></script>
<script src="./libs/jquery.messages.min.js"></script>
<script src="./libs/skel-layers.min.js"></script>
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
<header>
<img src="imgs/KAMY LOGO.png" width="200 px" height="70 px">
<p>Inscripción de Partido Politico</p>
</header>
 <table>
    <form action="manejadorPartido.php?accion=save" id="file-submit" enctype="multipart/form-data" method="post">
         
          <tr>
                <td>Nombre:</td>
               <td>
                   <input type="text" name="Nombre_partido" title="Ingrese su Nombre" class="required form-control" placeholder="Nombre de Partido" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
           </tr>
        <tr>
        <td>
        Bandera:
        </td>
        <td id="preview" class="thumbnail">
        <a href="#" id="file-select" title="Ingrese la Imagen de la Bandera" class="btn btn-default">Elegir archivo</a>
        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNzEiIGhlaWdodD0iM
        TgwIj48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijg1LjU
        iIHk9IjkwIiBzdHlsZT0iZmlsbDojYWFhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjEycHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhb
        nMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+MTcxeDE4MDwvdGV4dD48L3N2Zz4="/>
        <input class="input" id="filename" name="bandera" type="file"/>
      </td>
    </tr>
    <!--<span class="alert alert-info" id="file-info">No hay archivo aún</span>-->
        <tr>
                <td>
                    Dui:
                </td>
               <td>
                   <input type="text" name="Dui" title="Ingrese su Dui" maxlength="10" placeholder="00000000-0" class="required form-control" minlength="10" required="true" onkeyup="mascara(this,'-',patron3,true)" onkeypress="return justNumbers(event);">
               </td>
            <tr>
                <td> Representante:</td>
               <td>
                   <input type="text" name="Representante" title="Ingrese Nombre del Representante de Partido" class="required form-control" placeholder="Nombre Representante" minlength="2" required="true" onkeypress="return validarLetras(event)">
               </td>
           </tr>
             <tr>
                <td>
                    <input type="submit" name='bot' value='Enviar' class="btn btn-primary"> 
                     <a href="index.php"><input type="button" name='bot' value='Cancelar' class="btn btn-primary"></a>        
                </td>
            </tr>
        </table>
    </form>
</div>
<script>
    $(document).on('ready', function() {
    $('#preview').hover(
        function() {
            $(this).find('a').fadeIn();
        }, function() {
            $(this).find('a').fadeOut();
        }
    )
    $('#file-select').on('click', function(e) {
         e.preventDefault();
        
        $('#filename').click();
    })

    $('input[type=file]').change(function() {
        var file = (this.files[0].name).toString();
        var reader = new FileReader();
        
        $('#file-info').text('');
        $('#file-info').text(file);
        
         reader.onload = function (e) {
             $('#preview img').attr('src', e.target.result);
         }
         
         reader.readAsDataURL(this.files[0]);
    });
});
    </script>
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