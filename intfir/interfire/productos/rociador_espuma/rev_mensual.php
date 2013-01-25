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
	                   
	                   <!-- TABLA MENSUAL-->
	                   
	                  	<fieldset>
	                   	<legend>Revisión Mensual</legend>
	                   	
	                   	<ul>
	                   	<li>1- Si las conexiones para el departamento de bomberos no están obstruidas y en buen estado anotar Si. Si no, ver que se realizan correcciones oportunas y describirlas en Notas.</li>
	                   	<li>2- Si las válvulas están bloqueadas anotar Si. Si algunas no, bloquear y anotar Si.</li>
	                   	<li>3- Asegurarse que los dispositivos de alarma están libres de daños físicos y que las conexiones eléctricas son seguras. Si es así, anotar Si. Si no, ver que se realizan las correcciones oportunas y describirlas en Notas.</li>
	                   	<li>4- Registrar la presión del agua . Si hay una diferencia de 10% o mas, investigar la causa, evaluar el impacto sobre el funcionamiento del sistema y describirlo en Notas.</li>
	                   	<li>5- Anotar Si si las instrucciones están disponibles. Si no, ver que se realizan las correcciones oportunas y describirlas en Notas.</li>
	                   	<li>6- Inspeccionar las boquillas para comprobar que tengan adecuada orientación, que no se encuentren bloqueadas y que las tapas (si tienen) estén en su lugar.</li>
	                   	<li>7- Inspeccionar que todas las válvulas en el proporcionador están en la posición adecuada.</li>
	                   	<li>8- Inspeccionar el tanque de espumógeno para comprobar que está lleno y no hay indicios de corrosión importante.</li>
	                   	<li>9- Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes.</li>
	                   	</ul>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="75%" />
			                <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="75%" />
			                    <col class="con0" width="25%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Conexiones para el departamento de bomberos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Valvulas bloqueadas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de alarma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                <tr>
			                    <td>Presi—n del agua</td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Instrucciones disponibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Boquillas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Valvulas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Tanque de espumogeno</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
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