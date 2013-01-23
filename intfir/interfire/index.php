<?php 
session_start();
if (isset($_SESSION['usuario'])){
    header('Location: inicio.php');
} else {
    session_destroy();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Interfirex | Gestor de Inventarios</title>
        <link rel="stylesheet" media="screen" href="css/style.css" />
        <!--[if IE 9]>
            <link rel="stylesheet" media="screen" href="css/ie9.css"/>
        <![endif]-->

        <!--[if IE 8]>
            <link rel="stylesheet" media="screen" href="css/ie8.css"/>
        <![endif]-->

        <!--[if IE 7]>
            <link rel="stylesheet" media="screen" href="css/ie7.css"/>
        <![endif]-->
<!--        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
        <link rel="icon" type="image/x-icon" href="images/fire_48.png" />
        <script type="text/javascript" src="js/custom/general.js"></script>
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/custom/jquery.cycle.lite.min.js"></script>
        <script type="text/javascript">
     
            $(document).ready(function(){
     
                $('#bg_containers').cycle({
                    fx: 'fade'
                });
     
            });
        </script>

    </head>

    <body>

        <div id="bg_containers">
            <div class="bg1"></div>
            <div class="bg2"></div>
            <div class="bg3"></div>
        </div>

        <div class="notification notifyError loginNotify">Los datos ingresados no son v&aacute;lidos. (Escr&iacute;balos de nuevo)</div>

        <form id="loginform" action="inicio.php" method="post">
            <div class="loginbox">

                <div class="loginbox_inner">
                    <div class="loginbox_content">
                        <input type="hidden" name="op" value="login"/>
                        <input type="text" name="nick" class="username" style="background-position: 0px -32px;" value="adminprueba"/>
                        <input type="password" name="pass" class="password" style="background-position: 0px -32px;" value="0000"/>
                        <button name="submit" class="submit">Ingresar</button>

                        <div class="loginoption">
                            <a href="" class="cant">Ha perdido su clave?</a>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "1") {
        echo "<strong>Nombre de usuario o contraseña incorrectos, intente de nuevo</strong>";
    }
} else {
    echo "<input type=\"checkbox\" name=\"remember\" /> Recordar en esta computadora";
}
?>

                        </div><!--loginoption-->

                    </div><!--loginbox_content-->
                </div><!--loginbox_inner-->
            </div><!--loginbox-->
        </form>

    </body>
</html>
