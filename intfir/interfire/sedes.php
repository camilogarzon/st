<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "sedes";
require_once 'lib/Controller.php';
$euid = intval($_GET['euid']);
$control = new Controller();
if ($euid > 0) {
    $arrsede = $control->getResponse();
    $arrsede = $arrsede['output']['response'];
    $_SESSION['sedes'] = $arrsede;

    $emp = '<option value="seleccione">Seleccione...</option>';
    for ($i = 0; $i < count($arrsede); $i++) {
        $emp .= '<option value="' . $arrsede[$i]['id'] . '">' . $arrsede[$i]['nombre'] . ' (' . $arrsede[$i]['empresa_razonsocial'] . ')</option>';
    }
    $_SESSION['opciones_sedes'] = $emp;
} else {
    $control->sede_get();
    $arrsede = $control->getResponse();
    $arrsede = $arrsede['output']['response'];
    $_SESSION['sedes'] = $arrsede;

    $emp = '<option value="seleccione">Seleccione...</option>';
    for ($i = 0; $i < count($arrsede); $i++) {
        $emp .= '<option value="' . $arrsede[$i]['id'] . '">' . $arrsede[$i]['nombre'] . ' (' . $arrsede[$i]['empresa_razonsocial'] . ')</option>';
    }
    $_SESSION['opciones_sedes'] = $emp;
}
?>
<!-- head -->
<?php include("head_table.php"); ?>
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
        <h1 class="pageTitle">Sedes</h1>
        <table cellpadding="0" cellspacing="0" border="0" class="dyntable" id="dynamictable">
            <thead>
                <tr>
                    <th class="head0">Nombre</th>
                    <th class="head1">Direccion</th>
                    <th class="head0">Empresa</th>
                    <th class="head1">Telefono</th>
                    <th class="head0">Celular</th>
                    <th class="head1">Correo</th>
                </tr>
            </thead>
            <colgroup>
                <col class="con0" />
                <col class="con1" />
                <col class="con0" />
                <col class="con1" />
                <col class="con0" />
                <col class="con1" />
            </colgroup>
            <tbody>
                <?php for ($i = 0; $i < count($arrsede); $i++) { ?>
                    <tr class="gradeC">
                        <td class="con0"><?php echo $arrsede[$i]['nombre']; ?></td>
                        <td class="con1"><?php echo $arrsede[$i]['direccion']; ?></td>
                        <td class="con0"><?php echo $arrsede[$i]['empresa_razonsocial']; ?></td>
                        <td class="con1"><?php echo $arrsede[$i]['telefono']; ?></td>
                        <td class="con0"><?php echo $arrsede[$i]['celular']; ?></td>
                        <td class="con1"><a href="mailto:<?php echo $arrsede[$i]['correo']; ?>"><?php echo $arrsede[$i]['correo']; ?></a></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="head0">Nombre</th>
                    <th class="head1">Direccion</th>
                    <th class="head0">Empresa</th>
                    <th class="head1">Telefono</th>
                    <th class="head0">Celular</th>
                    <th class="head1">Correo</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
