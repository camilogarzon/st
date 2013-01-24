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
            .require{
                background-color: #fff8ef;
                border-color: red;
            }
        </style>
        <script type="text/javascript">
            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
    
            function callAjaxRqst(ladata, callBackFn){
                jQuery.ajax({data: ladata , type: "GET", dataType: "json", url: "ajax/rqst.php", success: callBackFn });
            }
            
            function savedata(){
                jQuery("input").removeClass("require");
                jQuery("#mensaje").empty();
                jQuery("#mensaje").append('Los campos en rojo son obligatorios');
                a = jQuery("#razonsocial").val();
                b = jQuery("#nit").val();
                c = jQuery("#correo").val();
                var enable = true;
                var ladata = "op=empresa_save";
                if (a.length < 4){ enable = false; jQuery("#razonsocial").addClass("require");}
                if (b.length < 4){ enable = false; jQuery("#nit").addClass("require");}
//                if (c.length < 4){ enable = false; jQuery("#correo").addClass("require");
//                } else { if (!isEmail(c)) { jQuery("#mensaje").empty(); jQuery("#mensaje").append('El correo ingresado es incorrecto.'); } }
                
                if (!enable) {
                    jQuery("#mensaje").show();
                } else {
                    jQuery("#mensaje").hide();
                    ladata += "&razonsocial="+a+"&nit="+b+"&correo="+c;
                    alert('ladata = ' + ladata);
                    //callAjaxRqst(ladata, response);
                }
            }
            
        </script>
        <table>
            <tr>
                <td style="width: 100px;">Razón social</td>
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
                <td></td>
                <td><input type="submit" value="Registrar" style="cursor: pointer" onclick="savedata();"/></td>
            </tr>
            <tr>
                <td></td>
                <td><div id="mensaje" style="color:red; display: none">Los campos en rojo son obligatorios</div></td>
            </tr>
        </table>

    </body>
</html>
