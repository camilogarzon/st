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
	                   	<li>1- Comprobar que el tanque de abastecimiento está lleno si el nivel de agua no está supervisado.</li>
	                   	<li>2- Comprobar el manómetro de presión de aire para confirmar que se mantiene en un valor adecuado.</li>
	                   	<li>3- Comprobar el manómetro de presión de aire para confirmar que la presión del aire se mantiene gracias al compresor.</li>
	                   	<li>4- Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes.</li>
	                   	</ul>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Nivel de Agua</td>
			                <td>Presion de Aire en Deposito</td>
			                <td>Compresor Aire</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
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