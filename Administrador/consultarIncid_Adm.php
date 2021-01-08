<!DOCTYPE html>
<html lang="es" >
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu_Administrador</title>
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
		<header>Administrador</header>
		<ul>
			<li><a href="menuAdministrador.php"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
			<li><a href="perfilAdministrador.php"><i class="fa fa-fw fa-user"></i>Perfil</a></li>
			<li><a href="RCategoriaAdm.php"><i class="fa fa-fw fa-plus-circle"></i>Registrar Categoria</a></li>
			<li><a href="consultarIncid_Adm.php"><i class="fa fa-fw fa-search"></i>Consultar incidencias</a></li>
			<li><a href="#"><i class="fa fa-fw fa-power-off"></i>Cerrar sesión</a></li>
		</ul>
	</div>
	<section>
			<form action="" method="POST">
			<h2>Consultar incidencias:</h2>
			<li><i  class="fa fa-fw fa-font"></i>Título de la incidencia *: <input type="text" class="form-control" name="Nombreincidencia" autofocus> <input type="submit" name="buscar" class="btnBuscar" value="Buscar"> </li>
			<li><i class="fa fa-fw fa-info"></i>Descripción:<textarea name="description" rows="2" class="form-control2"></textarea></li> <!-- SI SE PUEDE QUE APAREZCA LA DESCRIPCION Y YA EL USUARIO REGISTRE LA SOLUCION-->
			<li><i class="fa fa-fw  fa-check-circle"></i>Solución:<textarea name="description" rows="2" class="form-control2"></textarea></li>
          <button type="submit" class="submit-btn"  value="Guardar" >Guardar</button>
        </form><!-- La tabla mostrara todas las incidencias y solo se podra registrar la solucion, ademas de poder modificar o eliminar las incidencias que desee -->
      <table class="consultarIncidencias" style="width: 50%; position: absolute; left: 250px; margin: 5px">
        <thead>
          <tr>
            <th>Categoría</th>
            <th>Fecha y hora</th>
            <th>Nivel estimado de daño</th>
            <th>Título</th>
            <th>Tecnología afectada</th>
            <th>Descripción</th>
            <th>Solución</th>
            <th></th>
          </tr>
        </thead>
 
</section>
</body>
</html>