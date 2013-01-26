<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "productos";
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
        <h1 class="pageTitle">Productos</h1>
        <table cellpadding="0" cellspacing="0" border="0" class="dyntable" id="example">
            <thead>
                <tr>
                    <th class="head0">ID</th>
                    <th class="head1">Categoria</th>
                    <th class="head0">Marca</th>
                    <th class="head1">QR</th>
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
                    <td class="con1">Abastecimiento de agua</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="abastecimiento.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">002</td>
                    <td class="con1">Agua nebulizada</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="agua.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">003</td>
                    <td class="con1">Agua pulverizada</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="pulverizada.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">004</td>
                    <td class="con1">Deteccion y alarma</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="deteccion.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">005</td>
                    <td class="con1">Extintor portatil</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="extintor.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">006</td>
                    <td class="con1">Rociador automatico</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="rociador.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">007</td>
                    <td class="con1">Rociador espuma</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="espuma.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">008</td>
                    <td class="con1">Sistema acuoso</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="acuoso.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">009</td>
                    <td class="con1">Sistema bomba</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="bomba.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">010</td>
                    <td class="con1">Sistema carbono</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="carbono.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">011</td>
                    <td class="con1">Sistema espuma</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="sistemaespuma.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">012</td>
                    <td class="con1">Sistema halogenado</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="halogenado.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">013</td>
                    <td class="con1">Sistema hidrante</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="hidrante.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">014</td>
                    <td class="con1">Sistema humos</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="humos.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">015</td>
                    <td class="con1">Sistema luces</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="luces.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">016</td>
                    <td class="con1">Sistema polvo</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="polvo.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">017</td>
                    <td class="con1">Sistema puerta</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="puerta.php">QR</a></td>
                </tr>
                <tr class="gradeC">
                    <td class="con0">018</td>
                    <td class="con1">Sistema Tuberia</td>
                    <td class="con0">Interfire</td>
                    <td class="con1"><a href="tuberia.php">QR</a></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th class="head0">ID</th>
                    <th class="head1">Categoria</th>
                    <th class="head0">Fecha Creaci�n</th>
                    <th class="head1">QR</th>
                </tr>
            </tfoot>
        </table>

    </div>

</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
