
                
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
	                   
	                   <!-- TABLA MENSUAL -->
	                   
	                  	<fieldset>
	                   	<legend>Inspección Mensual</legend>
	                   	
	                   	<ul>
	                   	<li>1- Confirmar que las válvulas están abiertas. Si las válvulas están cerradas anotar Si. Si no, cerrarla y anotar Si.</li>
	                   	<li>2- Inspecciónar las válvulas de alarma para asegurarse que no hay fugas ni daños físicos en la cámara de retardo o en las cámaras de drenaje. Confirmas que las válvulas de asiento estén en la posición correcta.</li>
	                   	<li>3- Asegurarse que existe el número y tipo correcto de rociadores y una llave inglesa adecuada.</li>
	                   	<li>4- Comprobar que no existan daños físicos y que las conexiones eléctricas sean seguras.</li>
	                   	<li>5- Registrar las lecturas de presión psi. Se deberá investigar cualquier pérdida de más de un 10%.</li>
	                   	<li></li>
	                   	</ul>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="18%" />
			                <col class="head0" width="18%" />
			                <col class="head1" width="12%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>1- Válvulas</td>
			                <td>2- Válvulas alarma</td>
			                <td>3- Rociadores de Repuesto</td>
			                <td>4- Dispositivos Alarma</td>
			                <td>5- Presión agua</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="18%" />
			                    <col class="con0" width="18%" />
			                    <col class="con1" width="12%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Cerradas</option>
			                    	<option value="1">Cerrada de nuevo</option>
			                    	<option value="2">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Abiertas</option>
			                    	<option value="1">Cerradas</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
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
                