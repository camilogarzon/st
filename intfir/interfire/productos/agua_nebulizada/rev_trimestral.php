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
                    </p>	                   </fieldset>
	                   
	                   <!-- TABLA SEMANAL -->
	                   
	                  	<fieldset>
	                   	<legend>Revision Trimestral</legend>
	                   	
	                   	<ul>
	                   	<li>1- Comprobar el man�metro de presi�n de aire para confirmar que se mantiene una presi�n adecuada.</li>
	                   	<li>2- Inspeccionar los componentes de operaci�n, incluyendo las v�lvulas de control.</li>
	                   	<li>3- Inspeccionar los interruptores de flujo, v�lvula, e interruptores de supervisi�n del dep�sito.</li>
	                   	<li>4- Inspeccionar los dispositivos iniciadores y detectores.</li>
	                   	<li>5 - Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes.</li>
	                   	</ul>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="17%" />
			                <col class="head0" width="17%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Presion Aire</td>
			                <td>Componenetes operacion</td>
			                <td>Flujo de Agua y Supervision</td>
			                <td>Dispositivos de iniciacion</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="17%" />
			                    <col class="con0" width="17%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Correcto</option>
			                    	<option value="1">Incorrecto</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Correcto</option>
			                    	<option value="1">Incorrecto</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Correcto</option>
			                    	<option value="1">Incorrecto</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Correcto</option>
			                    	<option value="1">Incorrecto</option>
			                    	</select></td>
			                   </tr>
			            </table>
				       
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