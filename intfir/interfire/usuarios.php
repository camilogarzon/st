<?php
require_once 'includes/generic_validate_session.php';
require_once 'lib/Controller.php';
$control = new Controller();
if (!isset($_SESSION['opciones_empresas'])) {
    include_once 'includes/generic_empresas_get.php';
}

include_once 'includes/generic_usuarios_get.php';

$_ACTIVE_SIDEBAR = "usuarios";

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
        <h1 class="pageTitle">Usuarios</h1>
        <table cellpadding="0" cellspacing="0" border="0" class="dyntable" id="dynamictable">
            <thead>
                <tr>
                    <th class="head0">Nombre</th>
                    <th class="head1">Cargo</th>
                    <th class="head0">Empresa</th>
                    <th class="head1">Sede</th>
                    <th class="head0">Correo</th>
                    <th class="head1">Celular</th>
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
                <?php for ($i = 0; $i < count($arrusr); $i++) { ?>
                    <tr class="gradeC">
                        <td class="con0"><?php echo $arrusr[$i]['nombre'].' '.$arrusr[$i]['apellido']; ?></td>
                        <td class="con1"><?php echo $arrusr[$i]['cargo']; ?></td>
                        <td class="con0"><?php echo $arrusr[$i]['empresa_razonsocial']; ?></td>
                        <td class="con1"><?php echo $arrusr[$i]['sede_nombre']; ?></td>
                        <td class="con1"><a href="mailto:<?php echo $arrusr[$i]['correo']; ?>"><?php echo $arrusr[$i]['correo']; ?></a></td>
                        <td class="con0"><?php echo $arrusr[$i]['celular']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="head0">Nombre</th>
                    <th class="head1">Cargo</th>
                    <th class="head0">Empresa</th>
                    <th class="head1">Sede</th>
                    <th class="head0">Correo</th>
                    <th class="head1">Celular</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
