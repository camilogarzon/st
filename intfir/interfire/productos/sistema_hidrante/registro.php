<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci�n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Fecha</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci�n</option><option value="1">Dise�o</option><option value="2">Auditor�a</option><option value="3">Interventor�a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- PUERTAS CORTA FUEGO -->
	                   
	                   <fieldset>
	                   		<legend>Hidrantes</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo</label></div>
                        <div class="one_fourth">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Cilindro seco</option>
	                          <option value="1">Cilindro humedo</option>
	                          <option value="2">Hidrante pared</option>
	                          <option value="3">Hidrante petrolero</option>
	                        </select>
                        </div>
                        <div class="one_fourth"><label for="name">Caseta hidrante</label></div>
                        <div class="one_fourth last">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Fecha instalaci�n</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">V�lvula de apertura previa</label></div>
                        <div class="one_fourth">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                        <div class="one_fourth"><label for="name">Boquilla monitor</label></div>
                        <div class="one_fourth last">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOQUILLA MONITOR -->
	                   
	                   <fieldset>
	                   		<legend>Boquilla monitor</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo</label></div>
                        <div class="one_fourth">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Cobra</option>
	                          <option value="1">Doble cremallera</option>
	                        </select>
                        </div>
                        <div class="one_fourth"><label for="name">Boquilla</label></div>
                        <div class="one_fourth last">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Chorro niebla</option>
	                          <option value="1">Hydroflow</option>
	                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CASETA DE HIDRANTES -->
	                   
	                   <fieldset>
	                   		<legend>Caseta de hidrantes</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Manguera de 2 1/2"</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Manguera de 1 1/2"</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Llave apertura valvula</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Llave apertura hidrante</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Llave spaner</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Reducci�n de 2 1/2" a 1 1/2"</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Bifurcacion de 2 1/2" a 1 1/2"</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ultimo mantenimiento -->
	                   
	                   <fieldset> <legend>mantenimiento</legend>
                    <p>
                    	<div class="one_half"><label for="name">Fecha �ltimo mantenimiento</label></div>
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