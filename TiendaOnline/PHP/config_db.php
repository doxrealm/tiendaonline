<?php

//*******************************************************************************************************************************
//  INSERTAR CLIENTES
//*******************************************************************************************************************************


$conexion = mysqli_connect("127.0.0.1", "root");

mysqli_select_db($conexion, "tiendaonline");



// Comprueba la conexi�n. Si falla lanza un mensaje de aviso
//**************************************************************************
if(!$conexion)
{
	echo "Error de conexi�n a la Base de Datos: ". mysqli_connect_error();
}
//**************************************************************************


?>