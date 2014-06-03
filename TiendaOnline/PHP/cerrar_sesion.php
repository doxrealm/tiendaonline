<?php

//*******************************************************************************************************************************
// CIERRE SESIÓN CLIENTES
//*******************************************************************************************************************************

include('config_db.php');


session_start();


$_SESSION = array();
/*session_unset($_SESSION['nick']);
session_unset($_SESSION['pas']);
session_unset($_SESSION['nif']);
session_unset($_SESSION['nombre']);
session_unset($_SESSION['apellidos']);
session_unset($_SESSION['provincia']);
session_unset($_SESSION['municipio']);
session_unset($_SESSION['cp']);
session_unset($_SESSION['direccion']);
session_unset($_SESSION['telefono']);
session_unset($_SESSION['email']);
*/
session_destroy();

header("Location: ../Web/index.html");
exit;
?>