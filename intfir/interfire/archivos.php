<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "archivos";
?>
<!-- head -->
<?php include("head.php"); ?>
<!-- head -->
<script type="text/javascript" src="js/plugins/elfinder.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#fileManager').elfinder({
            url : 'php/connector.php'
        })
    });
</script>
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




<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
