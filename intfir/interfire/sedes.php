<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "sedes";
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

                <li><a href=""><img src="images/icons/empresa.png" alt="Document Icon" /><span>Sede 1</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Report Icon" /><span>Sede 2</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Mail Icon" /><span>Sede 3</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Events Icon" /><span>Sede 4</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sede 5</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Report Icon" /><span>Sede 6</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Mail Icon" /><span>Sede 7</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Events Icon" /><span>Sede 8</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sede 9</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Report Icon" /><span>Sede 10</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Mail Icon" /><span>Sede 11</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Events Icon" /><span>Sede 12</span></a></li>
                <li><a href=""><img src="images/icons/empresa.png" alt="Media Icon" /><span>Sede 13</span></a></li>

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