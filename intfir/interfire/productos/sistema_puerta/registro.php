<form id="registro">
    <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery( "#registro_fecha" ).datepicker( jQuery.datepicker.regional[ "es" ] );
            jQuery( "#registro_campo03" ).datepicker( jQuery.datepicker.regional[ "es" ] );
            jQuery( "#registro_campo07" ).datepicker( jQuery.datepicker.regional[ "es" ] );
        });
        function registro_savedata() {
            var ladata = {};    

            jQuery("#registro :input").each(function() {           
                ladata[jQuery(this).attr('id')] = jQuery(this).val();  
            });

            var json = JSON.stringify(ladata);
            console.log('json='+JSON.stringify(json));

        }
        
        
    </script>
    <div class="form_default">

        <!-- INFORMACION GENERAL -->

        <fieldset>
            <legend>Información General</legend>

            <p>
            <div class="one_sixth"><label>Fecha</label></div>
            <div class="one_sixth"><input type="text" id="registro_fecha" class="sftable" readonly="true" /></div>
            <div class="one_sixth"><label>Sistema</label></div>
            <div class="one_sixth"><input type="text" id="registro_sistema"  class="sftable" /></div>
            <div class="one_sixth"><label>Actividad</label></div>
            <div class="one_sixth last"><select id="registro_actividad"><option value="seleccione">Seleccione una</option><option value="0">Instalación</option><option value="1">Diseño</option><option value="2">Auditoría</option><option value="3">Interventoría</option><option value="4">IPM</option></select></div>
            <div class="one_sixth"><input type="button" class="sftable" value="CARGAR" style="cursor: pointer;" onclick="registro_savedata()"/></div>
            </p>
        </fieldset>

        <!-- PUERTAS CORTA FUEGO -->

        <fieldset>
            <legend>Puertas Cortafuego</legend>
            <p>
            <div class="one_fourth"><label >Clasificación en horas</label></div>
            <div class="one_fourth"><input type="text" class="sftable" id="registro_campo01" /></div>
            <div class="one_fourth"><label >Dispositivo de cierre</label></div>
            <div class="one_fourth last"><select id="registro_campo02"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
            <p>
            <div class="one_fourth"><label >Fecha instalación</label></div>
            <div class="one_fourth"><input type="text" class="sftable" id="registro_campo03"/></div>
            <div class="one_fourth"><label >Señalización adecuada</label></div>
            <div class="one_fourth last"><select id="registro_campo04"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            </p>
            <p>
            <div class="one_fourth"><label >Aprobado UL/FM</label></div>
            <div class="one_fourth"><select id="registro_campo05"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
            <div class="one_fourth"><label >Tipo de cerramiento</label></div>
            <div class="one_fourth last"><input type="text" class="sftable" id="registro_campo06"/></div>
            </p>
        </fieldset>

        <!-- ultimo mantenimiento -->

        <fieldset><legend>mantenimiento</legend>
            <p>
            <div class="one_half"><label >Fecha ultimo mantenimiento</label></div>
            <div class="one_half last"><input type="text" class="sftable" id="registro_campo07"/></div>
            </p>
        </fieldset>

        <!-- NOTAS -->

        <fieldset>
            <legend>Notas</legend>
            <p>
                <textarea id="registro_notas" class="mftable" cols="" rows="" maxlength="2000"></textarea>
            </p>
        </fieldset>

        <input type="button" id="registro_registrar" value="Registrar" onclick="registro_savedata()"/>
    </div>
</form>