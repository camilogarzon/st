<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "empresas";
require_once 'lib/Controller.php';
$control = new Controller();
$control->empresa_get();
$arrempresas = $control->getResponse();
$arrempresas = $arrempresas['output']['response'];
$_SESSION['empresas'] = $arrempresas;

$emp = '<option value="seleccione">Seleccione...</option>';
for ($i = 0; $i < count($arrempresas); $i++) {
    $emp .= '<option value="' . $arrempresas[$i]['id'] . '">' . $arrempresas[$i]['razonsocial'] . '</option>';
}
$_SESSION['opciones_empresas'] = $emp;


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
                <?php for ($i = 0; $i < count($arrempresas); $i++) { ?>
                <li><a href="sedes.php?i=<?php echo $arrempresas[$i]['id']; ?>"><img src="<?php echo $arrempresas[$i]['logo']; ?>" /><span><?php echo $arrempresas[$i]['razonsocial']; ?></span></a></li>
                <?php } ?>
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