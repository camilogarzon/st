<div id="accordion">
    <h3 class="open">Navegador General</h3>
    <div class="content" style="display: block;">
        <ul class="leftmenu">
            <li <?php if ($_ACTIVE_SIDEBAR == "inicio") echo 'class="current"'; ?>><a href="inicio.php" class="home">Inicio</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "empresas") echo 'class="current"'; ?>><a href="empresas.php" class="form">Empresas</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "sedes") echo 'class="current"'; ?>><a href="sedes.php" class="gallery">Sedes</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "usuarios") echo 'class="current"'; ?>><a href="usuarios.php" class="usuarios">Usuarios</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "sistemas") echo 'class="current"'; ?>><a href="sistemas.php" class="form">Sistemas</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "equipos") echo 'class="current"'; ?>><a href="equipos.php" class="gallery">Equipos</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "indicadores") echo 'class="current"'; ?>><a href="indicadores.php" class="grid">Indicadores</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "mensajes") echo 'class="current"'; ?>><a href="mensajes.php" class="calendar">Mensajes</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "alertas") echo 'class="current"'; ?>><a href="alertas.php" class="buttons">Alertas</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "archivos") echo 'class="current"'; ?>><a href="archivos.php" class="editor">Archivos</a></li>
        </ul>
    </div>

    <?php
    if (!isUser() && !isInspector()) {
        ?>

        <script type="text/javascript">
    <?php
    $openControl = TRUE;
    $functionJavaScript = '';
    switch ($_ACTIVE_SIDEBAR) {
        case "empresas":
            $functionJavaScript .= '
            function nuevo(){ 
                ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/EmpresaIngreso.html", "Ingresar Empresa", "width=450px,height=450px,left=300px,top=100px,resize=0,scrolling=0")
                //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar Empresa")} 
            }';
            if (isAdmin()){
                $functionJavaScript .= '
                function edita(){ 
                    ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/EmpresaEdita.html", "Editar Empresa", "width=450px,height=480px,left=300px,top=100px,resize=0,scrolling=0")
                    //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Editar Empresa")} 
                }';
                $functionJavaScript .= '
                function borra(){ 
                    ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/EmpresaBorra.html", "Eliminar Empresa", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
                    //ajaxwin.onclose=function(){ return window.confirm("Cerrar ventana Eliminar Empresa")} 
                }';
            }
            break;
        case "sedes":
            $functionJavaScript .= '
            function nuevo(){ 
                ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/SedeIngreso.html", "Ingresar Sede", "width=450px,height=450px,left=300px,top=100px,resize=0,scrolling=0")
                //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar Sede")} 
            }';
            if (isAdmin()){
                $functionJavaScript .= '
                function edita(){ 
                    ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/SedeEdita.html", "Editar Sede", "width=450px,height=450px,left=300px,top=100px,resize=0,scrolling=0")
                    //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Editar Sede")} 
                }';
                $functionJavaScript .= '
                function borra(){ 
                    ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/SedeBorra.html", "Eliminar Sede", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
                    //ajaxwin.onclose=function(){ return window.confirm("Cerrar ventana Eliminar Sede")} 
                }';
            }
            break;
        case "usuarios":
            $functionJavaScript .= '
            function nuevo(){ 
                ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosIngreso.html", "Ingresar Usuario", "width=450px,height=520px,left=300px,top=100px,resize=0,scrolling=0")
                //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar Usuario")} 
            }';
            if (isAdmin()){
                $functionJavaScript .= '
                function edita(){ 
                    ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosEdita.html", "Editar Usuario", "width=450px,height=520px,left=300px,top=100px,resize=0,scrolling=0")
                    //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Editar Usuario")} 
                }';
                $functionJavaScript .= '
                function borra(){ 
                    ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosBorra.html", "Eliminar Usuario", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
                    //ajaxwin.onclose=function(){ return window.confirm("Cerrar ventana Eliminar Usuario")} 
                }';
            }
            break;
        default:
            $openControl = FALSE;
            $functionJavaScript .=  '
            function nuevo(){};
            function edita(){};
            function borra()(){};
            ';
            break;
    }
    echo $functionJavaScript;
    ?>
        </script>
        <h3 <?php if ($openControl) echo 'class="open"'; ?>>Controles</h3>    
        <div class="controles" <?php if (!$openControl) echo 'style="display: none;"'; ?>>
            <ul>
                <li>
                    <a href="#" onClick="nuevo(); return false;" class="controlmas"></a>
                </li>
                <?php if (isAdmin()){ ?>
                <li>
                    <a href="#" onClick="borra(); return false;" class="controlmenos"></a>
                </li>
                <li >
                    <a href="#" onClick="edita(); return false;" class="controleditar"></a>
                </li>
                <?php } ?>
            </ul>
        </div><!-- controles --> 
    <?php } ?>

</div>