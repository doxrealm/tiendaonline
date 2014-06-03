<?php
	
//*******************************************************************************************************************************
//  XML de provincias y municipios de España
//*******************************************************************************************************************************

include('config_db.php');

header("Content-type: text/xml"); 
echo "<?xml version='1.0' encoding='ISO-8859-1'?>";


$sentencia = "SELECT municipios.nombre, provincias.nombre AS provincia, provincias.id_provincia
			  FROM municipios INNER JOIN provincias
			  ON provincias.id_provincia = municipios.provincia
			  ORDER BY provincias.id_provincia ASC";
		 
			  
$resultado = mysqli_query($conexion, $sentencia);

$cadena = "";


echo "<Espana>";

while(($fila = mysqli_fetch_object($resultado)) != NULL)
{
	if($fila->provincia != $cadena)
	{ 
		if ($cadena != "")
		{
			echo "</municipios>";
			
			echo "</provincia>";	
		}
		
		echo "<provincia>";
			
			echo "<cod>". $fila->id_provincia ."</cod>";
			
			echo "<nom>". $fila->provincia ."</nom>";
	
			echo "<municipios>";
	}

	echo "<Pob>". $fila->nombre ."</Pob>";	

	$cadena = $fila->provincia; 
	
}	

echo "</municipios>";

echo "</provincia>";			  		
	
echo "</Espana>";

mysqli_close($conexion);	

?>


