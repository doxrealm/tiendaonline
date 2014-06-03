<?php
/**
 * Vista de la pagina de contacto
 * 
 */
include ('cabecera.php');

?>


    
    <!-- div que muestra las opciones  de la opci�n principal elegida de la web -->
    
    <div id="divSubMenu">  
    <!-- InstanceBeginEditable name="regionEditDivSubMenu" -->		 
        <script> document.getElementById("divSubMenu").style.display = "none"; </script>
    <!-- InstanceEndEditable -->
    </div>
    
    
    
    <!-- div que muestra el resultado de cada opcion elegida -->
    
    <div id="divContenedor">
    <!-- InstanceBeginEditable name="regionEditDivContenido" -->
        
        <!-- div de diferentes  opciones de contacto con la tienda -->
        
        <!-- Opcion 1 -->
        
        <div id="divOpcionContacto1">   
         	
            <div id="divOpcionContacto1Titulo" class="divTitulo"> <span class="spanTitulo"> Direcci�n postal </span> </div>
            	
            
            <!-- Mapa fisico con la ubicaci�n de la empresa -->
            
			<iframe id="mapaUbicacion" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2990.6422099438983!2d2.1996789999999997!3d41.44698449999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bcec3b320811%3A0xc2f733befcd92827!2sCarrer+de+Clariana%2C+22!5e0!3m2!1ses!2ses!4v1398267727601" ></iframe>          
            
            
            <p id="pDireccionContacto">
            	Jamones de Espa�a e hijos S.A. <br />
                Calle Clariana 22 <br />
                08030 Barcelona, Barcelona <br />
                Espa�a
            </p>    
        </div>  
         

        <!-- Opcion 2 -->
        
        <div id="divOpcionContacto2">
            
            <div id="divOpcionContacto2Titulo" class="divTitulo"> <span class="spanTitulo"> Acceso telef�nico </span> </div>
            
            <p id="pTelContacto" class="pContactoNumeros"> Tel�fonos 902 148 800 // 902 149 200 </p>
            
            <p id="pFaxContacto" class="pContactoNumeros"> Fax: 931 899 010 </p>
  		</div>
            
        
        <!-- Opcion 3 -->
        
        <div id="divOpcionContacto3">    
            
            <div id="divOpcionContacto3Titulo" class="divTitulo"> <span class="spanTitulo"> Correo electr�nico </span> </div>
        
            <p id="pCorreoContacto"> jamonespanol@espana.es </p>
        </div>
    <!-- InstanceEndEditable -->
    </div>
</div>
</body>
<!-- InstanceEnd --></html>
