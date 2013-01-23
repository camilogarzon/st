<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "empresas";

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
            <ul class="widgetlist">

                <li><a href=""><img src="images/icons/empresa.png" alt="Document Icon" /><span>Exito</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Report Icon" /><span>Sika</span></a></li>

            </ul>
        </div>
        <!-- content -->
        <footer>
            <?php
            include_once 'includes/generic_footer.php';
            ?>
        </footer>
    </body>
</html>