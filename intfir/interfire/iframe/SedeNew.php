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
                } else {
                    jQuery("#mensaje").empty();
                    jQuery("#mensaje").removeClass("infotext");
                    jQuery("#mensaje").addClass("errortext");
                    jQuery("#mensaje").append('Error: '+data.output.response.content);
                }
                jQuery("#mensaje").show();
            }
            
            function savedata(){
                jQuery("input").removeClass("requirefield");
                jQuery("#mensaje").empty();
                jQuery("#mensaje").addClass("errortext");
                jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                a = jQuery("#nombre").val();
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
                if (a.length < 4){ enable = false; setrequirefield("nombre");}
                if (b.length < 4){ enable = false; setrequirefield("nit");}
                if (h.length > 5){ if (!isEmail(h)) { enable = false; setrequirefield("correo"); jQuery("#mensaje").empty(); jQuery("#mensaje").append('El correo ingresado es incorrecto.'); } }
                
                if (!enable) {
                    jQuery("#mensaje").show();
                } else {
                    jQuery("#mensaje").hide();
                    ladata += "&empresa_id="+j;
                    ladata += "&nombre="+a+"&direccion="+d+"&telefono="+e;
                    ladata += "&celular="+f+"&contacto="+g+"&correo="+h;
                    callAjaxRqst(ladata, responseAjax);
                }
            }
            sde_nombre, sde_direccion, sde_telefono, sde_celular, sde_contacto, emp_correo, fir_empresa_emp_id
        </script>
        <table>
            <tr>
                <td style="width: 100px;">Empresa</td>
                <td><select id="selectEmpresa" name="selectEmpresa" >
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
