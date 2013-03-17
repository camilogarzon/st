<form id="inspeccion_mensual_extintor">
    <script type="text/javascript">
        var form_inspeccion_mensual_ = 'inspeccion_mensual_extintor';
        var sdid = '<?php echo getUserIdSede(); ?>';
        var usrid = '<?php echo getUserId(); ?>';
        var pronum = '<?php echo $_GET['id']; ?>';

        jQuery(document).ready(function() {
            applyDatepicker('inspeccion_mensual_fecha');
            jQuery('#inspeccion_mensual_fecha_historial').change(function() {
                jQuery('#inspeccion_mensual_fecha').val(jQuery('#inspeccion_mensual_fecha_historial').val());
                inspeccion_mensual_loadform();
            });
            inspeccion_mensual_loadLastData();
        });

        function inspeccion_mensual_savedata() {
            fecha = jQuery('#inspeccion_mensual_fecha').val();
            if (fecha != '') {
                var activ = jQuery('#inspeccion_mensual_actividad').val();
                var nota = jQuery('#inspeccion_mensual_notas').val();
                var evaid = jQuery('#inspeccion_mensual_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>) {
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_inspeccion_mensual_);
                ladata = "op=evaluacion_save&sdid=" + sdid + "&pronum=" + pronum + "&usrid=" + usrid + "&id=" + evaid + "&form=" + form_inspeccion_mensual_ + "&fecha=" + fecha + "&activ=" + activ + "&content=" + jsonstr + "&nota=" + nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, inspeccion_mensual_responseSave);
            } else {
                alert('Seleccione la fecha.');
            }
        }

        function inspeccion_mensual_responseSave(data) {
            cursorNormal();
            if (data.output.valid) {
                inspeccion_mensual_loadLastData();
                clearForm(form_inspeccion_mensual_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }

        function inspeccion_mensual_loadform() {
            fecha = jQuery('#inspeccion_mensual_fecha').val();
            if (fecha != '') {
                ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&fecha=" + fecha + "&form=" + form_inspeccion_mensual_;
                callAjaxForm(ladata, inspeccion_mensual_responseLoad);
            }
        }

        function inspeccion_mensual_responseLoad(data) {
            cursorNormal();
            if (data.output.valid) {
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_inspeccion_mensual_, JSON.parse(jsonstr));
                jQuery('#inspeccion_mensual_eva_id').val(res[0].id);
            } else {
                clearForm(form_inspeccion_mensual_);
                jQuery('#inspeccion_mensual_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

        function inspeccion_mensual_loadLastData() {
            ladata = "op=evaluacion_get&sdid=" + sdid + "&pronum=" + pronum + "&form=" + form_inspeccion_mensual_;
            callAjaxForm(ladata, inspeccion_mensual_responseloadLastData);
        }

        function inspeccion_mensual_responseloadLastData(data) {
            cursorNormal();
            if (data.output.valid) {
                jQuery('#inspeccion_mensual_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="' + res[j].fecha + '">' + res[j].fecha + '</option>';
                }
                jQuery('#inspeccion_mensual_fecha_historial').append(opciones);
                jQuery('#inspeccion_mensual_fecha').val(res[0].fecha);
                inspeccion_mensual_loadform();
            } else {
                clearForm(form_inspeccion_mensual_);
                jQuery('#inspeccion_mensual_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }

    </script>
    <div class="form_default">
        <input type="hidden" id="inspeccion_mensual_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Extintor</label></div>
            <div class="one_sixth">ID Extintor</div>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="inspeccion_mensual_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="inspeccion_mensual_actividad"><option>Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="inspeccion_mensual_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="inspeccion_mensual_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_inspeccion_mensual_);"/></div>
            </p>
        </fieldset>

        <!-- INFORMACION EXTINTOR -->

        <fieldset>
            <legend>Extintor portatil</legend>

            <p>
            <div class="one_sixth"><label>Localización del extintor</label></div>
            <div class="one_sixth"><input id="inspeccion_mensual_campo01" type="text" value="dato precargado" class="sftable" /></div>
            <div class="one_sixth"><label>Tipo de extintor</label></div>
            <div class="one_sixth"><input id="inspeccion_mensual_campo02" type="text" value="dato precargado" class="sftable" /></div>
            <div class="one_sixth"><label>Ha sido modificada su ubicación</label></div>
            <div class="one_sixth last"><select id="inspeccion_mensual_campo03"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Numero de indentificación</label></div>
            <div class="one_sixth"><input id="inspeccion_mensual_campo04" type="text" value="dato precargado" class="sftable" /></div>
            <div class="one_sixth"><label>Numero de Serie</label></div>
            <div class="one_sixth last"><input  id="inspeccion_mensual_campo05" type="text" value="dato precargado" class="sftable" /></div>
            </p>
        </fieldset>

        <!-- TABLA MANTENIMIENTO -->

        <fieldset>
            <legend>Inspección, Mantenimiento y Recarga</legend>

            <div class="sTableWrapper">

                <!-- TABLA MANTENIMIENTO 2 -->

                <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
                    <colgroup>
                        <col class="head1" width="9%" />
                        <col class="head0" width="8%" />
                        <col class="head1" width="9%" />
                        <col class="head0" width="8%" />
                        <col class="head1" width="9%" />
                        <col class="head0" width="8%" />
                        <col class="head1" width="9%" />
                        <col class="head0" width="8%" />
                        <col class="head1" width="9%" />
                        <col class="head0" width="10%" />
                        <col class="head1" width="10%" />
                    </colgroup>
                    <tr>
                        <td>Manometro y Presión</td>
                        <td>Sello Seguridad</td>
                        <td>Cilindro</td>
                        <td>Etiqueta</td>
                        <td>Acceso</td>
                        <td>Ubicación</td>
                        <td>Altura</td>
                        <td>Señalización</td>
                        <td>Rótulo Inspección Mensual</td>
                        <td>Fecha Mantenimiento</td>
                        <td>Fecha Vencimiento</td>
                    </tr>
                </table>

                <div class="sTableWrapper">
                    <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
                        <colgroup>
                            <col class="con1" width="9%" />
                            <col class="con0" width="8%" />
                            <col class="con1" width="9%" />
                            <col class="con0" width="8%" />
                            <col class="con1" width="9%" />
                            <col class="con0" width="8%" />
                            <col class="con1" width="9%" />
                            <col class="con0" width="8%" />
                            <col class="con1" width="9%" />
                            <col class="con0" width="10%" />
                            <col class="con1" width="10%" />
                        </colgroup>
                        <tr>
                            <td><select id="inspeccion_mensual_campo06"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo07"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo08"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo09"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo10"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo11"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo12"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo13"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><select id="inspeccion_mensual_campo14"><option value="seleccione">Conforme</option><option value="0">Si</option><option value="1">No</option></select></td>
                            <td><input id="inspeccion_mensual_campo15" type="text" value="precargado" class="sftable" /></td>
                            <td><input id="inspeccion_mensual_campo16" type="text" value="precargado + 1 año" class="sftable" /></td>
                        </tr>
                    </table>
                </div>    
            </div>
        </fieldset>
        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="inspeccion_mensual_notas" class="mftable" cols="" rows=""></textarea>
            </p>
        </fieldset>

        <input type="button" id="inspeccion_mensual_registrar" value="Registrar" onclick="inspeccion_mensual_savedata()"/>

    </div>    
</form>