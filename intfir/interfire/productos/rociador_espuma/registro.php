<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci�n General</legend>
		                   
		             <p>
                    	<div class="one_sixth"><label for="name">A�o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci�n</option><option value="1">Dise�o</option><option value="2">Auditor�a</option><option value="3">Interventor�a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- GENERAL -->
	                   
	                   <fieldset>
	                   		<legend>General</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Ubicaci�n del Sistema</label></div>
                    	<div class="one_fourth "><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Sede</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" value="dato precargado"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Localizaci�n de la v�lvula de control </label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Se ha modificado el sistema desde la �ltima inspecci�n?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option> <option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Cual es el riesgo protegido?</label></div>
                    	<div class="three_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>	                   </fieldset>
	                   
	                   <!-- VALVULA -->
	                   
	                   <fieldset>
	                   		<legend>V�lvulas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Como est�n supervisadas las v�lvulas?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Precintadas</option><option value="1">Bloqueadas</option><option value="2">Interruptor antimanipulaci?n</option></select></div>
                    	<div class="one_fourth"><label for="name">Est�n las v�lvulas identificadas con alguna se�alizaci�n?</label></div>
                        <div class="one_fourth last"><select name="occupation"> <option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ABASTECIMIENTO DE AGUA -->
	                   
	                   <fieldset>
	                   		<legend>Abastecimiento de agua</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Cuando se realiz� la �ltima prueba de abastecimiento de agua?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select> </div>
                    	<div class="one_fourth"><label for="name">Est?n los dep�sitos, tanques de presi�n, etc, en buen estado?</label></div>
                        <div class="one_fourth last"><select name="occupation"> <option>Seleccione una</option> <option value="0">Si</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOMBAS -->
	                   
	                   <fieldset>
	                   		<legend>Bombas</legend>
	                <p>
                    	<div class="one_sixth"><label for="name">La bomba contra incendios es?</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Diesel</option><option value="1">El�ctrica</option><option value="2">Gasolina</option></option><option value="3">Ninguna de estas</option></select></div>
                    	<div class="one_sixth"><label for="name">Cuando se inspeccionaron las bombas por �ltima vez?</label></div>
                        <div class="one_sixth"> <input type="text" name="name" value="fecha" class="sftable" /> </div>
                    	<div class="one_sixth"><label for="name">La bomba est� en buenas condiciones?</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option> <option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CONEXIONES PARA EL DEPARTAMENTO DE BOMBEROS -->
	                   
	                   <fieldset>
	                   		<legend>CONEXIONES PARA EL DEPARTAMENTO DE BOMBEROS</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Ubicaci�n</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /></div>                    	
                        <div class="one_fourth"><label for="name">Existen placas identificadoras</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select> </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- INSTRUCCIONES DE MANEJO -->
	                   
	                   <fieldset>
	                   		<legend>Instrucciones de manejo</legend>
                    <p>
                    	<div class="one_half"><label for="name">Se han entregado la instrucciones de funcionamiento?</label></div>
                        <div class="one_half last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
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