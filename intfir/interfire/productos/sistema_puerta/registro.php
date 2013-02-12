<form id="registro_">
    <script type="text/javascript">
        var form_registro_ = 'registro_';var sdid = '<?php echo getUserIdSede(); ?>';var usrid = '<?php echo getUserId(); ?>';var pronum = '<?php echo $_GET['id']; ?>';var ladata = '';var jsonstr = '';var fecha = '';
        
        jQuery(document).ready(function(){applyDatepicker('registro_fecha');applyDatepicker('registro_campo03');applyDatepicker('registro_campo07');
            responsible = '<?php echo getUserFullName(); ?>';
            jQuery('#registro_responsable').val(responsible); jQuery('#trimestre_responsable').val(responsible); jQuery('#semestre_responsable').val(responsible);
            jQuery('#registro_sistema').keyup(function(){
                theval = jQuery('#registro_sistema').val(); jQuery('#trimestre_sistema').val(theval); jQuery('#semestre_sistema').val(theval);
            });
            jQuery('#registro_actividad').change(function(){
                theval = jQuery('#registro_actividad').val(); jQuery('#trimestre_actividad').val(theval); jQuery('#semestre_actividad').val(theval);
            });
            jQuery('#registro_fecha_historial').change(function(){
                jQuery('#registro_fecha').val(jQuery('#registro_fecha_historial').val());
                registro_loadform();
            });
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
                jsonstr = stringifyFormJson('registro_');
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
                theval = jQuery('#registro_sistema').val(); jQuery('#trimestre_sistema').val(theval); jQuery('#semestre_sistema').val(theval);
                theval = jQuery('#registro_actividad').val(); jQuery('#trimestre_actividad').val(theval); jQuery('#semestre_actividad').val(theval);
            } else {
                clearForm(form_registro_);
                alert(''+data.output.response.content);
            }
        }
        
        function registro_loadLastData(){
            ladata = "op=evaluacion_get&sdid="+sdid+"&pronum="+pronum+"&form="+form_registro_;
            callAjaxForm(ladata, registro_responseloadLastData);
        }
        
        function registro_responseloadLastData(data){
            cursorNormal();
            if (data.output.valid){
                jQuery('#registro_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="'+res[j].fecha+'">'+res[j].fecha+'</option>';
                }
                jQuery('#registro_fecha_historial').append(opciones);
                jQuery('#registro_fecha').val(res[0].fecha);
                registro_loadform();
            } else {
                clearForm(form_registro_);
                alert(''+data.output.response.content);
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
            <div class="one_sixth"><input type="text" id="registro_fecha" class="sftable" readonly="true" /><div style="float: right"><input type="button" class="sftable" id="registro_cagar" value="CARGAR" style="cursor: pointer;" onclick="registro_loadform();"/><input type="button" class="sftable" id="registro_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_registro_);"/></div></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="registro_fecha_historial" style="width: 190px !important;"><option value="seleccione">Seleccione una</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Responsable</label></div>
            <div class="one_sixth"><input type="text" id="registro_responsable" class="sftable" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="registro_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="registro_actividad"><option value="seleccione">Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            </p>
        </fieldset>

        <!-- PUERTAS CORTA FUEGO -->

        <fieldset>
            <legend>Puertas Cortafuego</legend>
            <p>
            <div class="one_fourth"><label >Clasificación en horas</label></div>
            <div class="one_fourth"><input type="text" class="sftable" id="registro_campo01" /></div>
            <div class="one_fourth"><label >Dispositivo de cierre</label></div>
            <div class="one_fourth last"><select id="registro_campo02"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
            <p>
            <div class="one_fourth"><label >Fecha instalación</label></div>
            <div class="one_fourth"><input type="text" class="sftable" id="registro_campo03" readonly="true"/></div>
            <div class="one_fourth"><label >Señalización adecuada</label></div>
            <div class="one_fourth last"><select id="registro_campo04"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
            <p>
            <div class="one_fourth"><label >Aprobado UL/FM</label></div>
            <div class="one_fourth"><select id="registro_campo05"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            <div class="one_fourth"><label >Tipo de cerramiento</label></div>
            <div class="one_fourth last"><input type="text" class="sftable" id="registro_campo06"/></div>
            </p>
        </fieldset>

        <!-- ultimo mantenimiento -->

        <fieldset><legend>mantenimiento</legend>
            <p>
            <div class="one_half"><label >Fecha ultimo mantenimiento</label></div>
            <div class="one_half last"><input type="text" class="sftable" id="registro_campo07" readonly="true"/></div>
            </p>
        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="registro_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
            </p>
        </fieldset>

        <input type="button" id="registro_registrar" value="Registrar" onclick="registro_savedata()"/>
    </div>
</form>