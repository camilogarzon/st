<?php
$control->empresa_get();
$arrempresas = $control->getResponse();
$arrempresas = $arrempresas['output']['response'];
$_SESSION['empresas'] = $arrempresas;

$emp = '<option value="seleccione">Seleccione...</option>';
for ($i = 0; $i < count($arrempresas); $i++) {
    $emp .= '<option value="' . $arrempresas[$i]['id'] . '">' . $arrempresas[$i]['razonsocial'] . '</option>';
}
$_SESSION['opciones_empresas'] = $emp;
?>