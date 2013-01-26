<?php
session_start();
require_once '../lib/Controller.php';
$control = new Controller();
$control->usuario_get();
$arrusr = $control->getResponse();
$arrusr = $arrusr['output']['response'];

$emp = '<option value="seleccione">Seleccione...</option>';
for ($i = 0; $i < count($arrusr); $i++) {
    $emp .= '<option value="' . $arrusr[$i]['id'] . '">[' . $arrusr[$i]['nick'] . '] ' . $arrusr[$i]['nombre'] . ' ' . $arrusr[$i]['apellido'] . ' (' . $arrusr[$i]['empresa_razonsocial'] . ')</option>';
}
$opciones_usuarios = $emp;
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
                    jQuery("#selectUsuario").empty();
                    res = data.output.response;
                    opciones = '<option value="seleccione">Seleccione...</option>';
                    jQuery('#selectUsuario').append(opciones);
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("errortext");
                    jQuery("#mensaje").addClass("infotext");
                    jQuery("#mensaje").append('Información eliminada correctamente');
                    parent.window.location = '../usuarios.php';
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
                a = jQuery("#selectUsuario").val();
                b = jQuery('#continuar').is(":checked");
                var enable = true;
                var ladata = "op=usuario_delete";
                if (!b){ enable = false; setrequirefield("continuar"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('Seleccione la casilla, si desea continuar.');}
                if (a == 'seleccione'){ enable = false; setrequirefield("selectUsuario"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('Seleccione el usuario.');}
                
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
                <td style="width: 100px;">Usuario</td>
                <td><select id="selectUsuario" name="selectUsuario">
                        <?php echo $opciones_usuarios; ?>
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
