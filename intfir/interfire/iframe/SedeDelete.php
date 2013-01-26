<?php
session_start();
$opciones_sedes = $_SESSION['opciones_sedes'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include_once 'dynamicwindow_head.php';
        ?>
    </head>
    <body>

        <script type="text/javascript">
            function responseAjax(data){
                cursorNormal();
                if (data.output.valid){
                    jQuery('#continuar').attr('checked', false);
                    jQuery("#selectSede").empty();
                    res = data.output.response;
                    opciones = '<option value="seleccione">Seleccione...</option>';
                    for (var j in res) {
                        opciones += '<option value="'+res[j].id+'">'+res[j].razonsocial+'</option>';
                    }
                    jQuery('#selectSede').append(opciones);
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("errortext");
                    jQuery("#mensaje").addClass("infotext");
                    jQuery("#mensaje").append('Información eliminada correctamente');
                    parent.window.location = '../sedes.php';
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
                jQuery("#mensaje").show();
            }
            
            function deletedata(){
                jQuery("input").removeClass("requirefield");
                jQuery("#mensaje").empty();
                jQuery("#mensaje").addClass("errortext");
                jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                a = jQuery("#selectSede").val();
                b = jQuery('#continuar').is(":checked");
                var enable = true;
                var ladata = "op=sede_delete";
                if (!b){ enable = false; setrequirefield("continuar"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('Seleccione la casilla, si desea continuar.');}
                if (a == 'seleccione'){ enable = false; setrequirefield("selectSede"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('Seleccione la sede.');}
                
                if (!enable) {
                    jQuery("#mensaje").show();
                } else {
                    jQuery("#mensaje").hide();
                    ladata += "&id="+a;
                    callAjaxRqst(ladata, responseAjax);
                }
            }
            
        </script>

        <table>
            <tr>
                <td style="width: 100px;">Sede</td>
                <td><select id="selectSede" name="selectSede">
                        <?php echo $opciones_sedes; ?>
                    </select></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Con esta operación eliminará de manera definitiva e irreversible información de la sede seleccionada.</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><div align="right"><input type="checkbox" id="continuar" name="continuar" /></div></td>
                <td>Sí, deseo continuar.</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" id="accion" value="Eliminar" style="cursor: pointer" onclick="deletedata();"/></td>
            </tr>
            <tr>
                <td></td>
                <td><div id="mensaje" style="display: none">Los campos en rojo son obligatorios</div></td>
            </tr>
        </table>

    </body>
</html>
