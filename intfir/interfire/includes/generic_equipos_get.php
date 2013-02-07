<?php

if (isUser()) {
    $control->setSdid(getUserIdSede());
    $control->setEuid(0);
}
if (isInspector()) {
    $control->setSdid(0);
    $control->setEuid(getUserIdEmpresa());
}
if (isAdmin() || isCoordinator()) {
    $euid = intval($_GET['euid']);
}
$control->equipo_get();
$arrequipos = $control->getResponse();
$arrequipos = $arrequipos['output']['response'];
$_SESSION['equipos'] = $arrequipos;
?>