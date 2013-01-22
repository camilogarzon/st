<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset><legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Fecha</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- GENERAL -->
	                   
	                   <fieldset> <legend>General</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Ubicaci&oacute;n del Sistema</label></div>
                    	<div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Fabricante del sistema</label></div>
                    	<div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Fecha de instalaci&oacute;n</label></div>
                    	<div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TIPO DE AGENTE -->
	                   
	                   <fieldset><legend>tipo de agente</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Designacion de la zona o area</label></div>
                    	<div class="one_fourth "> <input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Tipo de agente extintor</label></div>
                    	<div class="one_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo de agente</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Halon 1301</option><option value="1">Halon 1211</option><option value="2">Otros</option></select></div>
                    	<div class="one_fourth"><label for="name">Volumen protegido</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Falso techo</option><option value="1">Falso suelo</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- RECINTO -->
	                   
	                   <fieldset> <legend>recinto</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Concentracion del sistema</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> 50%&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> 65%&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> 75%&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="38" /> Otros
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- PESO -->
	                   
	                   <fieldset> <legend>peso</legend>
                   <p>
                    	<div class="one_fourth"><label for="name">Peso del halon  junto con el cilindro</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Peso del cilindro (tara)</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Peso del halon</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Presion normal (sobrepresion)</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMA DE DETECCION-->
	                   
	                   <fieldset> <legend>Sistema de deteccion</legend>
	                <p>
                    	<div class="one_fourth"><label for="name">Sistema de deteccion</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Detectores de humo ionicos</option><option value="1">Detectores de humo fotoelectricos</option><option value="2">Detectores de calor termovelocimetricos</option><option value="3">Detectores de calor de temperatura fija</option><option value="4">Detectores de calor de compensacion</option><option value="5">Otros</option></select></div>
                    	<div class="one_fourth"><label for="name">Tipo de deteccion para la activacion del sistema de halon</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Zona simple</option><option value="1">Dos zonas</option><option value="2"> Dos detectores por zona</option><option value="3">Otros</option></select></div>
                    </p>

	                   </fieldset>
	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset><legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>    
                    </form>