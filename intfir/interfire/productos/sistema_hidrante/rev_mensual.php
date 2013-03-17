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
	                   
	                   <!-- CASETA DE HIDRANTES -->
	                   
	                   <fieldset>
	                   		<legend>Caseta de hidrantes</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Manguera de 2 1/2" (Check)</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="precargado" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Manguera de 1 1/2"</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="precargado" class="sftable_half" /><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Llave apertura valvula (Check)</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="precargado" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Llave apertura hidrante (Check)</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="precargado" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Llave spaner (Check)</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="precargado" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Reducción de 2 1/2" a 1 1/2" (Check)</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="precargado" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Bifurcacion de 2 1/2" a 1 1/2" (Check)</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="precargado" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA MENSUAL-->
	                   
	                  	<fieldset>
	                   	<legend>Inspección Mensual</legend>
	                   	
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
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Caseta #</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
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