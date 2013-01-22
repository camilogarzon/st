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
	                   
	                   <!-- INFORMACION EXTINTOR -->
	                   
	                   <fieldset>
		                   <legend>Extintor portatil</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Situacion del extintor</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Tipo de extintor</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Numero de Serie</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_sixth"><label for="name">Numero de indentificacion</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Fecha de compra</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA MANTENIMIENTO -->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion, Mantenimiento y Recarga</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="33%" />
			                <col class="head0" width="33%" />
			                <col class="head1" width="33%" />
			            </colgroup>
			            <tr>
			                <td>ID Extintor</td>
			                <td>Mensual (M), Anual (A), Recarga (R)</td>
			                <td>Notas</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="33%" />
			                    <col class="con0" width="33%" />
			                    <col class="con1" width="33%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Inspeccion Mensual</option><option value="1">Mantenimiento Anual</option><option value="1">Recarga Extintor</option></select></td>
			                    <td><input type="text" name="name" class="sftable" /></td>
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