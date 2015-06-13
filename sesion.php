<?php session_start(); ?>
<?php 
	include './clases/Coneccion.php';
	if(isset($_REQUEST['bot'])){
		$sql = "SELECT * FROM usuario WHERE User ='";
		$sql .= $_REQUEST['User'];
		$sql .= "' AND clave ='";
		$sql .= md5($_REQUEST['clave']);
		$sql .= "';";
		
		$datos=consultaD($con,$sql);
		$numero = count($datos);

		if($numero =0){
			$_SESSION['usuario'] = $datos[0]['User'];
			$_SESSION['tipo'] = $datos[0]['rango'];
			$_SESSION['id_session'] = session_id();
			header("Location:principal.php");



		}else{
			header("Location:inicioSesion.php?msg=1");

		}

	}
 ?>