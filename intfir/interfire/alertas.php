<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "alertas";
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
                <h1 class="pageTitle">Alertas de Revision de Equipos</h1>
                <table cellpadding="0" cellspacing="0" border="0" class="dyntable" id="example">
                    <thead>
                        <tr>
                            <th class="head0">ID</th>
                            <th class="head1">Categoria</th>
                            <th class="head0">Fecha Alerta</th>
                            <th class="head1">Tipo Alerta</th>
                        </tr>
                    </thead>
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <tbody>
                        <tr class="gradeC">
                            <td class="con0">001</td>
                            <td class="con1">Rociador 004</td>
                            <td class="con0">26 Nov 2012</td>
                            <td class="con1">Revisi—n</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="head0">ID</th>
                            <th class="head1">Categoria</th>
                            <th class="head0">Fecha Alerta</th>
                            <th class="head1">Tipo Alerta</th>
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