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
	                   
	                   <!-- TABLA SEMANAL -->
	                   
	                  	<fieldset>
	                   	<legend>Inspecci�n Semanal</legend>
	                   	
	                   	<ul>
	                   	<li>1- Si las v�lvulas est�n precintadas anotar Si, si algunas no est�n precintadas, precintar y anotar Si.</li>
	                   	<li>2- Si todos los rociadores est�n en buenas condiciones y el nivel del almacenamiento est� al menos 46 cm por debajo, anotar SI. Si no, ver las correcciones realizadas y describirlas en notas.</li>
	                   	<li>3 al 6 Registrar la presi�n en psi. Se deber� investigar cualquier p�rdida de m�s del 10%</li>
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
			                <td>1- V�lvulas precintadas</td>
			                <td>2- Rociadores OK</td>
			                <td>3- V�lvula de alarma OK</td>
			                <td>4- V�lvula de tuber�a seca</td>
			                <td>5- V�lvula de preacci�n</td>
			                <td>6- Presi�n del agua</td>
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
                