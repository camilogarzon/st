<form id="inspeccion_anual_tuberia_mangueras">
    <script type="text/javascript">
        var form_inspeccion_anual_ = 'inspeccion_anual_tuberia_mangueras';
        var sdid = '<?php echo getUserIdSede(); ?>';
        var usrid = '<?php echo getUserId(); ?>';
        var pronum = '<?php echo $_GET['id']; ?>';

        jQuery(document).ready(function() {
            applyDatepicker('inspeccion_anual_fecha');
            jQuery('#inspeccion_anual_fecha_historial').change(function() {
                jQuery('#inspeccion_anual_fecha').val(jQuery('#inspeccion_anual_fecha_historial').val());
                inspeccion_anual_loadform();
            });
            inspeccion_anual_loadLastData();
        });

        function inspeccion_anual_savedata() {
            fecha = jQuery('#inspeccion_anual_fecha').val();
            if (fecha != '') {
                var sist = jQuery('#inspeccion_anual_sistema').val();
                var activ = jQuery('#inspeccion_anual_actividad').val();
                var nota = jQuery('#inspeccion_anual_notas').val();
                var evaid = jQuery('#inspeccion_anual_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>) {
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_inspeccion_anual_);
                ladata = "op=evaluacion_save&sdid=" + sdid + "&pronum=" + pronum + "&usrid=" + usrid + "&id=" + evaid + "&form=" + form_inspeccion_anual_ + "&fecha=" + fecha + "&sist=" + sist + "&activ=" + activ + "&content=" + jsonstr + "&nota=" + nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, inspeccion_anual_responseSave);
            } else {
                alert('Seleccione la fecha.');
            }
        }

        function inspeccion_anual_responseSave(data) {
            cursorNormal();
            if (data.output.valid) {
                inspeccion_anual_loadLastData();
                clearForm(form_inspeccion_anual_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }

        function inspeccion_anual_loadform() {
            fecha = jQuery('#inspeccion_anual_fecha').val();
            if (fecha != '') {
                ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&fecha=" + fecha + "&form=" + form_inspeccion_anual_;
                callAjaxForm(ladata, inspeccion_anual_responseLoad);
            }
        }

        function inspeccion_anual_responseLoad(data) {
            cursorNormal();
            if (data.output.valid) {
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_inspeccion_anual_, JSON.parse(jsonstr));
                jQuery('#inspeccion_anual_eva_id').val(res[0].id);
            } else {
                clearForm(form_inspeccion_anual_);
                jQuery('#inspeccion_anual_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

        function inspeccion_anual_loadLastData() {
            ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&form=" + form_inspeccion_anual_;
            callAjaxForm(ladata, inspeccion_anual_responseloadLastData);
        }

        function inspeccion_anual_responseloadLastData(data) {
            cursorNormal();
            if (data.output.valid) {
                jQuery('#inspeccion_anual_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="' + res[j].fecha + '">' + res[j].fecha + '</option>';
                }
                jQuery('#inspeccion_anual_fecha_historial').append(opciones);
                jQuery('#inspeccion_anual_fecha').val(res[0].fecha);
                inspeccion_anual_loadform();
            } else {
                clearForm(form_inspeccion_anual_);
                jQuery('#inspeccion_anual_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

    </script>
    <div class="form_default">
        <input type="hidden" id="inspeccion_anual_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="inspeccion_anual_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="inspeccion_anual_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="inspeccion_anual_actividad"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="inspeccion_anual_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_inspeccion_anual_);"/></div>
            </p>
        </fieldset>

        <!-- PRUEBA HIDROSTATICA -->

        <fieldset>
            <legend>Inspección y Mantenimiento Anual</legend>

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
                        <td>Salida para BIE</td>
                        <td><input id="inspeccion_anual_campo01" type="text" name="email" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Comprobar boquillas: La salida del agua deberá estar libre de obstrucciones</td>
                        <td><select id="inspeccion_anual_campo02"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>- La boquilla funciona adecuadamente?</td>
                        <td><select id="inspeccion_anual_campo03"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>- La boquilla funciona correctamente en todas sus posiciones?</td>
                        <td><select id="inspeccion_anual_campo04"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>- Funciona correctamente el cierre?</td>
                        <td><select id="inspeccion_anual_campo05"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>- Están completos los elementos?</td>
                        <td><select id="inspeccion_anual_campo06"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>- Los acoples y juntas están en buen estado?</td>
                        <td><select id="inspeccion_anual_campo07"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>- Las boquillas, en general, están en buen estado?</td>
                        <td><select id="inspeccion_anual_campo08"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>Se han lubricado los racores?</td>
                        <td><select id="inspeccion_anual_campo09"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>Estado de los racores de la manguera?</td>
                        <td><select id="inspeccion_anual_campo10"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>Se inspeccionó visualmente la tubería seca?</td>
                        <td><select id="inspeccion_anual_campo11"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                    <tr>
                        <td>Se realizó prueba de drenaje?</td>
                        <td><select id="inspeccion_anual_campo12"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                </table>
            </div>

        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="inspeccion_anual_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
            </p>
        </fieldset>
        <input type="button" id="inspeccion_anual_registrar" value="Registrar" onclick="inspeccion_anual_savedata()"/>
    </div>    
</form>