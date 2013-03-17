<?php
require_once 'includes/generic_validate_session.php';
?>
<!-- head -->
<?php include("head.php"); ?>
<!-- head -->


<!-- header -->
<div class="header">
<?php include("header.php"); ?> 
</div>
<!-- header -->


<!-- sidebar -->
<div class="sidebar">
<?php include("sidebar.php"); ?>
</div>
<!-- sidebar -->

<!-- content -->
<div class="maincontent">

	<div class="contenedor">
	
	<h3>Encuesta de Satisfacci�n</h3>
	
	<p>Sabemos lo importante que es para usted contar siempre con proveedores que cumplan con sus expectativas de calidad y servicio; por tal raz�n nos gustar�a contar con unos minutos de su tiempo para responder esta encuesta. Su opini�n es muy importante para nosotros y sus respuestas son fundamentales para la implementaci�n de planes con el objeto de cumplir sus requerimientos y satisfacer sus necesidades en una forma m�s eficiente.</p>
	
	<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		            <p>
                    	<div class="one_sixth"><label for="name">Cliente</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Persona Contacto</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Tel�fono</label></div>
                        <div class="one_sixth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_sixth"><label for="name">Email</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Fecha</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
		                   <legend>Informaci�n General</legend>
                    <p>Califique los siguientes puntos con cualquiera de las siguientes calificaciones 5 (Excelente), 4 (Bueno), 3 (Regular), 2 (Malo), 1 (Muy Malo).</p>
		            <p>
                    	<div class="one_third"><label for="name">1. Calidad del servicio prestado por Interfire S.A.S.:</label></div>
                        <div class="one_third"><select name="occupation"><option>Seleccione una</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option></select></div>
                        <div class="one_third last"><input type="text" name="name" value="por qu�" class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_third"><label for="name">2. Cumplimiento del servicio:</label></div>
                        <div class="one_third"><select name="occupation"><option>Seleccione una</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option></select></div>
                        <div class="one_third last"><input type="text" name="name" value="por qu�" class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_third"><label for="name">3. Conocimientos de Interfire S.A.S. en el tema:</label></div>
                        <div class="one_third"><select name="occupation"><option>Seleccione una</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option></select></div>
                        <div class="one_third last"><input type="text" name="name" value="por qu�" class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_third"><label for="name">4. Acompa�amiento y asesoramiento pre y post venta:</label></div>
                        <div class="one_third"><select name="occupation"><option>Seleccione una</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option></select></div>
                        <div class="one_third last"><input type="text" name="name" value="por qu�" class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_third"><label for="name">5. Atenci�n prestada por el personal que realiz� el servicio:</label></div>
                        <div class="one_third"><select name="occupation"><option>Seleccione una</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option></select></div>
                        <div class="one_third last"><input type="text" name="name" value="por qu�" class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_third"><label for="name">6. Funcionalidad del software Interfirex:</label></div>
                        <div class="one_third"><select name="occupation"><option>Seleccione una</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option></select></div>
                        <div class="one_third last"><input type="text" name="name" value="por qu�" class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_third"><label for="name">7. Aspecto p�gina web:</label></div>
                        <div class="one_third"><select name="occupation"><option>Seleccione una</option><option value="0">1</option><option value="1">2</option><option value="2">3</option><option value="3">4</option><option value="4">5</option></select></div>
                        <div class="one_third last"><input type="text" name="name" value="por qu�" class="sftable" /></div>
                    </p>
		            <p>
                    	<div class="one_fourth"><label for="name">8. Qu� sugerencias desea realizar:</label></div>
                        <div class="three_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                        </div>
                    </form>
    
    </div>

</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->