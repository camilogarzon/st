<form id="inspeccion_trimestral_tuberia_mangueras">
    <script type="text/javascript">
        var form_inspeccion_trimestral_ = 'inspeccion_trimestral_tuberia_mangueras';
        var sdid = '<?php echo getUserIdSede(); ?>';
        var usrid = '<?php echo getUserId(); ?>';
        var pronum = '<?php echo $_GET['id']; ?>';

        jQuery(document).ready(function() {
            applyDatepicker('inspeccion_trimestral_fecha');
            applyDatepicker('inspeccion_trimestral_campo01');
            jQuery('#inspeccion_trimestral_fecha_historial').change(function() {
                jQuery('#inspeccion_trimestral_fecha').val(jQuery('#inspeccion_trimestral_fecha_historial').val());
                inspeccion_trimestral_loadform();
            });
            inspeccion_trimestral_loadLastData();
        });

        function inspeccion_trimestral_savedata() {
            fecha = jQuery('#inspeccion_trimestral_fecha').val();
            if (fecha != '') {
                var sist = jQuery('#inspeccion_trimestral_sistema').val();
                var activ = jQuery('#inspeccion_trimestral_actividad').val();
                var nota = jQuery('#inspeccion_trimestral_notas').val();
                var evaid = jQuery('#inspeccion_trimestral_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>) {
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_inspeccion_trimestral_);
                ladata = "op=evaluacion_save&sdid=" + sdid + "&pronum=" + pronum + "&usrid=" + usrid + "&id=" + evaid + "&form=" + form_inspeccion_trimestral_ + "&fecha=" + fecha+"&sist="+sist + "&activ=" + activ + "&content=" + jsonstr + "&nota=" + nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, inspeccion_trimestral_responseSave);
            } else {
                alert('Seleccione la fecha.');
            }
        }

        function inspeccion_trimestral_responseSave(data) {
            cursorNormal();
            if (data.output.valid) {
                inspeccion_trimestral_loadLastData();
                clearForm(form_inspeccion_trimestral_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }

        function inspeccion_trimestral_loadform() {
            fecha = jQuery('#inspeccion_trimestral_fecha').val();
            if (fecha != '') {
                ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&fecha=" + fecha + "&form=" + form_inspeccion_trimestral_;
                callAjaxForm(ladata, inspeccion_trimestral_responseLoad);
            }
        }

        function inspeccion_trimestral_responseLoad(data) {
            cursorNormal();
            if (data.output.valid) {
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_inspeccion_trimestral_, JSON.parse(jsonstr));
                jQuery('#inspeccion_trimestral_eva_id').val(res[0].id);
            } else {
                clearForm(form_inspeccion_trimestral_);
                jQuery('#inspeccion_trimestral_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

        function inspeccion_trimestral_loadLastData() {
            ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&form=" + form_inspeccion_trimestral_;
            callAjaxForm(ladata, inspeccion_trimestral_responseloadLastData);
        }

        function inspeccion_trimestral_responseloadLastData(data) {
            cursorNormal();
            if (data.output.valid) {
                jQuery('#inspeccion_trimestral_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="' + res[j].fecha + '">' + res[j].fecha + '</option>';
                }
                jQuery('#inspeccion_trimestral_fecha_historial').append(opciones);
                jQuery('#inspeccion_trimestral_fecha').val(res[0].fecha);
                inspeccion_trimestral_loadform();
            } else {
                clearForm(form_inspeccion_trimestral_);
                jQuery('#inspeccion_trimestral_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

    </script>
    <div class="form_default">
        <input type="hidden" id="inspeccion_trimestral_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="inspeccion_trimestral_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="inspeccion_trimestral_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="inspeccion_trimestral_actividad"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="inspeccion_trimestral_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="inspeccion_trimestral_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_inspeccion_trimestral_);"/></div>
            </p>
        </fieldset>

        <!-- TABLA SEMANAL-->

        <fieldset>
            <legend>Inspección Trimestral</legend>

            <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
                <colgroup>
                    <col class="head1" width="17%" />
                    <col class="head0" width="17%" />
                    <col class="head1" width="11%" />
                    <col class="head0" width="11%" />
                    <col class="head1" width="11%" />
                    <col class="head0" width="11%" />
                    <col class="head1" width="11%" />
                    <col class="head0" width="11%" />
                </colgroup>
                <tr>
                    <td>Fecha</td>
                    <td>Inspector</td>
                    <td>Armarios Mangueras</td>
                    <td>Señalización</td>
                    <td>Conexión bomberos</td>
                    <td>Señalización bomberos</td>
                    <td>Válvula abierta</td>
                    <td>Abastecimiento</td>
                </tr>
            </table>

            <div class="sTableWrapper">
                <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
                    <colgroup>
                        <col class="con1" width="17%" />
                        <col class="con0" width="17%" />
                        <col class="con1" width="11%" />
                        <col class="con0" width="11%" />
                        <col class="con1" width="11%" />
                        <col class="con0" width="11%" />
                        <col class="con1" width="11%" />
                        <col class="con0" width="11%" />
                    </colgroup>
                    <tr>
                        <td><input id="inspeccion_trimestral_campo01" type="text" name="email" value="fecha" class="sftable" /></td>
                        <td><input id="inspeccion_trimestral_campo02" type="text" name="email" value="precargado" class="sftable" /></td>
                        <td><select id="inspeccion_trimestral_campo03"><option value="seleccione">Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
                        <td><select id="inspeccion_trimestral_campo04"><option value="seleccione">Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
                        <td><select id="inspeccion_trimestral_campo05"><option value="seleccione">Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
                        <td><select id="inspeccion_trimestral_campo06"><option value="seleccione">Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
                        <td><select id="inspeccion_trimestral_campo07"><option value="seleccione">Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
                        <td><select id="inspeccion_trimestral_campo08"><option value="seleccione">Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
                    </tr>
                </table>

        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="inspeccion_trimestral_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
            </p>
        </fieldset>
        <input type="button" id="inspeccion_trimestral_registrar" value="Registrar" onclick="inspeccion_trimestral_savedata()"/>
    </div>    
</form>