<?php
/**
 * Vista de la pagina del perfil de usuario registrado
 */
include ('cabecera.php');

?>

    
    
    <!-- div que muestra las opciones  de la opción principal elegida de la web -->
    
    <div id="divSubMenu">  
    <!-- InstanceBeginEditable name="regionEditDivSubMenu" -->		 
    
        <!-- Opciones para la pestaña  registrarse -->
        
        <div id="divOpcionesSubMenuPerfil" class="divOpciones">
     		
            <div class="divOpcionMenu"> <a href="perfil.php"> editar perfil </a> </div> 
                        
            <div class="divOpcionMenu"> <a href="baja.php"> baja </a> </div>
        </div>
    <!-- InstanceEndEditable -->
    </div>
    
    
    
    <!-- div que muestra el resultado de cada opcion elegida -->
    
    <div id="divContenedor">
    <!-- InstanceBeginEditable name="regionEditDivContenido" -->
    
        <!-- div para editar datos de usuario -->
        
        <div id="divEditarUser">
        
			<div id="divTituloEditar" class="divTitulo"> <span class="spanTitulo"> datos usuario </span> </div>
            
            <br /> 
            
            
            <!-- div donde se muestran y modifican datos del cliente -->
            
            <div id="divDatosUser">
            
                <label> Nick: </label> 
                
                <input type="text" id="inpTextNickNuevo"/> 
                
                <input type="button" id="buttonEditarNick" value="Editar"/>
                
               
                <br /><br />
                
                <label> Password: </label> 
                      
            	<input type="text" id="inpTextPasNuevo"/>
                
            	<input type="button" id="buttonEditarPas" value="Editar"/>                
                
                
                <br /><br />
                
                <label> NIF: </label> 
                      
            	<input type="text" id="inpTextNIFNuevo"/>
                
            	<input type="button" id="buttonEditarNIF" value="Editar"/>                
                
               
                <br /><br />
                
                <label> Nombre: </label> 
                      
            	<input type="text" id="inpTextNombreNuevo"/>
                
            	<input type="button" id="buttonEditarNombre" value="Editar"/>                
                
            
                <br /><br />
                
                <label> Apellidos: </label> 
                      
            	<input type="text" id="inpTextApellidosNuevo"/>
                
                <input type="button" id="buttonEditarApellidos" value="Editar"/>

          
               <br /><br />
                
                <label> Provincia: </label> 
            
            	<select id="selectProvinciaNuevo" onFocus="solicitar_provincias(selectProvinciaNuevo)"> </select>
                
            	<input type="button" id="buttonEditarPas" value="Editar"/>                
                
  
                <br /><br />
                
                <label> Municipio: </label> 
                      
            	<select id="selectMunicipioNuevo" onFocus="solicitar_municipios(selectProvinciaNuevo, selectMunicipioNuevo)"> </select>
                
                <input type="button" id="buttonEditarMunicipio" value="Editar"/>

                
                <br /><br />
                
                <label> CP: </label> 
                      
            	<input type="text" id="inpTextCPNuevo"/>
                
            	<input type="button" id="buttonEditarCP" value="Editar"/>
                
                
                <br /><br />
                
                <label> Direcci&oacute;: </label> 
                      
            	<input type="text" id="inpTextDireccionNuevo"/>
                
            	<input type="button" id="buttonEditarDireccion" value="Editar"/>
                
                
                <br /><br />
                
                <label> Tel&eacute;fono: </label> 
                      
            	<input type="text" id="inpTextTelefonoNuevo"/>
                
            	<input type="button" id="buttonEditarTelefono" value="Editar"/>
                
                
                <br /><br />
                
                <label> Email: </label> 
                      
            	<input type="text" id="inpTextEmailNuevo"/>
                
            	<input type="button" id="buttonEditarEmail" value="Editar"/>
            </div>

        </div>
    <!-- InstanceEndEditable -->
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
