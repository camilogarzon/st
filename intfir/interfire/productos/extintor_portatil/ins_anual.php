<form id="inspeccion_anual_extintor">
    <script type="text/javascript">
        var form_inspeccion_anual_ = 'inspeccion_anual_extintor';
        var sdid = '<?php echo getUserIdSede(); ?>';
        var usrid = '<?php echo getUserId(); ?>';
        var pronum = '<?php echo $_GET['id']; ?>';

        jQuery(document).ready(function() {
            applyDatepicker('inspeccion_anual_fecha');
            applyDatepicker('inspeccion_anual_campo29');
            
            jQuery('#inspeccion_anual_fecha_historial').change(function() {
                jQuery('#inspeccion_anual_fecha').val(jQuery('#inspeccion_anual_fecha_historial').val());
                inspeccion_anual_loadform();
            });
            inspeccion_anual_loadLastData();
        });

        function inspeccion_anual_savedata() {
            fecha = jQuery('#inspeccion_anual_fecha').val();
            if (fecha != '') {
                var activ = jQuery('#inspeccion_anual_actividad').val();
                var nota = jQuery('#inspeccion_anual_notas').val();
                var evaid = jQuery('#inspeccion_anual_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>) {
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_inspeccion_anual_);
                ladata = "op=evaluacion_save&sdid=" + sdid + "&pronum=" + pronum + "&usrid=" + usrid + "&id=" + evaid + "&form=" + form_inspeccion_anual_ + "&fecha=" + fecha + "&activ=" + activ + "&content=" + jsonstr + "&nota=" + nota;
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
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_actividad"><option value="seleccione">Seleccione una</option><option value="0">Recarga</option><option value="1">Revisión</option></select></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="inspeccion_anual_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_inspeccion_anual_);"/></div>
            </p>
        </fieldset>

        <!-- GENERAL -->

        <fieldset>
            <legend>General</legend>
            <p>
            <div class="one_sixth"><label>Despresurización del extintor</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo01"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></div>
            <div class="one_sixth"><label>Manguera</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo02"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            <div class="one_sixth"><label>Boquilla</label></div>
            <div class="one_sixth last"><select id="inspeccion_anual_campo03"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            </p>	                   
        </fieldset>

        <!-- VALVULA -->

        <fieldset>
            <legend>Revisión minuciosa de las partes mecánicas de la válvula</legend>
            <p>
            <div class="one_sixth"><label>Manija de Transporte</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo04"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option><option value="2">N/A</option></select></div>
            <div class="one_sixth"><label>Vastago (se bloquea con revisión)</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo05"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Malo</option></select></div>
            <div class="one_sixth"><label>Manija de operación</label></div>
            <div class="one_sixth last"><select id="inspeccion_anual_campo06"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Empaques (se bloquea con revisión)</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo07"><option value="seleccione">Seleccione una</option><option value="0">Buenos</option><option value="1">Malos</option><option value="2">N/A</option></select></div>
            <div class="one_sixth"><label>Rosca hembra</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo08"><option value="seleccione">Seleccione una</option><option value="0">Buenas</option><option value="1">Malas</option><option value="2">N/A</option></select></div>
            <div class="one_sixth"><label>Rosca macho (se bloquea con revisión)</label></div>
            <div class="one_sixth last"><select id="inspeccion_anual_campo09"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option><option value="2">N/A</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Limpieza general de sus partes</label></div>
            <div class="one_sixth last">Check</div>
            </p>
        </fieldset>

        <!-- CILINDRO -->

        <fieldset>
            <legend>Manometro de control</legend>
            <p>
            <div class="one_sixth"><label>Aguja</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo10"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            <div class="one_sixth"><label>Escala de medición</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo11"><option value="seleccione">Seleccione una</option><option value="0">Legible</option><option value="1">Ilegible</option></select></div>
            <div class="one_sixth"><label>Cristal</label></div>
            <div class="one_sixth last"><select id="inspeccion_anual_campo12"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Malo</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Calibración en PSI</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo13"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            </p>
            <p>
            <div class="one_fourth"><label>Precargar según clase y capacidad del extintor</label></div>
            </p>
            <p>
            <div class="one_sixth"><label>Manometro correcto</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo14"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
        </fieldset>

        <!-- BOQUILLA -->

        <fieldset>
            <legend>Estado del cilindro</legend>
            <p>
            <div class="one_sixth"><label>Presenta corrosión</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo15"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            <div class="one_sixth"><label>Presenta abolladuras</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo16"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            <div class="one_sixth"><label>Presenta reparaciones</label></div>
            <div class="one_sixth last"><select id="inspeccion_anual_campo17"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Cilindro con galapago</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo18"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
        </fieldset>

        <!-- MANGUERA -->

        <fieldset>
            <legend>Revisión del agente extintor</legend>
            <p>
            <div class="one_sixth"><label>Propiedades químicas</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo19"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Malo</option></select></div>
            <div class="one_sixth"><label>Calidad</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo20"><option value="seleccione">Seleccione una</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Adición</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo23"><option value="seleccione">Seleccione una</option><option value="0">0 - 1000</option><option value="1">1000 - 2000</option><option value="2">2000 - 3000</option><option value="3">3000 - 4000</option><option value="4">4000 - 5000</option><option value="5">5000 - 6000</option><option value="6">6000 - 7000</option><option value="7">7000 - 8000</option><option value="8">8000 - 9000</option></select></div>
            <div class="one_sixth"><label>Cantidad</label></div>
            <div class="one_sixth"><input id="inspeccion_anual_campo24" type="text" name="name"  class="sftable" /></div>
            </p>
        </fieldset>

        <!-- MMANOMETRO CONTROL DE presión -->

        <fieldset>
            <legend>Revisión de las etiquetas</legend>
            <p>
            <div class="one_sixth"><label>Etiqueta de instrucción</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo25"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Malo</option></select></div>
            <div class="one_sixth"><label>Rotulo</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo26"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Malo</option></select></div>
            </p>
        </fieldset>

        <!-- CARRO Y RUEDAS -->

        <fieldset>
            <legend>Presurización del extintor</legend>
            <p>
            <div class="one_sixth"><label>Control de presión</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo27"><option value="seleccione">Seleccione una</option><option value="0">125 PSI</option><option value="1">150 PSI</option><option value="2">195 PSI</option><option value="3">240 PSI</option></select></div>
            <div class="one_sixth"><label>Presenta fugas</label></div>
            <div class="one_sixth"><select id="inspeccion_anual_campo28"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            <div class="one_sixth"><label>Prueba</label></div>
            <div class="one_sixth last">Check</div>
            </p>
        </fieldset>

        <!-- ABRAZADERAS -->

        <fieldset>
            <legend>Ultima fecha de prueba hidrostatica</legend>
            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input id="inspeccion_anual_campo29" type="text" name="name" value="precargado" class="sftable" /></div>
            </p>
        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="inspeccion_anual_notas" class="mftable" cols="" rows=""></textarea>
            </p>
        </fieldset>

        <input type="button" id="inspeccion_anual_registrar" value="Registrar" onclick="inspeccion_anual_savedata()"/>
    </div>
</form>