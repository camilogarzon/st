<?php
require_once 'includes/generic_validate_session.php';
if (empty($_GET['id'])){
    header('Location: equipos.php');
}
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

    <div class="contenedor">

        <?php include("productos/ascensor.php") ?>

    </div>

</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
