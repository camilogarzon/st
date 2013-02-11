<?php
if (!isset($_SESSION['usuario'])){
    return FALSE;
}
function isAdmin() {
    return ($_SESSION['usuario']['rol'] == 'administrador') ? TRUE : FALSE;
}
function isUser() {
    return ($_SESSION['usuario']['rol'] == 'usuario') ? TRUE : FALSE;
}
function isCoordinator() {
    return ($_SESSION['usuario']['rol'] == 'coordinador') ? TRUE : FALSE;
}
function isInspector() {
    return ($_SESSION['usuario']['rol'] == 'inspector') ? TRUE : FALSE;
}
function getUserIdEmpresa(){
    return $_SESSION['usuario']['euid'];
}
function getUserIdSede(){
    return $_SESSION['usuario']['sdid'];
}
function getUserId(){
    return $_SESSION['usuario']['id'];
}

?>