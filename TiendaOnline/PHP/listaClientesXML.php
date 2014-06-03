<?php
	
//*******************************************************************************************************************************
//  XML de clientes
//*******************************************************************************************************************************
	


include('config_db.php');

header("Content-type: text/xml");
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";



$sentencia = "SELECT * FROM clientes";

$resultado = mysqli_query($conexion, $sentencia);


echo "<clientes>";

while(($fila = mysqli_fetch_object($resultado)) != NULL)
{
	echo "<cl>";
			
		echo "<id>". $fila->id_cliente ."</id>";
		
		echo "<nick>". $fila->nick ."</nick>";
		
		echo "<pas>". $fila->pas ."</pas>";
		
		echo "<nif>". $fila->nif ."</nif>";
		
		echo "<nombre>". $fila->nombre ."</nombre>";
		
		echo "<apellidos>". $fila->apellidos ."</apellidos>";
		
		echo "<provincia>". $fila->provincia ."</provincia>";
		
		echo "<municipio>". $fila->municipio ."</municipio>";	
		
		echo "<cp>". $fila->cp ."</cp>";
		
		echo "<telefono>". $fila->telefono ."</telefono>";
		
		echo "<email>". $fila ->email ."</email>";
	
	echo "</cl>";
}

echo "</clientes>";

?>