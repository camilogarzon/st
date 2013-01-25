<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "indicadores";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include_once 'includes/generic_head.php';
        ?>
    </head>
    <body class="bodygrey">
        <header class="header">
            <?php
            include_once 'includes/generic_header.php';
            ?>
        </header>
        <!-- sidebar -->
        <div class="sidebar">
            <?php include_once 'includes/generic_sidebar.php'; ?>
        </div>
        <!-- sidebar -->
        <!-- content -->
        <div class="maincontent">
            <h1 class="pageTitle">Indicadores</h1>
            <form action="" method="post">
                <div class="form_default">
                    <!-- INFORMACION GENERAL -->
                    <fieldset>
                        <legend>Establecer Reporte</legend>
                        <p>
                        <div class="one_sixth"><select name="occupation"><option>Empresa</option><option value="0">Empresa 1</option><option value="1">Empresa 2</option><option value="2">Empresa 3</option></select></div>
                        <div class="one_sixth"><select name="occupation"><option>Sede</option><option value="0">Sede 1</option><option value="1">Sede 2</option><option value="2">Sede 3</option></select></div>
                        <div class="one_sixth"><select name="occupation"><option>Producto</option><option value="0">Producto 1</option><option value="1">Producto 2</option><option value="2">Producto 3</option></select></div>
                        <div class="one_sixth"><select name="occupation"><option>Periocidad</option><option value="0">Periocidad 1</option><option value="1">Periocidad 2</option><option value="2">Periocidad 3</option></select></div>
                        <div class="one_sixth"><input type="text" name="name" value="Fecha Inicio" class="sftable" /></div>
                        <div class="one_sixth last"><input type="text" name="name" value="Fecha Final" class="sftable" /></div>
                        </p>
                    </fieldset>
                    <!-- GENERAL -->
                    <fieldset>
                        <legend>Detalle Reporte</legend>
                        <div class="one_third">
                            <h3>Detalles del Producto</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                        </div><!-- one_third -->

                        <div class="two_third last">
                            <h3>Información Solicitada</h3>
                            <div class="one_half">
                                <h3>Diagrama de estadistica</h3>
                                <p>Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. Dibujo a mostrar. 
                                </p>
                            </div>
                            <div class="one_half last">
                                <h3>Resultados</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
                            </div>
                            <p>Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. Notas. </p>
                        </div><!-- two_third -->
                    </fieldset>
                </div>
            </form>
        </div>
        <!-- content -->
        <footer>
            <?php
            include_once 'includes/generic_footer.php';
            ?>
        </footer>
    </body>
</html>