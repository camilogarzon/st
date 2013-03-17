<form id="prueba_trimestral_tuberia_mangueras">
    <script type="text/javascript">
        var form_prueba_trimestral_ = 'prueba_trimestral_tuberia_mangueras';
        var sdid = '<?php echo getUserIdSede(); ?>';
        var usrid = '<?php echo getUserId(); ?>';
        var pronum = '<?php echo $_GET['id']; ?>';

        jQuery(document).ready(function() {
            applyDatepicker('prueba_trimestral_fecha');
            applyDatepicker('prueba_trimestral_campo01');
            jQuery('#prueba_trimestral_fecha_historial').change(function() {
                jQuery('#prueba_trimestral_fecha').val(jQuery('#prueba_trimestral_fecha_historial').val());
                prueba_trimestral_loadform();
            });
            prueba_trimestral_loadLastData();
        });

        function prueba_trimestral_savedata() {
            fecha = jQuery('#prueba_trimestral_fecha').val();
            if (fecha != '') {
                var sist = jQuery('#prueba_trimestral_sistema').val();
                var activ = jQuery('#prueba_trimestral_actividad').val();
                var nota = jQuery('#prueba_trimestral_notas').val();
                var evaid = jQuery('#prueba_trimestral_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>) {
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_prueba_trimestral_);
                ladata = "op=evaluacion_save&sdid=" + sdid + "&pronum=" + pronum + "&usrid=" + usrid + "&id=" + evaid + "&form=" + form_prueba_trimestral_ + "&fecha=" + fecha + "&sist=" + sist + "&activ=" + activ + "&content=" + jsonstr + "&nota=" + nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, prueba_trimestral_responseSave);
            } else {
                alert('Seleccione la fecha.');
            }
        }

        function prueba_trimestral_responseSave(data) {
            cursorNormal();
            if (data.output.valid) {
                prueba_trimestral_loadLastData();
                clearForm(form_prueba_trimestral_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }

        function prueba_trimestral_loadform() {
            fecha = jQuery('#prueba_trimestral_fecha').val();
            if (fecha != '') {
                ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&fecha=" + fecha + "&form=" + form_prueba_trimestral_;
                callAjaxForm(ladata, prueba_trimestral_responseLoad);
            }
        }

        function prueba_trimestral_responseLoad(data) {
            cursorNormal();
            if (data.output.valid) {
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_prueba_trimestral_, JSON.parse(jsonstr));
                jQuery('#prueba_trimestral_eva_id').val(res[0].id);
            } else {
                clearForm(form_prueba_trimestral_);
                jQuery('#prueba_trimestral_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

        function prueba_trimestral_loadLastData() {
            ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&form=" + form_prueba_trimestral_;
            callAjaxForm(ladata, prueba_trimestral_responseloadLastData);
        }

        function prueba_trimestral_responseloadLastData(data) {
            cursorNormal();
            if (data.output.valid) {
                jQuery('#prueba_trimestral_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="' + res[j].fecha + '">' + res[j].fecha + '</option>';
                }
                jQuery('#prueba_trimestral_fecha_historial').append(opciones);
                jQuery('#prueba_trimestral_fecha').val(res[0].fecha);
                prueba_trimestral_loadform();
            } else {
                clearForm(form_prueba_trimestral_);
                jQuery('#prueba_trimestral_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

    </script>
    <div class="form_default">
        <input type="hidden" id="prueba_trimestral_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="prueba_trimestral_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="prueba_trimestral_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="prueba_trimestral_actividad"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="prueba_trimestral_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="prueba_trimestral_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_prueba_trimestral_);"/></div>
            </p>
        </fieldset>

        <fieldset>
            <legend>Prueba Trimestral</legend>

            <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
                <colgroup>
                    <col class="head1" width="75%" />
                    <col class="head0" width="25%" />
                </colgroup>
                <tr>
                    <td>Descripción</td>
                    <td>Trimestre</td>
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
                        <td><input id="prueba_trimestral_campo01" type="text" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Inspector</td>
                        <td><input id="prueba_trimestral_campo02" type="text" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Se identificó y accionó el interruptor de caudal?</td>
                        <td><select id="prueba_trimestral_campo03"><option value="seleccione">Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                    </tr>
                </table>
            </div>

        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="prueba_trimestral_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
            </p>
        </fieldset>
        <input type="button" id="prueba_trimestral_registrar" value="Registrar" onclick="prueba_trimestral_savedata()"/>
    </div>    
</form>