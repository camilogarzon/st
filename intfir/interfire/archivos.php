<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "archivos";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include_once 'includes/generic_head.php';
        ?>
    </head>
    <body class="bodygrey">
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#fileManager').elfinder({
                    url : 'php/connector.php'
                })
            });
        </script>

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
            <div class="contenedor">
                <div class="widgetbox">
                    <h3><span>Administrador de Archivos</span></h3>
                    <div class="content nopadding">
                        <div id="fileManager"></div>
                    </div>
                </div><!-- widgetbox -->  
            </div>
        </div>
        <!-- content -->
        <footer>
            <?php
            include_once 'includes/generic_footer.php';
            ?>
        </footer>
    </body>
</html>