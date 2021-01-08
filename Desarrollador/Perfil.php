<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil_Des</title>
	<link rel="stylesheet" href="../css/diseñomenu.css">
	<link rel="stylesheet" href="../css/perfil.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body translate="no">
	<input type="checkbox" id="check">
	<label for="check">
		<i class="fa fa-fw fa-bars" id="btn"></i>
		<i class="fa fa-fw fa-times" id="cancel"></i>
	</label>
	<div class="sidebar">
		<header>Desarrollador</header>
		<ul>
			<li><a href="menuDesarrollador.php"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
			<li><a href="Perfil.php"><i class="fa fa-fw fa-user"></i>Perfil</a></li>
			<li><a href="RegistrarUsuario.php"><i class="fa fa-fw fa-users"></i>Registrar Usuario</a></li>
			<li><a href="Categoria.php"><i class="fa fa-fw fa-plus-circle"></i>Registrar Categoria</a></li>
			<li><a href="consultarIncidencias.php"><i class="fa fa-fw fa-search"></i>Consultar incidencias</a></li>
			<li><a href="#"><i class="fa fa-fw fa-power-off"></i>Cerrar sesión</a></li>
		</ul>
	</div>
<section style="height: 100vh">
	<form >
		<h2>Editar perfil</h2>
		<li><i  class="fa fa-fw fa-info"> </i>Nombre completo :<input type="text" class="input-field" name="Nombre" required></li>
    <li><i  class = "fa fa-fw fa-user"></i>Nombre del usuario *:<input class="input-field" type="text" name="usuario" required></li>
    <li><i  class= "fa fa-fw fa-cog" ></i >Cargo laboral:<input type="text" class="input-field" name="Cargo" ></li>
    <li><i  class = "fa fa-fw fa-envelope"></i> Correo electronico:<input type="email" class="input-field" name="usuario"></li>
    <li><i  class = "fa fa-fw fa-phone"></i> Telefono:<input type="tel" class="input-field" name="telefono" ></li>
    <li><i  class = "fa fa-fw fa-lock"></i> Cambiar contraseña:<input type="password" class="input-field" name="contraActual" placeholder="Contraseña actual"><input type="password" class="input-field" name="contraNueva" placeholder="Contraseña nueva"></li>
    <button type="submit" class="submit-btn"  value="Actualizar" >Actualizar</button>
	</form>
</section>
</body>
</html>