<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>
<html>
<head>
<link rel="shortcut icon" href="imgs/kamy.jpg">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
<link rel="stylesheet" type="text/css" href="CSS/style1.css" />
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
	<title>INICIO</title>
</head>
<header>
<center><img src="imgs/KAMY LOGO.png" width="200 px" height="70 px"></center><br>
<p></p>
</header>
<body>

		      <center>
		<ul id="menu_left">
		
			<li><a href="formularioOpciones.php" accesskey="m">A<span class="key">p</span>ertura de Elecciones</a></li><br>

			<li><a href="formularioPartido.php" accesskey="s"><span class="key">I</span>nscripcion de Partidos</a></li><br>

			<li><a href="formularioCandidato.php" accesskey="n">Inscripcion de <span class="key">C</span>andidatos</a></li><br>

			<li><a href="./reporte/graficos.php" accesskey="m"><span class="key">R</span>esultados Preliminares</a></li><br>

			<li><a href="formularioVotante.php" accesskey="s"><span class="key">I</span>nscripcion de Ciudadano</a></li><br>

			<li><a href="votante1.php" accesskey="n">Emitir<span class="key">V</span>oto</a></li><br>
		<br> 
		 <a href="logout.php"><input type="button" name='bot' value='Salir' class="btn btn-primary"></center>

  <footer id="footer">
    Design <a href=""></a>  Kateryn Alejandra Hernandez And <a href=""> Yenifer Marisol Campos </a> Thanks to ITCA Fepade Regional Zacatecoluca
    <p> &copy; </p>
</footer>  
</body>
</html>
<?php
}else{
	echo '<script> window.location="inicioSesion.php"; </script>';
}
?>