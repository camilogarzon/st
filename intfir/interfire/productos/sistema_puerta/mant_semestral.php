<form id="semestre_">
    <script type="text/javascript">
        jQuery(document).ready(function(){applyDatepicker('semestre_fecha');});
        var form_semestre_ = 'semestre_';var sdid = '<?php echo getUserIdSede(); ?>';var usrid = '<?php echo getUserId(); ?>';var pronum = '<?php echo $_GET['id']; ?>';
        
        function semestre_savedata() {
            fecha = jQuery('#semestre_fecha').val();
            if (fecha != ''){
                var sist = jQuery('#semestre_sistema').val();
                var activ = jQuery('#semestre_actividad').val();
                var nota = jQuery('#semestre_notas').val();
                var evaid = jQuery('#semestre_eva_id').val();
                jsonstr = stringifyFormJson('semestre_');
                ladata = "op=evaluacion_save&sdid="+sdid+"&pronum="+pronum+"&usrid="+usrid+"&id="+evaid+"&form="+form_semestre_+"&fecha="+fecha+"&sist="+sist+"&activ="+activ+"&content="+jsonstr+"&nota="+nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, semestre_responseSave);
            }
        }
        
        function semestre_responseSave(data){
            cursorNormal();
            if (data.output.valid){
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
                alert(''+data.output.response.content);
            }
        }
    </script>
    <div class="form_default">
        <input type="hidden" id="semestre_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="semestre_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="semestre_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="semestre_actividad"><option value="seleccione">Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="one_sixth"><input type="button" class="sftable" id="semestre_cagar" value="CARGAR" style="cursor: pointer;" onclick="semestre_loadform();"/></div>
            </p>
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
                        <td>1. Comprobar que la compuerta cierra completamente y se encaja el pestillo (si se dispone de el)</td>
                        <td><select id="semestre_campo01"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>2. Comprobar que la compuerta esta firmemente anclada en su lugar y que el conducto (si existe) esta correctamente sujeto con las juntas</td>
                        <td><select id="semestre_campo02"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>3. Engrasar todas las partes móviles para asegurar su correcto funcionamiento</td>
                        <td><select id="semestre_campo03"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                </table>

        </fieldset>



        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea  id="semestre_notas" class="mftable" cols="" rows=""></textarea>
            </p>
        </fieldset>

        <input type="button"  id="semestre_registrar" value="Registrar" onclick="semestre_savedata()"/>
    </div>
</form>