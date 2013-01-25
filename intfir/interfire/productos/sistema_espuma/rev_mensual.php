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
	                   
	                   <!-- TABLA MENSUAL -->
	                   
	                  	<fieldset>
	                   	<legend>Revisión Mensual</legend>
	                   	
	                   	<ul>
	                   	<li>1- Si las conexiones para el Departamento de Bomberos no están obstruidas y en buen estado anotar Si. si no, ver que se realizan las correcciones y describirlas en Notas.</li>
	                   	<li>2- Si las válvulas están bloqueadas anotar Si. Si no, bloquear y anotar Si.</li>
	                   	<li>3- Inspeccionar las condiciones de los dispositivos de descarga de espuma, para asegurarse que no están dañados, bloqueadas, o afectados de alguna manera.</li>
	                   	<li>4- Inspeccionar el tanque de espumógeno para asegurarse de que está lleno. El líquido debería llegar hasta la mitad del vaso de expansión.</li>
	                   	<li>5- registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes.</li>
	                   	</ul>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Conecxiones para el departamento de bomberos</td>
			                <td>Valvulas bloqueadas</td>
			                <td>Produccion de espuma</td>
			                <td>Nivel de concentracion de espuma</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
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