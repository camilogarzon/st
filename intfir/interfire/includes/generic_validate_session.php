<?php
session_start();
if (!isset($_SESSION['usuario'])){
    header('Location: index.php');
}
include 'generic_validate_rol.php';
?>