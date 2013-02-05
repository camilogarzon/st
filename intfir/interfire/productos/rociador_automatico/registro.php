
                
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
	                   
	                   <fieldset>
	                   		<legend>General</legend>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Nombre del Sistema</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Edificio</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Localización puesto Control</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Marca y Modelo Puesto Control</label></div>
                    	<div class="one_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Sistema de Rociadores</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Húmedo&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Seco &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Diluvio &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="3" /> Preacci&oacute;n
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Esta el edificio totalmente cubierto por rociadores?</label></div>
                        <div class="one_fourth"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                        <div class="one_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                        <div class="one_fourth"><label for="name">Esta todo el sistema de rociadores en condiciones de funcionamiento?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                        <div class="one_fourth"><label for="name">Se ha modificado el sistema de rociadores desde la última inspección?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- VALVULA -->
	                   
	                   <fieldset>
	                   		<legend>Válvula</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Cómo están supervisadas las válvulas?</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Con asiento&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Cerradas &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Interruptor antimanipulación &nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="language[]" value="3" /> Ninguna
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Están las válvulas identificadas con alguna señalización?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- abastecimiento de agua -->
	                   
	                   <fieldset>
	                   		<legend>Abastecimiento de agua</legend>
                    <p>
                    	<div class="one_half"><label for="name">Cuándo fue la última vez que se realizó una prueba de abastecimiento?</label></div>
                        <div class="one_half last">
                        <input type="text" name="name" value="fecha" class="sftable" />
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Están los tanques o los depósitos de presión en buen estado?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOMBAS -->
	                   
	                   <fieldset>
	                   		<legend>Bombas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">La bomba contra incendios es</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Diesel&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Eléctrica&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Gasolina&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="3" /> Ninguna de estas
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Cuándo se realizó una inspección a la bomba por última vez?</label></div>
                        <div class="one_half last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">La bomba está en buenas condiciones?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CONEXION CUERPO BOMBEROS -->
	                   
	                   <fieldset>
	                   		<legend>Conexión con el cuerpo de bomberos</legend>
                    <p>
                    	<div class="one_half"><label for="name">Localización?</label></div>
                        <div class="one_half last">
                        <input type="text" name="name"  class="sftable" />
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Existen señales indentificativas?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMAS HUMEDOS -->
	                   
	                   <fieldset>
	                   		<legend>Sistemas húmedos</legend>
                    <p>
                    	<div class="one_half"><label for="name">El edificio esta calefactado adecuadamente?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                          <option value="2">N/A</option>
                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">El sistema esta calculado hidráulicamente?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Hay señalizada alguna información sobre el cálculo hidráulico?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMAS SECOS -->
	                   
	                   <fieldset>
	                   		<legend>Sistemas secos</legend>
                    <p>
                    	<div class="one_half"><label for="name">La válvula del puesto de control está en un local calefactado?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                          <option value="2">N/A</option>
                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Tiene el local calefactado un local por baja temperatura?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                          <option value="2">N/A</option>
                        </select>
                        </div>
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
                
                
                 