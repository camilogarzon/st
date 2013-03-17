<form id="trimestre_puerta">
    <script type="text/javascript">
        var form_trimestre_ = 'trimestre_puerta';var sdid = '<?php echo getUserIdSede(); ?>';var usrid = '<?php echo getUserId(); ?>';var pronum = '<?php echo $_GET['id']; ?>';
        
        jQuery(document).ready(function(){applyDatepicker('trimestre_fecha');
            jQuery('#trimestre_fecha_historial').change(function(){
                jQuery('#trimestre_fecha').val(jQuery('#trimestre_fecha_historial').val());
                trimestre_loadform();
            });
            trimestre_loadLastData();
        });
        
        function trimestre_savedata() {
            fecha = jQuery('#trimestre_fecha').val();
            if (fecha != ''){
                var sist = jQuery('#trimestre_sistema').val();
                var activ = jQuery('#trimestre_actividad').val();
                var nota = jQuery('#trimestre_notas').val();
                var evaid = jQuery('#trimestre_eva_id').val();
                if (evaid > 0 && <?php echo $ena = (isAdmin() || isCoordinator()) ? 'false' : 'true'; ?>){
                    alert('No tiene permiso de editar este formulario.');
                    return;
                }
                jsonstr = stringifyFormJson(form_semestre_);
                ladata = "op=evaluacion_save&sdid="+sdid+"&pronum="+pronum+"&usrid="+usrid+"&id="+evaid+"&form="+form_trimestre_+"&fecha="+fecha+"&sist="+sist+"&activ="+activ+"&content="+jsonstr+"&nota="+nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, trimestre_responseSave);
            } else {
                alert('Seleccione la fecha.');
            }
        }
        
        function trimestre_responseSave(data){
            cursorNormal();
            if (data.output.valid){
                trimestre_loadLastData();
                clearForm(form_trimestre_);
                alert('Información almacenada correctamente.');
            } else {
                alert('Se presentó un error.');
            }
        }
        
        function trimestre_loadform(){
            fecha = jQuery('#trimestre_fecha').val();
            if (fecha != ''){
                ladata = "op=evaluacion_get&sdid="+sdid+"&pronum="+pronum+"&fecha="+fecha+"&form="+form_trimestre_;
                callAjaxForm(ladata, trimestre_responseLoad);
            }
        }
        
        function trimestre_responseLoad(data){
            cursorNormal();
            if (data.output.valid){
                res = data.output.response;
                jsonstr = res[0].cont;
                populateForm(form_trimestre_, JSON.parse(jsonstr));
                jQuery('#trimestre_eva_id').val(res[0].id);
            } else {
                clearForm(form_trimestre_);
                jQuery('#trimestre_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }
        
        function trimestre_loadLastData(){
            ladata = "op=evaluacion_get&sdid="+sdid+"&pronum="+pronum+"&form="+form_trimestre_;
            callAjaxForm(ladata, trimestre_responseloadLastData);
        }
        
        function trimestre_responseloadLastData(data){
            cursorNormal();
            if (data.output.valid){
                jQuery('#trimestre_fecha_historial').empty();
                res = data.output.response;
                opciones = '<option value="seleccione">Seleccione una</option>';
                for (var j in res) {
                    opciones += '<option value="'+res[j].fecha+'">'+res[j].fecha+'</option>';
                }
                jQuery('#trimestre_fecha_historial').append(opciones);
                jQuery('#trimestre_fecha').val(res[0].fecha);
                trimestre_loadform();
            } else {
                clearForm(form_trimestre_);
                jQuery('#trimestre_responsable').val(responsible);
                //alert(''+data.output.response.content);
            }
        }
        
    </script>
    <div class="form_default">
        <input type="hidden" id="trimestre_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="trimestre_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth ocultar"><input type="button" class="sftable" id="trimestre_cagar" value="CARGAR" style="cursor: pointer;" onclick="trimestre_loadform();"/></div>
            <div class="one_sixth"><label>Fechas anteriores</label></div>
            <div class="one_sixth"><select id="trimestre_fecha_historial"><option value="seleccione">Seleccione una</option></select></div>
            <div class="one_sixth last"><input type="button" class="sftable" id="trimestre_limpiar" value="LIMPIAR" style="cursor: pointer;" onclick="clearForm(form_trimestre_);jQuery('#trimestre_responsable').val(responsible);"/></div>
            <div class="clear"></div>
            <div class="one_sixth"><label>Responsable</label></div>
            <div class="one_sixth"><input type="text" id="trimestre_responsable" class="sftable" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="trimestre_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="trimestre_actividad"><option value="seleccione">Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
        </fieldset>

        <fieldset>
            <legend>Inspección y Mantenimiento Trimestral</legend>

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
                        <td>1. Existen daños físicos en la puerta?</td>
                        <td><select id="trimestre_campo01"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>2. Funcionan las cierrapuertas?</td>
                        <td><select id="trimestre_campo02"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>3. Funcionan los pestillos?</td>
                        <td><select id="trimestre_campo03"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>4. Funciona el coordinador?</td>
                        <td><select id="trimestre_campo04"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>5. Están seguros los herrajes?</td>
                        <td><select id="trimestre_campo05"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>6. Existe corrosión en puertas Kalamein?</td>
                        <td><select id="trimestre_campo06"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>7. Se encuentran en perfecto estado y funcionan adecuadamente los cables y cadenas de las puertas deslizantes?</td>
                        <td><select id="trimestre_campo07"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>8. Los cables, cadenas, enrrolladores, fusibles y otras partes móviles no están contaminados con pintura u otros elementos?</td>
                        <td><select id="trimestre_campo08"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>9. Se engrasaron los herrajes en puertas giratorias, enrrollables y deslizantes?</td>
                        <td><select id="trimestre_campo09"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>10. Las puertas homologadas no han sido modificadas indebidamente?</td>
                        <td><select id="trimestre_campo10"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>11. Está libre de obstrucción la puerta?</td>
                        <td><select id="trimestre_campo11"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>12. Las puertas deslizantes se mueven con facilidad y cierran completamente?</td>
                        <td><select id="trimestre_campo12"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                </table>
            </div>

        </fieldset>
        
        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
                <textarea  id="trimestre_notas" class="mftable" cols="" rows=""></textarea>
        </fieldset>
        <div class="clear"></div>
        <input type="button"  id="trimestre_registrar" value="Registrar" onclick="trimestre_savedata()"/>
    </div>
</form>