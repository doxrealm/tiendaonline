<?php
//*******************************************************************************************************************************
// INICIO SESIÓN CLIENTES
//*******************************************************************************************************************************

  if(!session_id()) {
        session_start();
  }

include('config_db.php');


// Comprueba que existan todas las variables que se envían desde Javascript
//**************************************************************************
if(isset($_REQUEST['nick']) && isset($_REQUEST['pas']))
{
	$nick = $_REQUEST['nick'];
	
	$pas = $_REQUEST['pas'];
}
//**************************************************************************


$busqueda = "SELECT * 
			 FROM clientes
			 WHERE clientes.nick = '". $nick ."' AND clientes.pas = '". $pas ."'"; 
	
			 echo $busqueda;
$buscar_cliente = mysqli_query($conexion, $busqueda);


while(($fila =  mysqli_fetch_object($buscar_cliente)) != NULL)
{
	if($nick == $fila->nick)
	{
		$_SESSION['nick'] = $fila->nick;
		
		$_SESSION['pas'] = $fila->pas;
		
		$_SESSION['nif'] = $fila->nif;
		
		$_SESSION['nombre'] = $fila->nombre;
		
		$_SESSION['apellidos'] = $fila->apellidos;
		
		$_SESSION['provincia'] = $fila->provincia;
		
		$_SESSION['municipio'] = $fila->municipio;
		
		$_SESSION['cp'] = $fila->cp;
		
		$_SESSION['direccion'] = $fila->direccion;
		
		$_SESSION['telefono'] = $fila->telefono;
		
		$_SESSION['email'] = $fila->email;
		
		$_SESSION['conectado'] = true;
		
		echo 1;
	}
	else
	{
		echo 0;
	}
}
?>