<form id="registro_extintor">
    <script type="text/javascript">
        var form_registro_ = 'registro_extintor';var sdid = '<?php echo getUserIdSede(); ?>';var usrid = '<?php echo getUserId(); ?>';var pronum = '<?php echo $_GET['id']; ?>';var ladata = '';var jsonstr = '';var fecha = '';
        
        jQuery(document).ready(function(){
            applyDatepicker('registro_fecha');
            applyDatepicker('registro_campo06');
            applyDatepicker('registro_campo11');
            responsible = '<?php echo getUserFullName(); ?>';
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
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth"><select id="registro_actividad"><option value="seleccione">Seleccione una</option><option value="0">IPM</option></select></div>
            <div class="one_sixth"><label>Código QR</label></div>
            <div class="one_sixth last"><select id="registro_codigo_qr"><option value="seleccione">Seleccione una</option><option value="0">Legible</option><option value="1">Ilegible</option></select></div>
            </p>
        </fieldset>

        <!-- GENERAL -->

        <fieldset>
            <legend>General</legend>
            <p>
            <div class="one_sixth"><label>Localización del extintor</label></div>
            <div class="one_sixth"><input type="text"  class="sftable"  id="registro_localizacion"/></div>
            <div class="one_sixth"><label>Sede</label></div>
            <div class="one_sixth last"><input id="registro_sede" type="text" value="dato precargado"  class="sftable" /></div>
            </p>
            <p>
            <div class="one_sixth"><label>Clase de fuego</label></div>
            <div class="one_sixth"><select id="registro_clase_fuego"><option value="seleccione">Seleccione una</option><option value="0">ABC</option><option value="1">BC</option><option value="2">AC</option><option value="3">A</option><option value="4">K</option><option value="5">D</option></select></div>
            <div class="one_sixth"><label>Capacidad</label></div>
            <div class="one_sixth"><select id="registro_capacidad"><option value="seleccione">Seleccione una</option><option value="0">5 lb</option><option value="1">10 lb</option><option value="2">15 lb</option><option value="3">20 lb</option><option value="4">30 lb</option><option value="5">50 lb</option><option value="6">80 lb</option><option value="7">100 lb</option><option value="8">150 lb</option>><option value="9">1.6 gl</option><option value="10">2.5 gl</option><option value="11">25 gl</option><option value="12">2500 gr</option><option value="13">3700 gr</option><option value="14">7000 gr</option><option value="15">9000 gr</option></select></div>
            <div class="one_sixth"><label>Agente Extintor</label></div>
            <div class="one_sixth last"><select id="registro_agente_extintor"><option value="seleccione">Seleccione una</option><option value="0">Polvo químico seco</option><option value="1">Dióxido de carbono</option><option value="2">Agua presurizada</option><option value="3">Agente halogenado</option><option value="4">AFFF</option><option value="5">FFFP</option><option value="6">Químico húmedo</option><option value="7">Bromotriflorometano Halon 3101</option><option value="8">Convinación Halón 1211 y 1301</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Alcance horizontal del chorro</label></div>
            <div class="one_sixth">
                <select  id="registro_alcance_horizontal">
                    <option value="seleccione">Seleccione una</option>
                    <option value="0">3 a 8 pies</option>
                    <option value="1">3 a 10 pies</option>
                    <option value="2">3 a 12 pies</option>
                    <option value="3">5 a 8 pies</option>
                    <option value="4">5 a 12 pies</option>
                    <option value="5">5 a 20 pies</option>
                    <option value="6">6 a 10 pies</option>
                    <option value="7">6 a 35 pies</option>
                    <option value="8">8 a 12 pies</option>
                    <option value="9">9 a 15 pies</option>
                    <option value="10">10 a 15 pies</option>
                    <option value="11">10 a 18 pies</option>
                    <option value="12">10 a 20 pies</option>
                    <option value="13">11 a 22 pies</option>
                    <option value="14">14 a 16 pies</option>
                    <option value="15">15 a 30 pies</option>
                    <option value="16">15 a 45 pies</option>
                    <option value="17">20 pies</option>
                    <option value="18">20 a 25 pies</option>
                    <option value="19">20 a 35 pies</option>
                    <option value="20">30 pies</option>
                    <option value="21">30 a 40 pies</option>
                    <option value="22">35 pies</option>
                    <option value="23">50 pies</option>
                    <option value="24">70 pies</option>
                </select>
            </div>
            <div class="one_sixth"><label>Tiempo aprox. de descargue</label></div>
            <div class="one_sixth">
                <select  id="registro_tiempo_descarga">
                    <option value="seleccione">Seleccione una</option>
                    <option value="1">8 a 10 seg.</option>
                    <option value="2">8 a 15 seg.</option>
                    <option value="3">8 a 20 seg.</option>
                    <option value="4">8 a 25 seg.</option>
                    <option value="5">8 a 30 seg.</option>
                    <option value="6">9 a 23 seg.</option>
                    <option value="7">10 a 15 seg.</option>
                    <option value="8">10 a 18 seg.</option>
                    <option value="9">10 a 22 seg.</option>
                    <option value="10">10 a 25 seg.</option>
                    <option value="11">10 a 30 seg.</option>
                    <option value="12">15 a 20 seg.</option>
                    <option value="13">17 a 33 seg.</option>
                    <option value="14">18 seg.</option>
                    <option value="15">20 a 105 seg.</option>
                    <option value="16">20 a 150 seg.</option>
                    <option value="17">25 a 35 seg.</option>
                    <option value="18">30 seg.</option>
                    <option value="19">30 a 35 seg.</option>
                    <option value="20">30 a 40 seg.</option>
                    <option value="21">30 a 44 seg.</option>
                    <option value="22">30 a 60 seg.</option>
                    <option value="23">30 a 80 seg.</option>
                    <option value="24">35 seg.</option>
                    <option value="25">35 a 45 seg.</option>
                    <option value="26">40 seg.</option>
                    <option value="27">50 seg.</option>
                    <option value="28">62 seg.</option>
                    <option value="29">75 a 85 seg.</option>
                    <option value="30">1 min.</option>
                    <option value="31">1.5 min.</option>
                    <option value="32">2 min.</option>
                    <option value="33">2.5 min.</option>
                    <option value="34">2 a 3 min.</option>
                    <option value="35">3 min.</option>
                </select>
            </div>
            <div class="one_sixth"><label>Clasificaciones UL o ULC</label></div>
            <div class="one_sixth last">
                <select  id="registro_clasif_uloulc">
                    <option value="seleccione">Seleccione una</option>
                    <option value="1">1 a 2 B-C</option>
                    <option value="2">1 a 5 B-C</option>
                    <option value="3">1 a 10 B-C</option>
                    <option value="4">1 B-C a 10 a 80 B-C</option>
                    <option value="5">1 a 10 B-C y 4 a 80 B-C</option>
                    <option value="6">2 a 10 B-C</option>
                    <option value="7">2 a 4A y 20 a 80 B-C</option>
                    <option value="8">5 B-C</option>
                    <option value="9">5 a 10 B-C</option>
                    <option value="10">5 a 20 B-C</option>
                    <option value="11">5 a 30 B-C</option>
                    <option value="12">10 B-C</option>
                    <option value="13">10 a 20 B-C</option>
                    <option value="14">10 a 80 B-C</option>
                    <option value="15">10 a 120 B-C</option>
                    <option value="16">10 a 160 B-C</option>
                    <option value="17">20 a 30 B-C</option>
                    <option value="18">20 a 40 B-C</option>
                    <option value="19">30 a 160 a 240 B-C</option>
                    <option value="20">40 a 60 B-C</option>
                    <option value="21">40 a 120 B-C</option>
                    <option value="22">40 a 320 B-C</option>
                    <option value="23">80 a 240 B-C</option>
                    <option value="24">40 a 80 B-C</option>
                    <option value="25">60 a 80 B-C</option>
                    <option value="26">60 a 160 B-C</option>
                    <option value="27">80 a 640 B-C</option>
                    <option value="28">120 a 160 B-C</option>
                    <option value="29">160 B-C</option>
                    <option value="30">480 B-C</option>
                    <option value="31">K</option>
                    <option value="32">160 B-C</option>
                    <option value="33">1 a 3A y 2 a 10 B-C</option>
                    <option value="34">1 a 4A y 10 a 40 B-C</option>
                    <option value="35">2 a 20A y 10 a 80 B-C</option>
                    <option value="36">3 a 20A y 30 a 120 B-C</option>
                    <option value="37">20 a 30A y 80 a 160 B-C</option>
                    <option value="38">20 a 40A y 60 a 320 B-C</option>
                    <option value="39">1A</option>
                    <option value="40">2A</option>
                    <option value="41">3A</option>
                    <option value="42">4A</option>
                    <option value="43">10A</option>
                    <option value="44">30A</option>
                    <option value="45">40A</option>
                    <option value="46">20A</option>
                    <option value="47">3 A 20 a 40 B</option>
                    <option value="48">2 A 10 B</option>
                    <option value="49">20 A 160 B</option>
                </select>
            </div>
            </p>
            <p>
            <div class="one_sixth"><label>Esta el edificio totalmente cubierto con extintores</label></div>
            <div class="one_sixth"><select id="registro_cubierto_extintores"><option value="seleccione">Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
            <div class="one_sixth"><input type="text" class="sftable" /></div>
            </p>	                   
        </fieldset>

        <!-- VALVULA -->

        <fieldset>
            <legend>V&aacute;lvula</legend>
            <p>
            <div class="one_sixth"><label>Estado de la manija de transporte</label></div>
            <div class="one_sixth"><select id="registro_campo01"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            <div class="one_sixth"><label>Estado de la manija de operacion</label></div>
            <div class="one_sixth"><select id="registro_campo02"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            <div class="one_sixth"><label>Estado de la valvula</label></div>
            <div class="one_sixth last"><select id="registro_campo03"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            </p>

            <p>
            <div class="one_sixth"><label>Existe oxido o corrosión</label></div>
            <div class="one_sixth"><select id="registro_campo04"><option value="seleccione">Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
            <div class="one_sixth"><label>El pasador está asegurado</label></div>
            <div class="one_sixth"><select id="registro_campo05"><option value="seleccione">Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
            </p>
        </fieldset>

        <!-- CILINDRO -->

        <fieldset>
            <legend>Cilindro</legend>
            <p>
            <div class="one_sixth"><label>Ultima fecha de prueba hidrostatica</label></div>
            <div class="one_sixth"><input id="registro_campo06" type="text"  class="sftable" /></div>
            <div class="one_sixth"><label>Daños mecánicos</label></div>
            <div class="one_sixth"><select id="registro_campo07"><option value="seleccione">Seleccione una</option><option value="0">Abolladuras</option><option value="1">Abrasión</option><option value="2">No Aplica</option></select></div>
            <div class="one_sixth"><label>Estado de la pintura</label></div>
            <div class="one_sixth last"><select id="registro_campo08"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option><option value="2">N/A</option></select></div>
            </p>
            <p>
            <div class="one_sixth"><label>Presencia de reparaciones o soldadura</label></div>
            <div class="one_sixth"><select id="registro_campo09"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            <div class="one_sixth"><label>Etiqueta</label></div>
            <div class="one_sixth"><select id="registro_campo10"><option value="seleccione">Seleccione una</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></div>
            <div class="one_sixth"><label>Fecha vencimiento</label></div>
            <div class="one_sixth last"><input id="registro_campo11" type="text"  class="sftable" /></div>
            </p>
        </fieldset>

        <!-- BOQUILLA -->

        <fieldset>
            <legend>Boquilla</legend>
            <p>
            <div class="one_sixth"><label>Boquilla (inhabilita manguera)</label></div>
            <div class="one_sixth"><select id="registro_campo12"><option value="seleccione">Seleccione una</option><option value="0">Deforme</option><option value="1">Dañada</option><option value="2">Rota</option><option value="3">Buena</option></select></div>
            <div class="one_sixth"><label>Satelite (habilita manguera y carro)</label></div>
            <div class="one_sixth last"><select id="registro_campo13"><option value="seleccione">Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
        </fieldset>

        <!-- MANGUERA -->

        <fieldset>
            <legend>Manguera (dinamico según boquilla y satelite)</legend>
            <p>
            <div class="one_sixth"><label>Estado</label></div>
            <div class="one_sixth"><select id="registro_campo14"><option value="seleccione">Seleccione una</option><option value="0">Rota</option><option value="1">Cuarteada</option><option value="2">Dañada</option><option value="3">Buena</option></select></div>
            <div class="one_sixth"><label>Acoplamiento o junta giratoria dañada</label></div>
            <div class="one_sixth"><select id="registro_campo15"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Malo</option></select></div>
            </p>
        </fieldset>

        <!-- MMANOMETRO CONTROL DE presión -->

        <fieldset>
            <legend>Manometro control de presión</legend>
            <p>
            <div class="one_sixth"><label>Aguja</label></div>
            <div class="one_sixth"><select id="registro_campo16"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
            <div class="one_sixth"><label>Cristal</label></div>
            <div class="one_sixth"><select id="registro_campo17"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Malo</option></select></div>
            <div class="one_sixth"><label>Escala</label></div>
            <div class="one_sixth last"><select id="registro_campo18"><option value="seleccione">Seleccione una</option><option value="0">Legible</option><option value="1">Ilegible</option></select></div>
            </p>
        </fieldset>

        <!-- CARRO Y RUEDAS -->

        <fieldset>
            <legend>Carro y ruedas</legend>
            <p>
            <div class="one_sixth"><label>Carro</label></div>
            <div class="one_sixth"><select id="registro_campo19"><option value="seleccione">Seleccione una</option><option value="0">Bueno</option><option value="1">Corroido</option><option value="2">Deforme</option><option value="3">Dañado</option></select></div>
            <div class="one_sixth"><label>Ruedas</label></div>
            <div class="one_sixth last"><select id="registro_campo20"><option value="seleccione">Seleccione una</option><option value="0">Buenas</option><option value="1">Dañadas</option><option value="2">Deformes</option></select></div>
            </p>
        </fieldset>

        <!-- ABRAZADERAS -->

        <fieldset>
            <legend>Abrazaderas</legend>
            <p>
            <div class="one_sixth"><label>Estado</label></div>
            <div class="one_sixth"><select id="registro_campo21"><option value="seleccione">Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option><option value="2">No Tiene</option><option value="3">No Aplica</option></select></div>
            </p>
        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea  id="registro_campo22" name="location" class="mftable" cols="" rows=""></textarea>
            </p>
        </fieldset>
        <input type="button" id="registro_registrar" value="Registrar" onclick="registro_savedata()"/>

    </div>
</form>