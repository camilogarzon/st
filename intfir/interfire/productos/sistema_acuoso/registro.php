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
                    	<div class="one_fourth"><label for="name">Desginación del Sistema</label></div>
                    	<div class="one_fourth "> <input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Fabricante del sistema</label></div>
                    	<div class="one_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Fecha de instalación</label></div>
                    	<div class="one_fourth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Contrato de mantenimiento</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TIPO DE AGENTE EXTINTOR -->
	                   
	                   <fieldset><legend>Tipo de angente extintor</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo de agente extintor</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Bicarbonato de portasio&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Acetato potasico &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Combinación carbonato de potasio / acetato de potasio 
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CILINDROS DE AGENTE -->
	                   
	                   <fieldset><legend>Cilindros de agente extintor acuoso</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Presión normal</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /> psi (bar)</div>
                    	<div class="one_fourth"><label for="name">Presión minima según fabricante</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /> psi (bar)</div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Peso normal</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /> lb (kg)</div>
                    	<div class="one_fourth"><label for="name">Peso mínimo según fabricante</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /> lb (kg)</div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- EQUIPO PROTEGIDO -->
	                   
	                   <fieldset><legend>Equipo protegido</legend>
	                <p>
                    	<div class="one_fourth"><label for="name">Equipo protegido</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Freidoras&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Parrillas altas&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Planchas &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="3" /> Quemadores &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="4" /> Parrillas &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="5" /> Conductos &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="6" /> Otros
                        </div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Otros</label></div>
                        <div class="three_fourth last">
                        <input type="text" name="name" class="sftable" />
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- cartucho propelente de gas -->
	                   
	                   <fieldset><legend>cartucho propelente de gas</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Se dispone cartucho propelente de gas?</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_sixth"><label for="name">(En caso afirmativo) Peso normal (CO2)</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /> lb (kg)</div>
                    	<div class="one_sixth"><label for="name">presión normal (Nitrogeno)</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /> psi (bar)</div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMA DE ALARMA-->
	                   
	                   <fieldset><legend>SISTEMA DE ALARMA</legend>
                    <p>
                    	<div class="one_half"><label for="name">Esta conectado a un sistema de alarma?</label></div>
                        <div class="one_half last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SCORTE AUTOMATICO-->
	                   
	                   <fieldset><legend>Corte automático</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Corte automático del equipo de cocina</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_fourth"><label for="name">En caso afirmativo</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Gas</option><option value="1">Electrico</option> </select></div>
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