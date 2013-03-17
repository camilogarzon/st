<?php
require_once 'includes/generic_validate_session.php';
require_once 'lib/Controller.php';
$control = new Controller();
$arrequipos = NULL;
include_once 'includes/generic_equipos_get.php';
if (!isset($_SESSION['opciones_sistemas'])) {
    include_once 'includes/generic_sistemas_get.php';
}
if (!isset($_SESSION['opciones_empresas'])) {
    include_once 'includes/generic_empresas_get.php';
}

$_ACTIVE_SIDEBAR = "equipos";
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

        <h1 class="pageTitle">Equipos</h1>

        <table cellpadding="0" cellspacing="0" border="0" class="dyntable" id="dynamictable">
            <thead>
                <tr>
                    <th class="head0">ID</th>
                    <th class="head1">Empresa</th>
                    <th class="head0">Sede</th>
                    <th class="head1">Sistema</th>
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
                <?php for ($i = 0; $i < count($arrequipos); $i++) { ?>
                    <tr class="gradeC">
                        <td class="con0"><?php echo $arrequipos[$i]['numinventario']; ?></td>
                        <td class="con1"><?php echo $arrequipos[$i]['empresa']; ?></td>
                        <td class="con0"><?php echo $arrequipos[$i]['sede']; ?></td>
                        <td class="con1"><a href="<?php echo $arrequipos[$i]['href'] . "?id=" . $arrequipos[$i]['numinventario']; ?>"><?php echo $arrequipos[$i]['sistema']; ?></a></td>
                        <td class="con0"><?php echo $arrequipos[$i]['marca']; ?></td>
                        <td class="con1"><div style="cursor: pointer; color: blue !important;" onclick="loadQR('<?php echo $arrequipos[$i]['href'] ?>', '<?php echo  $arrequipos[$i]['numinventario']; ?>')"><strong>QR</strong></div></td>
                    </tr>
                <?php } ?>
                <!--                
                                <tr class="gradeC">
                                    <td class="con0">001</td>
                                    <td class="con1"><a href="deteccion.php">Sistema de Detección y Alarma de Incendios</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/deteccion.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">001</td>
                                    <td class="con1"><a href="deteccion.php">Sistema de Detección y Alarma de Incendios</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/deteccion.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">002</td>
                                    <td class="con1"><a href="rociador.php">Sistema de Rociadores Automáticos</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/rociador.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">003</td>
                                    <td class="con1"><a href="agua.php">Sistema de Agua Nebulizada</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/agua.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">004</td>
                                    <td class="con1"><a href="pulverizada.php">Sistema de Agua Pulverizada</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/pulverizada.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">005</td>
                                    <td class="con1"><a href="espuma.php">Sistema de Rociadores de Espuma</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/espuma.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">006</td>
                                    <td class="con1"><a href="sistemaespuma.php">Sistema de Espuma</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/sistemaespuma.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">007</td>
                                    <td class="con1"><a href="tuberia.php">Sistema de Tuberías y Mangueras</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/tuberia.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">008</td>
                                    <td class="con1"><a href="bomba.php">Bombas Contra Incendio</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/bomba.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">009</td>
                                    <td class="con1"><a href="abastecimiento.php">Sistema de Abastecimiento de Agua</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/abastecimiento.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">010</td>
                                    <td class="con1"><a href="hidrante.php">Hidrantes Contra Incendios</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/hidrante.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">011</td>
                                    <td class="con1"><a href="polvo.php">Sistemas Fijos de Extinción por Polvo</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/polvo.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">012</td>
                                    <td class="con1"><a href="acuoso.php">Sistema de Extinción por Agente Extintor Acuoso</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/acuoso.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">013</td>
                                    <td class="con1"><a href="halogenado.php">Sistema de Extinción por Agente Halogenado</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/halogenado.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">014</td>
                                    <td class="con1"><a href="halon.php">Sistema de Extinción de Incendios Alternativos al Halón</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/halon.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">015</td>
                                    <td class="con1"><a href="carbono.php">Sistema de Extinción por Dióxido de Carbono</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/carbono.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">016</td>
                                    <td class="con1"><a href="extintor.php">Extintor Portátil</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/extintor.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">017</td>
                                    <td class="con1"><a href="puerta.php">Puertas y Compuertas Cortafuego</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/puerta.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">018</td>
                                    <td class="con1"><a href="luces.php">Luces de Emergencia</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/luces.php">QR</a></td>
                                </tr>
                                <tr class="gradeC">
                                    <td class="con0">019</td>
                                    <td class="con1"><a href="humos.php">Sistema de Control de Humos</a></td>
                                    <td class="con0">Interfire</td>
                                    <td class="con1"><a href="https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/humos.php">QR</a></td>
                                </tr>-->
            </tbody>
            <tfoot>
                <tr>
                    <th class="head0">ID</th>
                    <th class="head1">Empresa</th>
                    <th class="head0">Sede</th>
                    <th class="head1">Sistema</th>
                    <th class="head0">Marca</th>
                    <th class="head1">QR</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <script type="text/javascript">
        function loadQR(href, id){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/QR.php?id="+id+"&href="+href, "Codigo QR", "width=200px,height=200px,left=300px,top=100px,resize=0,scrolling=0")
            //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar Empresa")} 
        };

    </script>
</div>
<!-- content -->

<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
