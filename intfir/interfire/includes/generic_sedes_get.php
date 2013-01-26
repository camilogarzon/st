<?php
$euid = intval($_GET['euid']);
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