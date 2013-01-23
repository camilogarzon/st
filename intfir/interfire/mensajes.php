<?php
require_once 'includes/generic_validate_session.php';
$_ACTIVE_SIDEBAR = "mensajes";
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
        include_once 'includes/generic_head.php';
        ?>
    </head>
    <body class="bodygrey">
        <header class="header">
            <?php
            include_once 'includes/generic_header.php';
            ?>
        </header>
        <!-- sidebar -->
        <div class="sidebar">
            <?php include_once 'includes/generic_sidebar.php'; ?>
        </div>
        <!-- sidebar -->
        <!-- content -->
        <div class="maincontent">
            <div class="contenedor">
                <form action="" method="post">
                    <div class="form_default">
                        <p>
                            <label for="name">Nombre (s)</label>
                            <input type="text" name="name"  class="elf" />
                        </p>
                        <p>
                            <label for="subject">Asunto</label>
                            <input type="text" name="email"  class="lf" /><button>Enviar</button>
                        </p>
                    </div><!--form-->
                </form>
                <div class="widgetbox inlineblock">
                    <h3><span>Mensaje</span></h3>
                    <div class="content nopadding">
                        <textarea id="wysiwyg" cols="130" rows="15"></textarea> 
                    </div>
                </div><!-- widgetbox -->  
            </div>
        </div>
        <!-- content -->
        <footer>
            <?php
            include_once 'includes/generic_footer.php';
            ?>
        </footer>
    </body>
</html>