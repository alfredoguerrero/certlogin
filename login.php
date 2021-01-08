<!DOCTYPE html>
<html lang="es" >

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CERT</title>
	<link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body  translate="no" style="background: #BBE8BE">
	<form action="database/validar.php" method="post" >
	<img src="img/logoLABSOL.png" alt="LOGO" width="100%">
	<h1 class="animate__animated animate__backInLeft">Sistema de registro de incidentes reportados en el CERT</h1>
	<input type="text" class="input-field" placeholder="Nombre de usuario" name="usuario" required>
	<input type="password" class="input-field" placeholder="contraseña" name="contraseña" required>
	<button type="submit" class="submit-btn" value="Ingresar">Ingresar</button>
	</form>
</body>
</html>