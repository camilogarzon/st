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
                    parent.window.location = '../usuarios.php';
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
                    jQuery("#nom_empresa").val(res[0].empresa_razonsocial);
                    jQuery("#selectEmpresa").val(res[0].euid);
                    jQuery("#nom_sede").val(res[0].sede_nombre);
                    jQuery("#selectEmpresa").val(res[0].sdid);
                    jQuery("#nick").val(res[0].nick);
                    jQuery("#selectRol").val(res[0].rol);
                    jQuery("#pass1").val('');
                    jQuery("#pass2").val('');
                    jQuery("#nombre").val(res[0].nombre);
                    jQuery("#apellido").val(res[0].apellido);
                    jQuery("#cargo").val(res[0].cargo);
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
                l = jQuery("#selectRol").val();
                m = jQuery("#selectUser").val();
                jQuery("#mensaje").empty();
                jQuery("input").removeClass("requirefield");
                if (j == 'seleccione'){j=0;}
                if (k == 'seleccione'){k=0;}
                //if (j == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione la empresa.');jQuery("#mensaje").show();return;}
                //if (k == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione la sede.');jQuery("#mensaje").show();return;}
                if (l == 'seleccione'){jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('Seleccione el rol.');jQuery("#mensaje").show();return;}
                a = jQuery("#nombre").val();
                b = jQuery("#pass1").val();
                c = jQuery("#pass2").val();
                d = jQuery("#apellido").val();
                e = jQuery("#cargo").val();
                f = jQuery("#celular").val();
                g = jQuery("#nick").val();
                h = jQuery("#correo").val();
                var enable = true;
                if (a.length < 2){ enable = false; setrequirefield("nombre");}
                if (b.length < 2){ enable = false; setrequirefield("pass1");}
                if (c.length < 2){ enable = false; setrequirefield("pass2");}
                if (d.length < 2){ enable = false; setrequirefield("apellido");}
                if (h.length > 1){ if (!isEmail(h)) { enable = false; setrequirefield("correo"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('El correo ingresado es incorrecto. '); } }
                
                if (!enable) {
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                    jQuery("#mensaje").show();
                } else {
                    //validaciones
                    if (b != c){ setrequirefield("pass1"); setrequirefield("pass2"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('Las contraseñas no coinciden, verifíquelas.');jQuery("#mensaje").addClass("errortext"); jQuery("#mensaje").show();return;}
                    savedatavalidate();
                }
            }
			
            function savedatavalidate(){
                jQuery("#mensaje").hide();
                var ladata = "op=usuario_save&id="+m;
                ladata += "&euid="+j+"&sdid="+k+"&rol="+l+"&nombre="+a+"&apellido="+d+"&pass="+b+"&cargo="+e;
                ladata += "&celular="+f+"&nick="+g+"&correo="+h+"&foto=images/foto.png";
                callAjaxRqst(ladata, responseAjax);
            }
            
            function loadselected(){
                jQuery("#mensaje").hide();
                a = jQuery("#selectUser").val();
                if (a != 'seleccione'){
                    ladata = "op=usuario_get&id="+a;
                    callAjaxRqst(ladata, responseLoad);
                } else {
                    jQuery("input").val('');
                    jQuery("#selectRol").val('seleccione');
                    jQuery("#accion").val('Guardar');
                }
            }
        </script>
        <table>
            <tr>
                <td style="width: 100px;">Usuario</td>
                <td><select id="selectUser" name="selectUser" onchange="loadselected();">
                        <?php echo $opciones_usuarios; ?>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Rol</td>
                <td><select id="selectRol" name="selectRol" >
                        <option value="seleccione">Seleccione...</option>
                        <option value="usuario">usuario</option>
                        <option value="coordinador">coordinador</option>
                        <option value="administrador">administrador</option>
                    </select></td>
            </tr>
            <tr>
                <td style="width: 100px;">Empresa</td>
                <td><input type="text" id="nom_empresa" readonly="true" style="background-color: #eee !important;"/><input type="hidden" id="selectEmpresa" name="selectEmpresa"/></td>
            </tr>
            <tr>
                <td style="width: 100px;">Sede</td>
                <td><input type="text" id="nom_sede" readonly="true" style="background-color: #eee !important;"/><input type="hidden" id="selectSede" name="selectSede"/></td>
            </tr>
            <tr>
                <td style="width: 100px;">Nombre</td>
                <td><input type="text" id="nombre" name="nombre" maxlength="90"/></td>
            <tr>
                <td>Apellido</td>
                <td><input type="text" id="apellido" name="apellido" maxlength="90" /></td>
            </tr>
            <tr>
                <td>Cargo</td>
                <td><input type="text" id="cargo" name="cargo"  maxlength="19"/></td>
            </tr>
            <tr>
                <td>Celular</td>
                <td><input type="text" id="celular" name="celular"  maxlength="20"/></td>
            </tr>
            <tr>
                <td>Correo</td>
                <td><input type="email" id="correo" name="correo"  maxlength="190"/></td>
            </tr>
            <tr>
                <td style="width: 100px;">Nickname</td>
                <td><input type="text" id="nick" readonly="true" style="background-color: #eee !important;"/></td>
            </tr>
            <tr>
                <td>Contraseña</td>
                <td><input type="password" id="pass1" name="pass1"  maxlength="30"/></td>
            </tr>
            <tr>
                <td>Repita contraseña</td>
                <td><input type="password" id="pass2" name="pass2"  maxlength="30"/></td>
            </tr>
            <tr>
                <td>Foto</td>
                <td><input type="file" id="archivo" name="archivo" disabled="true"/></td>
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
