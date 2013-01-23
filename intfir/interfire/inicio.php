<?php
session_start();
include_once 'lib/Controller.php';
if (!isset($_SESSION['usuario'])){
    $control = new Controller();
    $response = $control->getResponse();
    if (intval($response['output']['valid']) > 0){
        $_SESSION['usuario'] = $response['output'];
    } else {
        header('Location: index.php?error=1');
    }
}

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

            <h1 class="pageTitle">Interfire SAS | Interfirex</h1>

            <div class="one_half">
                <h3>Bienvenido a Interfirex</h3>
                <br />
                <p>Interfirex es una moderna herramienta de última tecnología capaz de llevar la trazabilidad a los procesos de mantenimiento, instalación, verificación y chequeo a todas las instancias de de seguridad contra incendios que su empresa lleva a cabo; con Interfirex usted podrá llevar un control en tiempo real y desde cualquier lugar del mundo de todos los procesos o de situaciones específicas, elementos clave para su evolución en el campo de la certificación.</p>
            </div><!-- one_half -->

            <div class="one_half last">
                <h3>Ventajas</h3>
                <br />
                <p>Las soluciones que ofrece Interfirex a sus clientes no solo aplican para su facilidad se uso, también es una herramienta que le permitirá exponer al máximo los siguiente beneficios:</p>
                <ul>
                    <li>Gerenciar sus proyectos de forma ágil y segura, desde cualquier lugar del mundo y con reportes ejecutivos a la medida.</li>
                    <li>Economizar papel usado en el reporte de formularios.</li>
                    <li>Mantener toda la información siempre a la mano.</li>
                    <li>Copias de respaldo siempre que las requiera.</li>
                    <li>Usuarios ilimitados.</li>
                    <li>No requiere de servidor, técnico de sistemas... Su sistema siempre contará con la máxima calidad.</li>
                    <li>Administrar y gestionar todos sus archivos de forma on-line</li>
                    <li>Muchas ventajas más...</li>
                </ul>
            </div><!-- one_half last -->

            <div class="clear"></div>

            <div class="one_third">
                <div class="widgetbox">
                    <h3><span>REVISIONES PROGRAMADAS</span></h3>
                    <div class="content">

                        <div class="progress">
                            Revisadas (83%)
                            <div class="bar"><div class="value bluebar" style="width: 83%;"></div></div>
                        </div><!--progress-->

                        <div class="progress">
                            Canceladas (17%)
                            <div class="bar"><div class="value orangebar" style="width: 17%;"></div></div>
                        </div><!--progress-->

                        <div class="progress">
                            Fallas reportadas (8%)
                            <div class="bar"><div class="value redbar" style="width: 8%;"></div></div>
                        </div><!--progress-->

                    </div><!--content-->
                </div><!--widgetbox-->
            </div><!-- one_third -->

            <div class="one_third">
                <div class="widgetbox">
                    <h3><span>FALLAS REPORTADAS SEMANA</span></h3>
                    <div class="content">

                        <div class="progress">
                            Fallas (34)
                            <div class="bar"><div class="value bluebar" style="width: 100%;"></div></div>
                        </div><!--progress-->

                        <div class="progress">
                            Corregidas (86%)
                            <div class="bar"><div class="value orangebar" style="width: 86%;"></div></div>
                        </div><!--progress-->

                        <div class="progress">
                            Postergadas (13%)
                            <div class="bar"><div class="value redbar" style="width: 14%;"></div></div>
                        </div><!--progress-->

                    </div><!--content-->
                </div><!--widgetbox-->
            </div><!-- one_third -->

            <div class="one_third last">
                <div class="widgetbox">
                    <h3><span>Usuarios</span></h3>
                    <div class="content">

                        <div class="progress">
                            Usuarios inscritos (96)
                            <div class="bar2"><div class="value bluebar" style="width: 100%;"><small>100%</small></div></div>
                        </div><!--progress-->

                        <div class="progress">
                            Ingresaron semana
                            <div class="bar2"><div class="value orangebar" style="width: 75%;"><small>75%</small></div></div>
                        </div><!--progress-->

                        <div class="progress">
                            Ingresaron mes
                            <div class="bar2"><div class="value redbar" style="width: 97%;"><small>97%</small></div></div>
                        </div><!--progress-->

                    </div><!--content-->
                </div><!--widgetbox-->
            </div><!-- one_third last -->

        </div>
        <!-- content -->        
        <footer>
            <?php
            include_once 'includes/generic_footer.php';
            ?>
        </footer>
    </body>
</html>
