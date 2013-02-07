<?php
session_start();
include_once 'lib/Controller.php';
if (!isset($_SESSION['usuario'])) {
    $control = new Controller();
    $response = $control->getResponse();
    if (intval($response['output']['valid']) > 0) {
        $_SESSION['usuario'] = $response['output'];
        header('Location: inicio.php');
    } else {
        header('Location: index.php?error=1');
    }
} else {
    header('Location: index.php');
}
?>