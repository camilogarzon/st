<?php

if (!isset($_SESSION['sistemas'])) {
    $control = new Controller();
    $control->sistemas_get();
    $arrsys = $control->getResponse();
    $arrsys = $arrsys['output']['response'];
    $_SESSION['sistemas'] = $arrsys;
} else {
    $arrsys = $_SESSION['sistemas'];
}
$emp = '<option value="seleccione">Seleccione...</option>';
for ($i = 0; $i < count($arrsys); $i++) {
    $emp .= '<option value="' . $arrsys[$i]['id'] . '">' . $arrsys[$i]['alias'] . '</option>';
}
$_SESSION['opciones_sistemas'] = $emp;
?>