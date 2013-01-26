<?php
require_once 'includes/generic_validate_session.php';
require_once 'lib/Controller.php';
$control = new Controller();
include_once 'includes/generic_empresas_get.php';
$_ACTIVE_SIDEBAR = "empresas";

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
            <li><a href="sedes.php?op=sede_get&euid=<?php echo $arrempresas[$i]['id']; ?>"><img src="<?php echo $arrempresas[$i]['logo']; ?>" /><span><?php echo $arrempresas[$i]['razonsocial']; ?></span></a></li>
        <?php } ?>
    </ul>
</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
