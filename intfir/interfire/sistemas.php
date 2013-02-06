<?php
require_once 'includes/generic_validate_session.php';
require_once 'lib/Controller.php';
include_once 'includes/generic_sistemas_get.php';
$_ACTIVE_SIDEBAR = "sistemas";
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
    <ul class="widgetlist">
        <?php for ($i = 0; $i < count($arrsys); $i++) { ?>
        <li><a href="equipos.php?op=equipos_get&sysid=<?php echo $arrsys[$i]['id']; ?>"><img src="images/icons/empresa.png" alt="Media Icon" /><span><?php echo $arrsys[$i]['alias']; ?></span></a></li>
        <?php } ?>
    </ul>
</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
