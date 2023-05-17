<?php
	require "conexion.php";
	session_start();
	if($_POST){
		$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		
		$sql = "SELECT id, password, nombre, tipo_usuario FROM usuarios WHERE usuario ='$usuario'";
		$resultado = $mysqli->query($sql);
		$num = $resultado-> num_rows;
		
		if ($num>0){
			$row = $resultado->fetch_assoc();
			$password_bd = $row["password"];
			$pass_c = sha1($password);
			
			if($password_bd == $pass_c){
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['tipo_usuario'] = $row['tipo_usuario'];
				
				header("Location: /sistema/principal.php");
                session_start();
                $_SESSION['msj'] = "Ha ingresado correctamente";
				
				} else{
                    session_start();
                    $_SESSION['msj'] = "No existe el usuario";
				}
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Iniciar Sesion</title>
    <!-- LINK CSS -->
	<link rel="stylesheet" type="text/css" href="design.css">	
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- LINK PAGINA -->
	<link rel="shorcut icon" href="/sistema/logo/logo_sempertex.ico">
</head>

<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/globos.png">
		</div>
		<div class="login-content">
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<img src="img/logo_sempertex.ico">
				<h2 class="title">Bienvenido</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Usuario</h5>
						<input type="text" name="usuario" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Contraseña</h5>
						<input type="password" name="password" class="input">
					</div>
				</div>
				<a href="#">Recordar contraseña?</a>
				<input type="submit" class="btn" value="Iniciar Sesion">
			</form>
		</div>
	</div>
    <!-- LINK JAVASCRIPT -->
	<script type="text/javascript" src="functions.js"></script>
</body>

</html>