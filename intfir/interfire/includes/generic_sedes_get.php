<?php

if (isUser()) {
    $control->setId(getUserIdSede());
    $control->setEuid(0);
}
if (isInspector()) {
    $control->setId(0);
    $control->setEuid(getUserIdEmpresa());
}
if (isAdmin() || isCoordinator()) {
    $euid = intval($_GET['euid']);
}
$control->sede_get();
$arrsede = $control->getResponse();
$arrsede = $arrsede['output']['response'];
$_SESSION['sedes'] = $arrsede;

$emp = '<option value="seleccione">Seleccione...</option>';
for ($i = 0; $i < count($arrsede); $i++) {
    $emp .= '<option value="' . $arrsede[$i]['id'] . '">' . $arrsede[$i]['nombre'] . ' (' . $arrsede[$i]['empresa_razonsocial'] . ')</option>';
}
$_SESSION['opciones_sedes'] = $emp;
?>