<?php
session_start();
include_once '../includes/generic_validate_rol.php';
$arrequipos = $_SESSION['equipos'];
$emp = '<option value="seleccione">Seleccione...</option>';
for ($i = 0; $i < count($arrequipos); $i++) {
    $emp .= '<option value="' . $arrequipos[$i]['id'] . '">[' . $arrequipos[$i]['numinventario'] . '] - ' . $arrequipos[$i]['sistema'] . '</option>';
}
$opciones_equipos = $emp;
$opciones_empresas = $_SESSION['opciones_empresas'];
$opciones_sistemas = $_SESSION['opciones_sistemas'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include_once 'dynamicwindow_head.php';
        ?>
    </head>
    <body>
        <style type="text/css">
            input{
                width: 320px !important;
            }
        </style>
        <script type="text/javascript">
            var sdid = 0;
            function responseAjax(data){
                cursorNormal();
                if (data.output.valid){
                    jQuery("input").val('');
                    jQuery("#accion").val('Guardar');
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("errortext");
                    jQuery("#mensaje").addClass("infotext");
                    jQuery("#mensaje").append('Información guardada correctamente');
                    parent.window.location = '../equipos.php';
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
                jQuery("#mensaje").show();
            }
            
            function responseLoad(data){
                cursorNormal();
                if (data.output.valid){
                    res = data.output.response;
                    jQuery("#marca").val(res[0].marca);
                    jQuery("#selectEmpresa").val(res[0].euid);
                    jQuery("#selectSistema").val(res[0].catid);
                    idsede = "op=sede_get&euid="+res[0].euid;
                    sdid = res[0].sdid;
                    callAjaxRqst(idsede, responseSede);
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
            }
            
            function responseLoadEmpresa(data){
                cursorNormal();
                if (data.output.valid){
                    res = data.output.response;
                    jQuery("#selectSede").empty();
                    opciones = '<option value="seleccione">Seleccione...</option>';
                    for (var j in res) {
                        opciones += '<option value="'+res[j].id+'">'+res[j].nombre+'</option>';
                    }
                    jQuery('#selectSede').append(opciones);
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
            }
            
            function responseSede(data){
                cursorNormal();
                if (data.output.valid){
                    res = data.output.response;
                    jQuery("#selectSede").empty();
                    opciones = '<option value="seleccione">Seleccione...</option>';
                    for (var j in res) {
                        opciones += '<option value="'+res[j].id+'">'+res[j].nombre+'</option>';
                    }
                    jQuery('#selectSede').append(opciones);
                    jQuery("#selectSede").val(sdid);
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
            }
			
            function savedata(){
                j = jQuery("#selectEmpresa").val();
                k = jQuery("#selectSede").val();
                l = jQuery("#selectSistema").val();
                jQuery("#mensaje").empty();
                jQuery("input").removeClass("requirefield");
                if (j == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione la empresa.');jQuery("#mensaje").show();return;}
                if (k == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione la sede.');jQuery("#mensaje").show();return;}
                if (l == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione el sistema.');jQuery("#mensaje").show();return;}
                a = jQuery("#marca").val();
                b = jQuery("#numinventario").val();
                var enable = true;
                if (a.length < 2){ enable = false; setrequirefield("marca");}
                if (!enable) {
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                    jQuery("#mensaje").show();
                } else {
                    savedatavalidate();
                }
            }
			
            function savedatavalidate(){
                jQuery("#mensaje").hide();
                var ladata = "op=equipo_save";
                ladata += "&euid="+j+"&sdid="+k+"&catid="+l+"&marca="+a+"&id="+b;
                ladata = ladata.replace("#", "%23");
                callAjaxRqst(ladata, responseAjax);
            }
            
            function loadselectedEmpresa(){
                jQuery("#mensaje").hide();
                jQuery("#selectSede").empty();
                jQuery("#selectSede").append('<option value="seleccione">Seleccione...</option>');
                a = jQuery("#selectEmpresa").val();
                if (a != 'seleccione'){
                    ladata = "op=sede_get&euid="+a;
                    callAjaxRqst(ladata, responseLoadEmpresa);
                } else {
                    jQuery("input").val('');
                    jQuery("#accion").val('Guardar');
                    jQuery("#selectSistema").val('seleccione');
                    jQuery("#selectEmpresa").val('seleccione');
                    jQuery("#selectSede").val('seleccione');
                }
            }
            
            function loadselected(){
                jQuery("#mensaje").hide();
                jQuery("#selectSede").empty();
                jQuery("#selectSede").append('<option value="seleccione">Seleccione...</option>');
                a = jQuery("#numinventario").val();
                if (a != 'seleccione'){
                    ladata = "op=equipo_get&id="+a;
                    callAjaxRqst(ladata, responseLoad);
                } else {
                    jQuery("input").val('');
                    jQuery("#accion").val('Guardar');
                    jQuery("#selectSistema").val('seleccione');
                    jQuery("#selectEmpresa").val('seleccione');
                    jQuery("#selectSede").val('seleccione');
                }
            }
        </script>
        <table>
            <tr>
                <td style="width: 100px;">ID</td>
                <td><select id="numinventario" name="numinventario" onchange="loadselected();">
                        <?php echo $opciones_equipos; ?>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Empresa</td>
                <td><select id="selectEmpresa" name="selectEmpresa" onchange="loadselectedEmpresa();">
                        <?php echo $opciones_empresas; ?>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Sede</td>
                <td><select id="selectSede" name="selectSede" >
                        <option value="seleccione">Seleccione...</option>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Sistema</td>
                <td><select id="selectSistema" name="selectSistema">
                        <?php echo $opciones_sistemas; ?>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Marca</td>
                <td><input type="text" id="marca" name="marca" maxlength="50"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" id="accion" value="Guardar" style="cursor: pointer" onclick="savedata();"/></td>
            </tr>
            <tr>
                <td></td>
                <td><div id="mensaje" style="display: none">Los campos en rojo son obligatorios</div></td>
            </tr>
        </table>

    </body>
</html>
