<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegistrarUsuarioD</title>
	<link rel="stylesheet" href="../css/diseñomenu.css">
	<link rel="stylesheet" href="../css/RUsuario.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
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
		<form action="" method="POST">
			<h2>Registrar usuario</h2>
			<br>
			 <li><i class="fa fa-fw fa-spinner"></i>Tipo de usuario:
            <select name="Tipo" style="font-size: 15px; width: 130px; height: 40px; border-radius: 6%;"> <!-- AQUI VA EL TIPO DE USUARIO -->
				<option selected>Seleccionar..</option>
				<option >Administrador</option>
				<option >Normal</option>
				</select></li><br>
			<li><i  class="fa fa-fw fa-user"></i>Nombre de usuario: <input type="text" class="form-control" name="NombreUsuario" autofocus></li>
            <li><i  class="fa fa-fw fa-lock"></i>Contraseña: <input type="password" class="form-control" name="Contraseña" autofocus></li>
             <li><i  class="fa fa-fw fa-check"></i>Confirmar contraseña: <input type="password" class="form-control" name="ConfirmarContraseña" autofocus></li>
          <button type="submit" class="submit-btn"  value="Guardar" >Guardar</button>
        </form>
      <table class="table">
        <thead>
          <tr>
          	<th>Tipo de usuario:</th>
            <th>Usuario:</th>
            </tr>
        </thead>
        
</section>
</body>
</html>