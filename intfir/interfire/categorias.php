<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "categorias";
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

                <li><a href=""><img src="images/icons/empresa.png" alt="Document Icon" /><span>Abastecimiento de agua</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Report Icon" /><span>Agua nebulizada</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Mail Icon" /><span>Agua pulverizada</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Events Icon" /><span>Deteccion y alarma</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Extintor portatil</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Report Icon" /><span>Rociador automatico</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Mail Icon" /><span>Rociador de espuma</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Events Icon" /><span>Sistema acuoso</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sistema bomba</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Report Icon" /><span>Sistema carbono</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Mail Icon" /><span>Sistema espuma</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Events Icon" /><span>Sistema halogenado</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sistema hidrante</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sistema humos</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sistema luces</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sistema polvo</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sistema puerta</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sistema tuberia</span></a></li>
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