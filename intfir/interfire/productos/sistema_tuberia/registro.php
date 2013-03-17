<form id="registro_tuberia_mangueras">
    <script type="text/javascript">
        var form_registro_ = 'registro_tuberia_mangueras';var sdid = '<?php echo getUserIdSede(); ?>';var usrid = '<?php echo getUserId(); ?>';var pronum = '<?php echo $_GET['id']; ?>';var ladata = '';var jsonstr = '';var fecha = '';
        
        jQuery(document).ready(function(){
            applyDatepicker('registro_fecha');
            applyDatepicker('registro_campo15');
            responsible = '<?php echo getUserFullName(); ?>';
            registro_loadLastData();
        });
        
        function registro_savedata() {
            fecha = jQuery('#registro_fecha').val();
            if (fecha != ''){
                var sist = jQuery('#registro_sistema').val();
                var activ = jQuery('#registro_actividad').val();
                var nota = jQuery('#registro_notas').val();
                var evaid = jQuery('#registro_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>){
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_registro_);
                ladata = "op=evaluacion_save&sdid="+sdid+"&pronum="+pronum+"&usrid="+usrid+"&id="+evaid+"&form="+form_registro_+"&fecha="+fecha+"&sist="+sist+"&activ="+activ+"&content="+jsonstr+"&nota="+nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, registro_responseSave);
            }
        }
        
        function registro_responseSave(data){
            cursorNormal();
            if (data.output.valid){
                registro_loadLastData();
                clearForm(form_registro_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }
        
        function registro_loadform(){
            fecha = jQuery('#registro_fecha').val();
            if (fecha != ''){
                ladata = "op=evaluacion_get&sdid="+sdid+"&pronum="+pronum+"&fecha="+fecha+"&form="+form_registro_;
                callAjaxForm(ladata, registro_responseLoad);
            }
            
        }
        
        function registro_responseLoad(data){
            cursorNormal();
            if (data.output.valid){
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_registro_, JSON.parse(jsonstr));
                jQuery('#registro_eva_id').val(res[0].id);
            } else {
                clearForm(form_registro_);
                jQuery('#registro_responsable').val(responsible); 
                //alert(''+data.output.response.content);
            }
            
        }
        
        function registro_loadLastData(){
            ladata = "op=evaluacion_get&sdid="+sdid+"&pronum="+pronum+"&form="+form_registro_;
            callAjaxForm(ladata, registro_responseloadLastData);
        }
        
        function registro_responseloadLastData(data){
            cursorNormal();
            if (data.output.valid){
                res = data.output.response;
                jQuery('#registro_fecha').val(res[0].fecha);
                registro_loadform();
            } else {
                clearForm(form_registro_);
                jQuery('#registro_responsable').val(responsible); 
                //alert(''+data.output.response.content);
            }
        }
        
    </script>
    <div class="form_default">
        <input type="hidden" id="registro_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="registro_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="registro_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="registro_actividad"><option value="seleccione">Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            </p>
        </fieldset>

        <!-- GENERAL -->

        <fieldset>
            <legend>General</legend>
            <p>
            <div class="one_fourth"><label>Ubicación del Sistema</label></div>
            <div class="one_fourth"><input id="registro_campo01" type="text"  class="sftable" /></div>
            <div class="one_fourth"><label>Sede</label></div>
            <div class="one_fourth last"><input id="registro_campo02" type="text"   class="sftable" /></div>
            </p>
            <p>
            <div class="one_fourth"><label>Localización de la válvula de control</label></div>
            <div class="one_fourth "><input id="registro_campo03" type="text"  class="sftable" /></div>
            <div class="one_fourth"><label>Tipo de sistema</label></div>
            <div class="one_fourth last"><select id="registro_campo04"><option value="seleccione">Seleccione una</option><option value="0">Clase 1</option><option value="1">Clase 2</option><option value="2">Clase 3</select></div>
            </p>
            <p>
            <div class="one_fourth"><label>Longitud de la manguera disponible</label></div>
            <div class="one_fourth"><select id="registro_campo05"><option value="seleccione">Seleccione una</option><option value="0">Ninguna</option><option value="1">15M</option><option value="2">23M </option><option value="3">30M</option></select></div>
            <div class="one_fourth"><label>Tipo de manguera</label></div>
            <div class="one_fourth last"><select id="registro_campo06"><option value="seleccione">Seleccione una</option><option value="0">Alineada de goma</option><option value="1">Sin alinear</option></option></select></div>
            </p>
            <p>
            <div class="one_fourth"><label>Existen boquillas de cierre automático</label></div>
            <div class="one_fourth "><select id="registro_campo07"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            <div class="one_fourth"><label>Existen dispositivos reguladores de presión</label></div>
            <div class="one_fourth last"><select id="registro_campo08"><option value="seleccione">Seleccione una</option> <option value="0">Si</option><option value="1">No</option></select></div>
            </p>
            <p>
            <div class="one_fourth"><label>Tipo de los dispositivos reguladores de presión</label></div>
            <div class="three_fourth last"><input id="registro_campo09" type="text"  class="sftable" /></div>
            </p>
        </fieldset>

        <!-- VALVULA -->

        <fieldset>
            <legend>V&aacute;lvulas</legend>
            <p>
            <div class="one_fourth"><label>Cómo están supervisadas las válvulas?</label></div>
            <div class="one_fourth"><select id="registro_campo10"><option value="seleccione">Seleccione una</option><option value="0">Precintadas</option><option value="1">Bloqueadas</option><option value="2">Interruptor antimanipulacioón</option></select></div>
            <div class="one_fourth"><label>Están las válvulas identificadas con alguna señalización?</label></div>
            <div class="one_fourth last"><select id="registro_campo11"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
        </fieldset>

        <!-- ABASTECIMIENTO DE AGUA -->

        <fieldset>
            <legend>Abastecimiento de agua</legend>
            <p>
            <div class="one_fourth"><label>Cuando se realizó la última prueba de abastecimiento de agua?</label></div>
            <div class="one_fourth"><select id="registro_campo12"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select> </div>
            <div class="one_fourth"><label>Están los depósitos, tanques de presión, etc, en buen estado?</label></div>
            <div class="one_fourth last"><select id="registro_campo13"><option value="seleccione">Seleccione una</option> <option value="0">Si</option></select></div>
            </p>
        </fieldset>

        <!-- BOMBAS -->

        <fieldset>
            <legend>Bombas</legend>
            <p>
            <div class="one_sixth"><label>La bomba contra incendios es?</label></div>
            <div class="one_sixth"><select id="registro_campo14"><option value="seleccione">Seleccione una</option><option value="0">Diesel</option><option value="1">Electrica</option><option value="2">Gasolina</option></option><option value="2">Ninguna de estas</option></select></div>
            <div class="one_sixth"><label>Cuando se Inspecciónaron las bombas por &uacute;ltima vez?</label></div>
            <div class="one_sixth"><input id="registro_campo15" type="text" class="sftable" /> </div>
            <div class="one_sixth"><label>La bomba está en buenas condiciones?</label></div>
            <div class="one_sixth last"><select id="registro_campo16"><option value="seleccione">Seleccione una</option> <option value="0">Si</option><option value="1">No</option></select></div>
            </p>
        </fieldset>

        <!-- CONEXIONES PARA EL DEPARTAMENTO DE BOMBEROS -->

        <fieldset>
            <legend>CONEXIONES PARA EL DEPARTAMENTO DE BOMBEROS </legend>
            <p>
            <div class="one_fourth"><label>Ubicación</label></div>
            <div class="one_fourth"><input id="registro_campo17" type="text" class="sftable" /></div>                    	
            <div class="one_fourth"><label>Existen placas identificadoras</label></div>
            <div class="one_fourth last"><select id="registro_campo18"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select> </div>
            </p>
        </fieldset>

        <!-- INSTRUCCIONES DE MANEJO -->

        <fieldset>
            <legend>Instrucciones de manejo</legend>
            <p>
            <div class="one_half"><label>Se han entregado la instrucciones de funcionamiento?</label></div>
            <div class="one_half last"><select id="registro_campo19"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <textarea id="registro_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
        </fieldset>
        <div class="clear"></div>
        <input type="button" id="registro_registrar" value="Registrar" onclick="registro_savedata()"/>
    </div>
</form>