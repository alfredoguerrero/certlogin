
<?php
$usuario=$_POST['usuario']; 
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']-$usuario;
$conexion=mysqli_connect("localhost", "root", " ","cert");
$consulta="SELECT* FROM usuarios WHERE usuario='$usuario'AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);
$filas=mysqli_num_rows($resultado)
if($filas){
	header("localhost:vistasPropietario/menudesarrollador.php")
}else {
	?>
	<?php
	include("login.php");
	?>
	echo "<script>alert('!Correo o contraseña incorrecto!')</script>";
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);