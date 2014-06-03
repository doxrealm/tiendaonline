<?php
/**
 * Vista de la pagina de recuperación de contraseña
 */
include ('cabecera.php');


?>
 
    <!-- div que muestra las opciones  de la opción principal elegida de la web -->
    
    <div id="divSubMenu">  
    <!-- InstanceBeginEditable name="regionEditDivSubMenu" -->		 
    
   		<div id="divOpcionesSubMenuRegistro" class="divOpciones">
        
			<div id="divOpcionRegAlta" class="divOpcionMenu"> <a id="aOpcionRegAlta" href="registrate.php"> alta </a> </div> 
                      
            <div id="divOpcionRegRec" class="divOpcionMenu" > <a id="aOpcionRegRec" href="recordar_contrasena.php" > recordar contraseña </a> </div>        </div>
   
        
    <!-- InstanceEndEditable -->
    </div>
    
    
    
    <!-- div que muestra el resultado de cada opcion elegida -->
    
    <div id="divContenedor">
    <!-- InstanceBeginEditable name="regionEditDivContenido" -->
    
	
    <!-- div para usuario que está registrado pero no se acuerda de las credenciales -->
    
	<div id="divRecUser" class="divRegistro">

        <div id="divTituloRec" class="divTitulo"> <span class="spanTitulo">  Usuario registrado </span> </div>
        
        <br /><br />
     
        
        <!-- div para formulario de recordatorio de credenciales -->
        
        <div id="divFormRecUser" class="divregistrate">
            
         	<form id="formRecUser" method="post" >   
				
                <label> E-mail </label> 
                
                <input type="email" id="inputRecEmail" size="50" maxlength="50"/>
                
                <label id="labelErrRecEmail"></label>
                
                <br /><br />
                
                <input type="button" id="buttonRec" class="button" value="Enviar" onClick="enviar_email()" />
            </form>
        </div>
        
        <br /><br />
    </div>       
        
    <!-- InstanceEndEditable -->
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
