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
	                   	<li>1- Si las v�lvulas est�n abiertas y precintadas anotar Si en la casilla. Si existen algunas no precintadas, volver a precintar y anotar Si.</li>
	                   	<li>2- Si todas las boquillas est�n en buenas condiciones y no est�n bloqueadas, anotar Si en la casilla. Si no, ver las correcciones que se han realizado y anotarlas en Notas.</li>
	                   	<li>3- Asegurarse de que el recinto en que se encuentra la v�lvula se mantiene por encima de 4,4�C.</li>
	                   	<li>4- Asegurarse que la v�lvula de diluvio o de preacci�n est� libre de da�os, las v�lvulas de disparo est�n en la posici�n correcta y todos los componentes est�n en uso.</li>
	                   	<li>5- Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes.</li>
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
			                <td>V�lvulas precintandas</td>
			                <td>boquillas</td>
			                <td>recinto de la v�lvula calefactado</td>
                            <td>v�lvula de diluvio</td>
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