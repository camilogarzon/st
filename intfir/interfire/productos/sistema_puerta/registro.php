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
	                   
	                   <!-- PUERTAS CORTA FUEGO -->
	                   
	                   <fieldset>
	                   		<legend>Puertas Cortafuego</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Clasificación en horas</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                        <div class="one_fourth"><label for="name">Dispositivo de cierre</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Fecha instalación</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Señalización adecuada</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Aprobado UL/FM</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                        <div class="one_fourth"><label for="name">Tipo de cerramiento</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ultimo mantenimiento -->
	                   
	                   <fieldset><legend>mantenimiento</legend>
                    <p>
                    	<div class="one_half"><label for="name">Fecha ultimo mantenimiento</label></div>
                        <div class="one_half last"><input type="text" name="name" value="fecha" class="sftable" /></div>
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