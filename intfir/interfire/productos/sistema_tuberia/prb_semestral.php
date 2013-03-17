<form id="prueba_semestral_tuberia_mangueras">
    <script type="text/javascript">
        var form_prueba_semestral_ = 'prueba_semestral_tuberia_mangueras';
        var sdid = '<?php echo getUserIdSede(); ?>';
        var usrid = '<?php echo getUserId(); ?>';
        var pronum = '<?php echo $_GET['id']; ?>';

        jQuery(document).ready(function() {
            applyDatepicker('prueba_semestral_fecha');
            applyDatepicker('prueba_semestral_campo01');
            jQuery('#prueba_semestral_fecha_historial').change(function() {
                jQuery('#prueba_semestral_fecha').val(jQuery('#prueba_semestral_fecha_historial').val());
                prueba_semestral_loadform();
            });
            prueba_semestral_loadLastData();
        });

        function prueba_semestral_savedata() {
            fecha = jQuery('#prueba_semestral_fecha').val();
            if (fecha != '') {
                var sist = jQuery('#prueba_semestral_sistema').val();
                var activ = jQuery('#prueba_semestral_actividad').val();
                var nota = jQuery('#prueba_semestral_notas').val();
                var evaid = jQuery('#prueba_semestral_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>) {
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_prueba_semestral_);
                ladata = "op=evaluacion_save&sdid=" + sdid + "&pronum=" + pronum + "&usrid=" + usrid + "&id=" + evaid + "&form=" + form_prueba_semestral_ + "&fecha=" + fecha + "&sist=" + sist + "&activ=" + activ + "&content=" + jsonstr + "&nota=" + nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, prueba_semestral_responseSave);
            } else {
                alert('Seleccione la fecha.');
            }
        }

        function prueba_semestral_responseSave(data) {
            cursorNormal();
            if (data.output.valid) {
                prueba_semestral_loadLastData();
                clearForm(form_prueba_semestral_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }

        function prueba_semestral_loadform() {
            fecha = jQuery('#prueba_semestral_fecha').val();
            if (fecha != '') {
                ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&fecha=" + fecha + "&form=" + form_prueba_semestral_;
                callAjaxForm(ladata, prueba_semestral_responseLoad);
            }
        }

        function prueba_semestral_responseLoad(data) {
            cursorNormal();
            if (data.output.valid) {
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_prueba_semestral_, JSON.parse(jsonstr));
                jQuery('#prueba_semestral_eva_id').val(res[0].id);
            } else {
                clearForm(form_prueba_semestral_);
                jQuery('#prueba_semestral_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

        function prueba_semestral_loadLastData() {
            ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&form=" + form_prueba_semestral_;
            callAjaxForm(ladata, prueba_semestral_responseloadLastData);
        }

        function prueba_semestral_responseloadLastData(data) {
            cursorNormal();
            if (data.output.valid) {
                jQuery('#prueba_semestral_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="' + res[j].fecha + '">' + res[j].fecha + '</option>';
                }
                jQuery('#prueba_semestral_fecha_historial').append(opciones);
                jQuery('#prueba_semestral_fecha').val(res[0].fecha);
                prueba_semestral_loadform();
            } else {
                clearForm(form_prueba_semestral_);
                jQuery('#prueba_semestral_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

    </script>
    <div class="form_default">
        <input type="hidden" id="prueba_semestral_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="prueba_semestral_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="prueba_semestral_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="prueba_semestral_actividad"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="prueba_semestral_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="prueba_semestral_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_prueba_semestral_);"/></div>
            </p>
        </fieldset>
        <fieldset>
            <legend>Prueba Semestral</legend>

            <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
                <colgroup>
                    <col class="head1" width="75%" />
                    <col class="head0" width="25%" />
                </colgroup>
                <tr>
                    <td>Descripción</td>
                    <td>Semestre</td>
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
                        <td><input id="prueba_semestral_campo01" type="text" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Inspector</td>
                        <td><input id="prueba_semestral_campo02" type="text" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Se identificó y aprobó el interruptor antimanipulación?</td>
                        <td><select id="prueba_semestral_campo03"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                </table>
            </div>

        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="prueba_semestral_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
            </p>
        </fieldset>
        <input type="button" id="prueba_semestral_registrar" value="Registrar" onclick="prueba_semestral_savedata()"/>
    </div>    
</form>