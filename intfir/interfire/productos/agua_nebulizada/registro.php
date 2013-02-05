<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Información General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Fecha</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- GENERAL -->
	                   
	                   <fieldset><legend>General</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Ubicación del Sistema</label></div>
                    	<div class="one_fourth "><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Sede</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" value="dato precargado"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Localización de la válvula de control principal</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Se ha modificado el sistema desde la última inspección?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option> <option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Cual es el riesgo protegido?</label></div>
                    	<div class="three_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- VALVULA -->
	                   
	                   <fieldset>
	                   		<legend>Válvulas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Cómo están supervisadas las válvulas?</label></div>
                    	<div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Precintadas</option><option value="1">Bloqueadas</option><option value="2">Interruptor antimanipulació</option><option value="3">Ninguna</option></select></div>
                    	<div class="one_fourth"><label for="name">Están las válvulas identificadas con alguna señalización?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- abastecimiento de agua -->
	                   
	                   <fieldset>
	                   		<legend>Abastecimiento de agua</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Se filtra el suministro de agua?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_fourth"><label for="name">Si se utilizan tanques de almacenamiento, están en buen estado?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOMBAS -->
	                   
	                   <fieldset>
	                   		<legend>Bombas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Cuando se Inspecciónaron las bombas por última vez?</label></div>
                        <div class="one_fourth"><input type="text" value="fecha" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">La bomba está en buenas condiciones?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMAS SECOS -->
	                   
	                   <fieldset>
	                   		<legend>Sistema de detección</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Cuando se Inspecciónó el sistema de detección por última vez??</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Se han entregado instrucciones de funcionamiento?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    
                    </div>
                        
                    </form>