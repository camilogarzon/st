<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "sedes";
require_once 'lib/Controller.php';
$control = new Controller();
$control->sede_get();
$arrsede = $control->getResponse();
$arrsede = $arrsede['output']['response'];
$_SESSION['sedes'] = $arrsede;
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
            <div class="contenedor">
                <h1 class="pageTitle">Sedes</h1>
                <table cellpadding="0" cellspacing="0" border="0" class="dyntable" id="example">
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
                        <tr class="gradeC">
                            <td class="con0">Chapinero</td>
                            <td class="con1">Calle 52 No 13-70</td>
                            <td class="con0">Exito</td>
                            <td class="con1">2115108</td>
                            <td class="con0"></td>
                            <td class="con1"><a href="mailto:operaciones@interfiresas.com">operaciones@interfiresas.com</a></td>
                        </tr>
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
        <footer>
            <?php
            include_once 'includes/generic_footer.php';
            ?>
        </footer>
    </body>
</html>