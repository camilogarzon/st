<?php
session_start();
require_once '../lib/Controller.php';
$control = new Controller();
include_once '../includes/generic_validate_rol.php';
include_once '../includes/generic_empresas_get.php';
$opciones_empresas = $_SESSION['opciones_empresas'];
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
        <style type="text/css">
            input{
                width: 320px !important;
            }
        </style>
        <script type="text/javascript">
            function responseAjax(data){
                cursorNormal();
                if (data.output.valid){
                    jQuery("input").val('');
                    jQuery("#accion").val('Guardar');
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("errortext");
                    jQuery("#mensaje").addClass("infotext");
                    jQuery("#mensaje").append('Información guardada correctamente');
                    parent.window.location = '../sedes.php';
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
                    jQuery("#nombre").val(res[0].nombre);
                    jQuery("#direccion").val(res[0].direccion);
                    jQuery("#telefono").val(res[0].telefono);
                    jQuery("#celular").val(res[0].celular);
                    jQuery("#contacto").val(res[0].contacto);
                    jQuery("#correo").val(res[0].correo);
                    jQuery("#selectEmpresa").val(res[0].euid);
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
            }
            
            function savedata(){
                j = jQuery("#selectEmpresa").val();
                k = jQuery("#selectSede").val();
                jQuery("input").removeClass("requirefield");
                jQuery("#mensaje").empty();
                if (j == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione la empresa.');jQuery("#mensaje").show();return;}
                if (k == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione la sede.');jQuery("#mensaje").show();return;}
                jQuery("#mensaje").addClass("errortext");
                jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                a = jQuery("#nombre").val();
                d = jQuery("#direccion").val();
                e = jQuery("#telefono").val();
                f = jQuery("#celular").val();
                g = jQuery("#contacto").val();
                h = jQuery("#correo").val();
                var enable = true;
                var ladata = "op=sede_save";
                if (a.length < 4){ enable = false; setrequirefield("nombre");}
                if (h.length > 1){ if (!isEmail(h)) { enable = false; setrequirefield("correo"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('El correo ingresado es incorrecto.'); } }
                
                if (!enable) {
                    jQuery("#mensaje").show();
                } else {
                    jQuery("#mensaje").hide();
                    ladata += "&euid="+j+"&id="+k;
                    ladata += "&nombre="+a+"&direccion="+d+"&telefono="+e;
                    ladata += "&celular="+f+"&contacto="+g+"&correo="+h;
                    ladata = ladata.replace("#", "%23");
                    callAjaxRqst(ladata, responseAjax);
                }
            }
            
            function loadselected(){
                jQuery("#mensaje").hide();
                a = jQuery("#selectSede").val();
                if (a != 'seleccione'){
                    ladata = "op=sede_get&id="+a;
                    callAjaxRqst(ladata, responseLoad);
                } else {
                    jQuery("input").val('');
                    jQuery("#selectEmpresa").val('seleccione');
                    jQuery("#accion").val('Guardar');
                }
            }
        </script>
        <table>
            <tr>
                <td style="width: 100px;">Sede</td>
                <td><select id="selectSede" name="selectSede" onchange="loadselected();">
                        <?php echo $opciones_sedes; ?>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Empresa</td>
                <td><select id="selectEmpresa" name="selectEmpresa">
                        <?php echo $opciones_empresas; ?>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Nombre</td>
                <td><input type="text" id="nombre" name="nombre" maxlength="40"/></td>
            <tr>
                <td>Dirección</td>
                <td><input type="text" id="direccion" name="direccion" maxlength="90" /></td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td><input type="text" id="telefono" name="telefono"  maxlength="20"/></td>
            </tr>
            <tr>
                <td>Celular</td>
                <td><input type="text" id="celular" name="celular"  maxlength="20"/></td>
            </tr>
            <tr>
                <td>Contacto</td>
                <td><input type="text" id="contacto" name="contacto"  maxlength="200"/></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><input type="email" id="correo" name="correo"  maxlength="190"/></td>
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
