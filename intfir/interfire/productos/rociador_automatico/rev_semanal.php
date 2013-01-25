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
	                   
	                   <!-- TABLA SEMANAL -->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Semanal</legend>
	                   	
	                   	<ul>
	                   	<li>1- Si las válvulas están precintadas anotar Si, si algunas no están precintadas, precintar y anotar Si.</li>
	                   	<li>2- Si todos los rociadores están en buenas condiciones y el nivel del almacenamiento está al menos 46cm por debajo, anotar Si. Si no, ver las correcciones realizadas y describirlas en notas.</li>
	                   	<li>3-6 Registrar la presión en psi. Se deberá investigar cualquier pérdida de más del 10%</li>
	                   	<li>7- Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes.</li>
	                   	</ul>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="17%" />
			                <col class="head0" width="17%" />
			                <col class="head1" width="11%" />
			                <col class="head0" width="11%" />
			                <col class="head1" width="11%" />
			                <col class="head0" width="11%" />
			                <col class="head1" width="11%" />
			                <col class="head0" width="11%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Valvulas precintadas</td>
			                <td>Rociadores OK</td>
			                <td>Valvula de alarma OK</td>
			                <td>Valvula de tuberia seca</td>
			                <td>Valvula de preaccion</td>
			                <td>Presion del agua</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="17%" />
			                    <col class="con0" width="17%" />
			                    <col class="con1" width="11%" />
			                    <col class="con0" width="11%" />
			                    <col class="con1" width="11%" />
			                    <col class="con0" width="11%" />
			                    <col class="con1" width="11%" />
			                    <col class="con0" width="11%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                     <td><input type="text" name="email"  class="sftablehalf" /><input type="text" name="email"  class="sftablehalf" /></td>
                                  <td><input type="text" name="email"  class="sftablehalf" /><input type="text" name="email"  class="sftablehalf" /></td>
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
                