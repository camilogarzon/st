<form id="trimestre_">
    <script type="text/javascript">
        jQuery(document).ready(function(){applyDatepicker('trimestre_fecha');});
        var form_trimestre_ = 'trimestre_';var sdid = '<?php echo getUserIdSede(); ?>';var usrid = '<?php echo getUserId(); ?>';var pronum = '<?php echo $_GET['id']; ?>';
        
        function trimestre_savedata() {
            fecha = jQuery('#trimestre_fecha').val();
            if (fecha != ''){
                var sist = jQuery('#trimestre_sistema').val();
                var activ = jQuery('#trimestre_actividad').val();
                var nota = jQuery('#trimestre_notas').val();
                var evaid = jQuery('#trimestre_eva_id').val();
                jsonstr = stringifyFormJson('trimestre_');
                ladata = "op=evaluacion_save&sdid="+sdid+"&pronum="+pronum+"&usrid="+usrid+"&id="+evaid+"&form="+form_trimestre_+"&fecha="+fecha+"&sist="+sist+"&activ="+activ+"&content="+jsonstr+"&nota="+nota;
                ladata = ladata.replace("#", "%23");
                callAjaxForm(ladata, trimestre_responseSave);
            }
        }
        
        function trimestre_responseSave(data){
            cursorNormal();
            if (data.output.valid){
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
                alert(''+data.output.response.content);
            }
        }
    </script>
    <div class="form_default">
        <input type="hidden" id="trimestre_eva_id" value="0"/>
        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="trimestre_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="trimestre_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="trimestre_actividad"><option value="seleccione">Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="one_sixth"><input type="button" class="sftable" id="trimestre_cagar" value="CARGAR" style="cursor: pointer;" onclick="trimestre_loadform();"/></div>
            </p>
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
                        <td>1. Comprobar si hay daños físicos en la puerta y ver que el panel de vidriado (si existe) esta correcto</td>
                        <td><select id="trimestre_campo01"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>2. Comprobar que funcionan los cierrapuertas</td>
                        <td><select id="trimestre_campo02"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>3. Comprobar que funcionan los pestillos</td>
                        <td><select id="trimestre_campo03"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>4. Comprobar que funciona el coordinador (si existe)</td>
                        <td><select id="trimestre_campo04"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>5. Comprobar que los herrajes están seguros</td>
                        <td><select id="trimestre_campo05"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>6. Comprobar que no exista corrosión en puertas Kalamein</td>
                        <td><select id="trimestre_campo06"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>7. Comprobar cables y cadenas de las puertas deslizantes para asegurar que estan en perfecto estado y funcionan adecuadamente</td>
                        <td><select id="trimestre_campo07"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>8. Comprobar que pintura u otros contaminantes en cables, cadenas, enrrolladores, fusibles, y otras partes moviles no puedan afectar a su funcionamiento. Reemplazar los eslabones fusibles que se hayan pintado</td>
                        <td><select id="trimestre_campo08"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>9. Engrasar herrajes en puertas giratorias, enrrollables y deslizantes</td>
                        <td><select id="trimestre_campo09"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>10. Comprobar que las puertas homologadas no han sido modificadas indebidamente</td>
                        <td><select id="trimestre_campo10"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>11. Limpiar el área circundante de elementos que puedan interferir u obstruir el funcionamiento de la puerta</td>
                        <td><select id="trimestre_campo11"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                    <tr>
                        <td>12. Comprobar que las puertas deslizantes se mueven con facilidad y cierran completamente</td>
                        <td><select id="trimestre_campo12"><option value="seleccione">Seleccionar</option><option value="0">SI</option><option value="1">NO</option></select></td>
                    </tr>
                </table>

        </fieldset>



        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea  id="trimestre_notas" class="mftable" cols="" rows=""></textarea>
            </p>
        </fieldset>

        <input type="button"  id="trimestre_registrar" value="Registrar" onclick="trimestre_savedata()"/>
    </div>
</form>