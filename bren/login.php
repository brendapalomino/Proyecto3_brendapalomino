<?php
	include 'session.php';

	if (isset($_POST['login'])) {
		$errors=array();

		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM `usuario` WHERE `alias` = '".$username."' AND `pwd` = '".$password."'";

		$result = mysqli_query($conexion, $sql);

		$row = mysqli_num_rows($result);
		if ($row==1) {
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['nivel'] = $row['nivel'];
			echo "Bienvenido! ".$_SESSION['username'];
			echo $_SESSION['nivel'];
			//header('location: recursos.php');
		} else {
			session_destroy();
			array_push($errors, "Usuario o Contraseña incorrectos");
		}
	}

	// Comprueba que la opción "Cerrar Sesión" se ha seleccionado
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}
	// Cierrra la conexión con la Base de datos
	mysqli_close($conexion);

?>
