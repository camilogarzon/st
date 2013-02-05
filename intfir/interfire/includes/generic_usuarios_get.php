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
$control->usuario_get();
$arrusr = $control->getResponse();
$arrusr = $arrusr['output']['response'];
$_SESSION['usuarios'] = $arrusr;
?>