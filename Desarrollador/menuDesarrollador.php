<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu_Desarrollador</title>
	<link rel="stylesheet" href="../css/diseñomenu.css">
	<link rel="stylesheet" href="../css/Categoria.css">
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
<section>
			<form action="" method="POST">
			<h2>Incidencias:</h2>
			<li><i class="fa fa-fw fa-spinner"></i>Categoría *:
            <select name="Categoria" class="opcion"> <!-- AQUI VAN LAS CATEGORIAS REGISTRADAS -->
				<option selected>Seleccionar..</option>
				</select></li><br>
			<li><i  class="fa fa-fw fa-exclamation-triangle"></i>Nivel estimado de daño *: 
			<input type="radio" name="Nivel" value="1"  >Bajo
			<input type="radio" name="Nivel" value="2"  >Medio
			<input type="radio" name="Nivel" value="3"  >Alto
			</li>
			<br>
			<li><i  class="fa fa-fw fa-font"></i>Título de la incidencia *: <input type="text" class="form-control" name="Nombreincidencia" autofocus></li>
          	<li><i  class="fa fa-fw fa-wrench"></i>Tecnología afectada *: <input type="text" class="form-control" name="Tecnología" autofocus></li>
			<li><i class="fa fa-fw fa-info"></i>Descripción *:<textarea name="description" rows="2" class="form-control2"></textarea></li>
          <button type="submit" class="submit-btn"  value="Guardar" >Guardar</button>
        </form> <!-- La tabla solo mostrara las incidencias registradas por el usuario para que pueda eliminar y modificar las suyas -->
      <table class="table">
        <thead>
          <tr>
            <th>Categoría</th>
            <th>Fecha y hora</th>
            <th>Nivel estimado de daño</th>
            <th>Titulo</th>
            <th>Tecnología afectada</th>
            <th>Descripcion</th>
            <th></th>
          </tr>
        </thead>
 
</section>
</body>
</html>