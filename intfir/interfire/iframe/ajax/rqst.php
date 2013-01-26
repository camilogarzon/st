<?php

/**
 * en este archivo se atienden todas las peticiones AJAX
 */
session_start();
require_once '../../lib/Controller.php';
$control = new Controller();

$rqst = $_REQUEST;
$op = isset($rqst['op']) ? $rqst['op'] : '';

switch ($op) {
    case 'empresa_save':
        echo $control->getResponseJSON();
        break;
    case 'empresa_get':
        echo $control->getResponseJSON();
        break;
    case 'empresa_delete':
//        $resp = $control->getResponse();
//        if ($resp['output']['valid']) {
//            $control->empresa_get();
//            $arrempresas = $control->getResponse();
//            $arrempresas = $arrempresas['output']['response'];
//            $_SESSION['empresas'] = $arrempresas;
//            $emp = '<option value="seleccione">Seleccione...</option>';
//            for ($i = 0; $i < count($arrempresas); $i++) {
//                $idd = $arrempresas[$i]['id'];
//                $rs = $arrempresas[$i]['razonsocial'];
//                $emp .= '<option value="' . $idd . '">' . $rs . '</option>';
//            }
//            $_SESSION['opciones_empresas'] = $emp;
//        }
        echo $control->getResponseJSON();
        break;
    case 'sede_save':
        echo $control->getResponseJSON();
        break;
    case 'sede_get':
        echo $control->getResponseJSON();
        break;
    case 'sede_delete':
        echo $control->getResponseJSON();
        break;
    
    default:
        break;
}
?>
