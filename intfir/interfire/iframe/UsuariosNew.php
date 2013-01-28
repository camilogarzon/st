<?php
session_start();
$opciones_empresas = $_SESSION['opciones_empresas'];
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
                    jQuery("#mensaje").removeClass("infotext");jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
                jQuery("#mensaje").show();
            }
            
            function responseLoad(data){
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
            
            function savedata(){
                j = jQuery("#selectEmpresa").val();
                k = jQuery("#selectSede").val();
                l = jQuery("#selectRol").val();
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
                if (g.length < 2){ enable = false; setrequirefield("nick");}
                if (h.length > 1){ if (!isEmail(h)) { enable = false; setrequirefield("correo"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('El correo ingresado es incorrecto. '); } }
                
                if (!enable) {
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                    jQuery("#mensaje").show();
                } else {
                    //validaciones
                    if (b != c){ setrequirefield("pass1"); setrequirefield("pass2"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('Las contraseñas no coinciden, verifíquelas.');jQuery("#mensaje").addClass("errortext"); jQuery("#mensaje").show();return;}
                    callAjaxRqst("op=usuario_check&nick="+g, check01);
                }
            }
            
            function check01(data){
                cursorNormal();
                if (data.output.valid){
                    if (data.output.id == 0){
                        savedatavalidate();
                    } else {
                        setrequirefield("nick");jQuery("#mensaje").empty(); jQuery("#mensaje").addClass("errortext");jQuery("#mensaje").append('El nickname ingresado ya existe, use otro.');jQuery("#mensaje").show();
                    }
                }
            }
            
            function savedatavalidate(){
                jQuery("#mensaje").hide();
                var ladata = "op=usuario_save";
                ladata += "&euid="+j+"&sdid="+k+"&rol="+l+"&nombre="+a+"&apellido="+d+"&pass="+b+"&cargo="+e;
                ladata += "&celular="+f+"&nick="+g+"&correo="+h+"&foto=images/foto.png";
                callAjaxRqst(ladata, responseAjax);
            }
            
            function loadselected(){
                jQuery("#mensaje").hide();
                a = jQuery("#selectEmpresa").val();
                if (a != 'seleccione'){
                    ladata = "op=sede_get&euid="+a;
                    callAjaxRqst(ladata, responseLoad);
                } else {
                    jQuery("input").val('');
                    jQuery("#selectSede").empty();
                    jQuery("#selectRol").val('seleccione');
                    jQuery("#accion").val('Guardar');
                }
            }
            
        </script>
        <table>
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
                <td><select id="selectEmpresa" name="selectEmpresa" onchange="loadselected();">
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
                <td>Nickname</td>
                <td><input type="text" id="nick" name="nick"  maxlength="19"/></td>
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
