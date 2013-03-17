<form id="semestre_puerta">
    <script type="text/javascript">
        var form_semestre_ = 'semestre_puerta';var sdid = '<?php echo getUserIdSede(); ?>';var usrid = '<?php echo getUserId(); ?>';var pronum = '<?php echo $_GET['id']; ?>';
        
        jQuery(document).ready(function(){applyDatepicker('semestre_fecha');
            jQuery('#semestre_fecha_historial').change(function(){
                jQuery('#semestre_fecha').val(jQuery('#semestre_fecha_historial').val());
                semestre_loadform();
            });
            semestre_loadLastData();
        });
        
        function semestre_savedata() {
            fecha = jQuery('#semestre_fecha').val();
            if (fecha != ''){
                var sist = jQuery('#semestre_sistema').val();
                var activ = jQuery('#semestre_actividad').val();
                var nota = jQuery('#semestre_notas').val();
                var evaid = jQuery('#semestre_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>){
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson('semestre_');
                ladata = "op=evaluacion_save&sdid="+sdid+"&pronum="+pronum+"&usrid="+usrid+"&id="+evaid+"&form="+form_semestre_+"&fecha="+fecha+"&sist="+sist+"&activ="+activ+"&content="+jsonstr+"&nota="+nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, semestre_responseSave);
            }
        }
        
        function semestre_responseSave(data){
            cursorNormal();
            if (data.output.valid){
                semestre_loadLastData();
                clearForm(form_semestre_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }
        
        function semestre_loadform(){
            fecha = jQuery('#semestre_fecha').val();
            if (fecha != ''){
                ladata = "op=evaluacion_get&sdid="+sdid+"&pronum="+pronum+"&fecha="+fecha+"&form="+form_semestre_;
                callAjaxForm(ladata, semestre_responseLoad);
            }
        }
        
        function semestre_responseLoad(data){
            cursorNormal();
            if (data.output.valid){
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_semestre_, JSON.parse(jsonstr));
                jQuery('#semestre_eva_id').val(res[0].id);
            } else {
                clearForm(form_semestre_);
                jQuery('#semestre_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }
        
        function semestre_loadLastData(){
            ladata = "op=evaluacion_get&sdid="+sdid+"&pronum="+pronum+"&form="+form_semestre_;
            callAjaxForm(ladata, semestre_responseloadLastData);
        }
        
        function semestre_responseloadLastData(data){
            cursorNormal();
            if (data.output.valid){
                jQuery('#semestre_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="'+res[j].fecha+'">'+res[j].fecha+'</option>';
                }
                jQuery('#semestre_fecha_historial').append(opciones);
                jQuery('#semestre_fecha').val(res[0].fecha);
                semestre_loadform();
            } else {
                clearForm(form_semestre_);
                jQuery('#semestre_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }
        
    </script>
    <div class="form_default">
        <input type="hidden" id="semestre_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="semestre_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="semestre_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth ocultar"><input type="button" class="sftable" id="semestre_cagar" value="CARGAR" style="cursor: pointer;" onclick="semestre_loadform();"/></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="semestre_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_semestre_);jQuery('#semestre_responsable').val(responsible);"/></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Responsable</label></div>
            <div class="one_sixth"><input type="text" id="semestre_responsable" class="sftable" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="semestre_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="semestre_actividad"><option value="seleccione">Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
        </fieldset>

        <fieldset>
            <legend>Prueba y Mantenimiento Semestral</legend>

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
                        <td>1. La compuerta cierra completamente y se encaja el pestillo?</td>
                        <td><select id="semestre_campo01"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option><option value="2">No Aplica</option></select></td>
                    </tr>
                    <tr>
                        <td>2. La compuerta esta firmemente anclada en su lugar y que el conducto esta correctamente sujeto con las juntas?</td>
                        <td><select id="semestre_campo02"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option><option value="2">No Aplica</option></select></td>
                    </tr>
                    <tr>
                        <td>3. Se engrasaron todas las partes móviles para asegurar su correcto funcionamiento?</td>
                        <td><select id="semestre_campo03"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                </table>

        </fieldset>



        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
                <textarea  id="semestre_notas" class="mftable" cols="" rows=""></textarea>
        </fieldset>
        <div class="clear"></div>
        <input type="button"  id="semestre_registrar" value="Registrar" onclick="semestre_savedata()"/>
    </div>
</form>