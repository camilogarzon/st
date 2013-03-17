<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Información General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Extintor</label></div>
                        <div class="one_sixth">ID Extintor</div>
                    	<div class="one_sixth"><label for="name">Fecha</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- INFORMACION EXTINTOR -->
	                   
	                   <fieldset>
		                   <legend>Extintor portatil</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Localización del extintor</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Tipo de extintor</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Ha sido modificada su ubicación</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_sixth"><label for="name">Numero de indentificación</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Numero de Serie</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA MANTENIMIENTO -->
	                   
	                  	<fieldset>
	                   	<legend>Inspección, Mantenimiento y Recarga</legend>
			        
			        <div class="sTableWrapper">
	                   
	                   <!-- TABLA MANTENIMIENTO 2 -->
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="9%" />
			                <col class="head0" width="8%" />
			                <col class="head1" width="9%" />
			                <col class="head0" width="8%" />
			                <col class="head1" width="9%" />
			                <col class="head0" width="8%" />
			                <col class="head1" width="9%" />
			                <col class="head0" width="8%" />
			                <col class="head1" width="9%" />
			                <col class="head0" width="10%" />
			                <col class="head1" width="10%" />
			            </colgroup>
			            <tr>
			                <td>Manometro y Presión</td>
			                <td>Sello Seguridad</td>
			                <td>Cilindro</td>
			                <td>Etiqueta</td>
			                <td>Acceso</td>
			                <td>Ubicación</td>
			                <td>Altura</td>
			                <td>Señalización</td>
			                <td>Rótulo Inspección Mensual</td>
			                <td>Fecha Mantenimiento</td>
			                <td>Fecha Vencimiento</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="9%" />
			                    <col class="con0" width="8%" />
			                    <col class="con1" width="9%" />
			                    <col class="con0" width="8%" />
			                    <col class="con1" width="9%" />
			                    <col class="con0" width="8%" />
			                    <col class="con1" width="9%" />
			                    <col class="con0" width="8%" />
			                    <col class="con1" width="9%" />
			                    <col class="con0" width="10%" />
			                    <col class="con1" width="10%" />
			                </colgroup>
			                <tr>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><input type="text" name="name" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="name" value="precargado + 1 año" class="sftable" /></td>
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