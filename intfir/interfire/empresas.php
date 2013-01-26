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
<!-- head -->
<?php include("head.php"); ?>
<!-- head -->


<!-- header -->
<div class="header">
<?php include("header.php"); ?> 
</div>
<!-- header -->


<!-- sidebar -->
<div class="sidebar">
<?php include("sidebar.php"); ?>
</div>
<!-- sidebar -->

<!-- content -->
<div class="maincontent">
    <h1 class="pageTitle">Empresas</h1>
    <ul class="widgetlist">
<?php for ($i = 0; $i < count($arrempresas); $i++) { ?>
            <li><a href="sedes.php?i=<?php echo $arrempresas[$i]['id']; ?>"><img src="<?php echo $arrempresas[$i]['logo']; ?>" /><span><?php echo $arrempresas[$i]['razonsocial']; ?></span></a></li>
        <?php } ?>
    </ul>
</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
