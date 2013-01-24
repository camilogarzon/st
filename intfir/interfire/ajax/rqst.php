<?php
/**
 * en este archivo se atienden todas las peticiones AJAX
 */
require_once '../lib/Controller.php';
$control = new Controller();

$rqst = $_REQUEST;
$op = isset($rqst['op']) ? $rqst['op'] : '';

switch ($op) {
    case 'empresa_save':
	echo $control->getResponseJSON();
	break;
    default:
	break;
}
?>
