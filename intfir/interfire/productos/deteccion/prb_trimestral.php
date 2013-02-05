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
	                   
	                   <!-- TABLA TRIMESTRAL-->
	                   
	                  	<fieldset>
	                   	<legend>Prueba trimestral (para sistemas sin localización de señal)</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="75%" />
			                <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Descripción</td>
			                <td>Dato</td>
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
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" /></div></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" /></div></td>
			                </tr>
			                <tr>
			                    <td>Funciones</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Fusibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de hardware</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Lampara y LED's</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de energia principal</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Transpondedores</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de supervisión de señal (excepto interruptores antimanipulación)</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Otros equipos de transmisión</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
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