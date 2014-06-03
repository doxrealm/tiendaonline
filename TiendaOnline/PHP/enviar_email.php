<?php

//*******************************************************************************************************************************
//  ENVIAR EMAIL
//*******************************************************************************************************************************

include('config_db.php');



// Comprueba que existan todas las variables que se envían desde Javascript
//**************************************************************************
if(isset($_REQUEST['email']))
{
	$email = $_REQUEST['email'];
}
//**************************************************************************

$busqueda = "SELECT *
			 FROM clientes
			 WHERE email = '". $email ."'";
			 
$buscar_cliente = mysqli_query($conexion, $busqueda);

while(($fila = mysqli_fetch_object($buscar_cliente)) != NULL)
{
	if($email == $fila->email)
	{
		$asunto = "Recordatorio clave";
		
		$mensaje = "<p> Hola". $fila->nombre ." ". $fila->apellidos .", </p><br />
		 		    <p> Estas son sus credenciales: </p> <br /><br />
		            <p> Nick: ". $fila->nick ." </p><br />
		            <p> Password: ". $fila->pas ." </p><br /><br />
		            <p> Gracias por confiar en nosotros! </p>";

		mail($email, $asunto, $mensaje);
		
		echo "Se le ha mandado el correo con sus credenciales correctamente";
	}
	else
	{
		echo "El email no existe en nuestra base de datos";
	}
}	
		 	
?>