<form id="prueba_normal_tuberia_mangueras">
    <script type="text/javascript">
        var form_prueba_normal_ = 'prueba_normal_tuberia_mangueras';
        var sdid = '<?php echo getUserIdSede(); ?>';
        var usrid = '<?php echo getUserId(); ?>';
        var pronum = '<?php echo $_GET['id']; ?>';

        jQuery(document).ready(function() {
            applyDatepicker('prueba_normal_fecha');
            jQuery('#prueba_normal_fecha_historial').change(function() {
                jQuery('#prueba_normal_fecha').val(jQuery('#prueba_normal_fecha_historial').val());
                prueba_normal_loadform();
            });
            prueba_normal_loadLastData();
        });

        function prueba_normal_savedata() {
            fecha = jQuery('#prueba_normal_fecha').val();
            if (fecha != '') {
                var sist = jQuery('#prueba_normal_sistema').val();
                var activ = jQuery('#prueba_normal_actividad').val();
                var nota = jQuery('#prueba_normal_notas').val();
                var evaid = jQuery('#prueba_normal_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>) {
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_prueba_normal_);
                ladata = "op=evaluacion_save&sdid=" + sdid + "&pronum=" + pronum + "&usrid=" + usrid + "&id=" + evaid + "&form=" + form_prueba_normal_ + "&fecha=" + fecha + "&sist=" + sist + "&activ=" + activ + "&content=" + jsonstr + "&nota=" + nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, prueba_normal_responseSave);
            } else {
                alert('Seleccione la fecha.');
            }
        }

        function prueba_normal_responseSave(data) {
            cursorNormal();
            if (data.output.valid) {
                prueba_normal_loadLastData();
                clearForm(form_prueba_normal_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }

        function prueba_normal_loadform() {
            fecha = jQuery('#prueba_normal_fecha').val();
            if (fecha != '') {
                ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&fecha=" + fecha + "&form=" + form_prueba_normal_;
                callAjaxForm(ladata, prueba_normal_responseLoad);
            }
        }

        function prueba_normal_responseLoad(data) {
            cursorNormal();
            if (data.output.valid) {
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_prueba_normal_, JSON.parse(jsonstr));
                jQuery('#prueba_normal_eva_id').val(res[0].id);
            } else {
                clearForm(form_prueba_normal_);
                jQuery('#prueba_normal_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

        function prueba_normal_loadLastData() {
            ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&form=" + form_prueba_normal_;
            callAjaxForm(ladata, prueba_normal_responseloadLastData);
        }

        function prueba_normal_responseloadLastData(data) {
            cursorNormal();
            if (data.output.valid) {
                jQuery('#prueba_normal_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="' + res[j].fecha + '">' + res[j].fecha + '</option>';
                }
                jQuery('#prueba_normal_fecha_historial').append(opciones);
                jQuery('#prueba_normal_fecha').val(res[0].fecha);
                prueba_normal_loadform();
            } else {
                clearForm(form_prueba_normal_);
                jQuery('#prueba_normal_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

    </script>
    <div class="form_default">
        <input type="hidden" id="prueba_normal_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="prueba_normal_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="prueba_normal_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="prueba_normal_actividad"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="prueba_normal_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="prueba_normal_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_prueba_normal_);"/></div>
            </p>
        </fieldset>

        <!-- PRUEBA HIDROSTATICA -->

        <fieldset>
            <legend>Prueba hidrostática y de caudal en tuberías</legend>

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
                        <td>Sistema de Tuberías</td>
                        <td><input id="prueba_normal_campo01" type="text" name="email" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Presión de prueba incial</td>
                        <td><input id="prueba_normal_campo02" type="text" name="email" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Hora de comienzo</td>
                        <td><input id="prueba_normal_campo03" type="text" name="email" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Hora de fin</td>
                        <td><input id="prueba_normal_campo04" type="text" name="email" class="sftable" /></td>
                    </tr>
                    <tr>
                        <td>Presión de prueba final</td>
                        <td><input id="prueba_normal_campo05" type="text" name="email" class="sftable" /></td>
                    </tr>
                </table>
            </div>

            <p>Prueba de caudal
            <div class="one_fourth"><label for="name">Presión estatica</label></div>
            <div class="one_fourth"><input id="prueba_normal_campo06" type="text" name="name" value="psi bar" class="sftable" /></div>
            <div class="one_fourth"><label for="email">Presión residual</label></div>
            <div class="one_fourth last"><input id="prueba_normal_campo07" type="text" name="email" value="psi bar" class="sftable" /></div>
            <div class="one_fourth"><label for="name">díametro de la boquilla</label></div>
            <div class="one_fourth"><input id="prueba_normal_campo08" type="text" name="name" value="cm" class="sftable" /></div>
            <div class="one_fourth"><label for="email">Presión en el pitot</label></div>
            <div class="one_fourth last"><input id="prueba_normal_campo09" type="text" name="email" value="psi bar" class="sftable" /></div>
            <div class="one_fourth"><label for="name">Caudal</label></div>
            <div class="one_fourth"><input id="prueba_normal_campo10" type="text" name="name" value="gpm" class="sftable" /></div>
            </p>

        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="prueba_normal_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
            </p>
        </fieldset>
        <input type="button" id="prueba_normal_registrar" value="Registrar" onclick="prueba_normal_savedata()"/>
    </div>    
</form>