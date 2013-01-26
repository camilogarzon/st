<?php
require_once 'includes/generic_validate_session.php';
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
                <tr class="gradeC">
                    <td class="con0">Felipe Ceballos</td>
                    <td class="con1">Desarrollo</td>
                    <td class="con0">Creamos</td>
                    <td class="con1">Bogotá</td>
                    <td class="con0"><a href="felipe@creamos.co">felipe@creamos.co</a></td>
                    <td class="con1">300 329 9049</td>
                </tr>
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
