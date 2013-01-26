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
                    jQuery("#descripcion").val('');
                    jQuery("#accion").val('Guardar');
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("errortext");
                    jQuery("#mensaje").addClass("infotext");
                    jQuery("#mensaje").append('Información guardada correctamente');
                    parent.window.location = '../empresas.php';
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
                    jQuery("#razonsocial").val(res[0].razonsocial);
                    jQuery("#nit").val(res[0].nit);
                    jQuery("#ciudad").val(res[0].ciudad);
                    jQuery("#direccion").val(res[0].direccion);
                    jQuery("#telefono").val(res[0].telefono);
                    jQuery("#celular").val(res[0].celular);
                    jQuery("#contacto").val(res[0].contacto);
                    jQuery("#correo").val(res[0].correo);
                    jQuery("#descripcion").val(res[0].descripcion);
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
            }
            
            function savedata(){
                j = jQuery("#selectEmpresa").val();
                if (j != 'seleccione'){
                    jQuery("input").removeClass("requirefield");
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                    a = jQuery("#razonsocial").val();
                    b = jQuery("#nit").val();
                    c = jQuery("#ciudad").val();
                    d = jQuery("#direccion").val();
                    e = jQuery("#telefono").val();
                    f = jQuery("#celular").val();
                    g = jQuery("#contacto").val();
                    h = jQuery("#correo").val();
                    i = jQuery("#descripcion").val();
                
                    var enable = true;
                    var ladata = "op=empresa_save";
                    if (a.length < 4){ enable = false; setrequirefield("razonsocial");}
                    if (b.length < 4){ enable = false; setrequirefield("nit");}
                    if (h.length > 1){ if (!isEmail(h)) { enable = false; setrequirefield("correo"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('El correo ingresado es incorrecto.'); } }
                
                    if (!enable) {
                        jQuery("#mensaje").show();
                    } else {
                        jQuery("#mensaje").hide();
                        ladata += "&id="+j;
                        ladata += "&razonsocial="+a+"&nit="+b+"&ciudad="+c+"&direccion="+d+"&telefono="+e;
                        ladata += "&celular="+f+"&contacto="+g+"&correo="+h+"&descripcion="+i+"&logo=images/icons/empresa.png";
                        callAjaxRqst(ladata, responseAjax);
                    }
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Seleccione la empresa.');
                    jQuery("#mensaje").show();
                }
            }
            
            function loadselected(){
                jQuery("#mensaje").hide();
                a = jQuery("#selectEmpresa").val();
                if (a != 'seleccione'){
                    ladata = "op=empresa_get&id="+a;
                    callAjaxRqst(ladata, responseLoad);
                } else {
                    jQuery("input").val('');
                    jQuery("#descripcion").val('');
                    jQuery("#accion").val('Guardar');
                }
            }
            
        </script>

        <table>
            <tr>
                <td style="width: 100px;">Empresa</td>
                <td><select id="selectEmpresa" name="selectEmpresa" onchange="loadselected();">
                        <?php echo $opciones_empresas; ?>
                    </select></td>
            </tr>
            <tr>
                <td>Razón social</td>
                <td><input type="text" id="razonsocial" name="razonsocial" maxlength="40"/></td>
            </tr>
            <tr>
                <td>NIT</td>
                <td><input type="text" id="nit" name="nit" required="true" maxlength="20" /></td>
            </tr>
            <tr>
                <td>Ciudad</td>
                <td><input type="text" id="ciudad" name="ciudad" maxlength="50"/></td>
            </tr>
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
                <td style="vertical-align: top;">Descripción</td>
                <td><textarea id="descripcion" name="descripcion" cols="50" rows="3" maxlength="400"></textarea></td>
            </tr>
            <tr>
                <td>Logo</td>
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
