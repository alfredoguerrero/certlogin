<?php

session_start();

include("database/db.php");

if(isset($_POST['login']))//Aquí comprueba que los datos campos estén llenos.
{
    $name=$_POST['usuario'];
    $pass=$_POST['contraseña'];
    $_SESSION['usuario'] = $name;

    $check_line="select * from usuario where nomusuario='$name' AND tipousuario='Desarrollador' AND contraseña='$pass' ";

    $run_query=mysqli_query($dbcon,$check_line);

    if(mysqli_num_rows($run_query)>0)
    {

        echo "<script>window.open('Desarrollador/menuDesarrollador.php','_self')</script>";
    }
    else {
		
    	$check_line="select * from usuario where nomusuario='$name' AND tipousuario='Administrador' AND contraseña='$pass' ";

    	$run_query=mysqli_query($dbcon,$check_line);

		if(mysqli_num_rows($run_query)>0)
		{

			echo "<script>window.open('Administrador/menuAdministrador.php','_self')</script>";
		}
		else {
				
			$check_line="select * from usuario where nomusuario='$name' AND tipousuario='Normal' AND contraseña='$pass' ";
	
			$run_query=mysqli_query($dbcon,$check_line);
	
			if(mysqli_num_rows($run_query)>0)
			{
	
				echo "<script>window.open('usuario/menuUsuarioNormal.php','_self')</script>";
			}
			else {echo"<script>alert('Datos de usuario incorrectos..!')</script>"; }
		}
	}

}

mysqli_free_result($run_query);



?>