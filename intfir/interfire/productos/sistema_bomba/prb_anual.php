<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Fecha</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
		                   <legend>Fabricante</legend>
		            <p>
                    	<div class="one_sixth"><label for="name">Fabricante de la bomba y modelo</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Tipo</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Centrifuga</option><option value="1">Turbina</option></select></div>
                        <div class="one_sixth"><label for="email">Fabricante controladores y modelo</label></div>
                        <div class="one_sixth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
                    
                    <p>
                    	<div class="one_sixth"><label for="name">Caudal nominal</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="gpm" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Fuente abastecimiento de agua</label></div>
                        <div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
                        <div class="one_sixth"></div>
                        <div class="one_sixth last"></div>
                    </p>
                    
                    <p>
                    	<div class="one_sixth"><label for="name">Velocidad nominal</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="rpm" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Presion normal</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="psi" class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Accionamiento</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Eléctrico</option><option value="1">Diesel</option><option value="1">Vapor</option></select></div>
                    </p>
                    
	                   </fieldset>
	                   
	                  	<fieldset>
	                   	<legend>Prueba Anua de Rendimiento</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="70%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Valor</td>
			                <td>Valor</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="70%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                </colgroup>
			                <tr>
			                    <td>6 intentos de arranque automático</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El arranque automático funciona correctamente</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La parada automática funciona correctamente</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Arranque automático</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Parada automática</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>6 intentos de arranque manual</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El arranque manual funciona correctamente</td>
			                    <td><input type="text" value="min" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La parada manual funciona correctamente</td>
			                    <td><input type="text" value="min" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Arranque manual</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Parada manual</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El arranque a distancia funciona correctamente</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La parada a distancia funciona correctamente</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Arranque a distancia</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Parada a distancia</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Tiempo total de funcionamiento</td>
			                    <td><input type="text" value="min" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>¿Se ha reseteado el controlador de tiempo de funcionamiento y se ha cambiado el papel para los gráficos?</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Datos de las pruebas y curvas de caudal completas  (adjuntar todas las curvas de caudal, de consumo eléctrico, de rendimiento, etc)</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>¿Se han registrado las diferentes lecturas para cada caudal en la bomba eléctrica?</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Velocidad del motor de la bomba contra incendios</td>
			                    <td><input type="text" value="rpm" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Caudal de descarga de la bomba</td>
			                    <td><input type="text" value="gpm" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Bomba jockey operativa</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La bomba jockey parece estar correctamente alineada</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las válvulas de la bomba jockey están abiertas</td>
			                    <td></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Arranque de la bomba jockey</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Parada de la bomba jockey</td>
			                    <td><input type="text" value="psi" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			            </table>
			        </div>
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