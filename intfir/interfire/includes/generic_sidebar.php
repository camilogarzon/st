<div id="accordion">
    <h3 class="open">Navegador General</h3>
    <div class="content" style="display: block;">
        <ul class="leftmenu">
            <li <?php if ($_ACTIVE_SIDEBAR == "inicio") echo 'class="current"'; ?>><a href="inicio.php" class="home">Inicio</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "empresas") echo 'class="current"'; ?>><a href="empresas.php" class="home">Empresas</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "sedes") echo 'class="current"'; ?>><a href="sedes.php" class="form">Sedes</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "usuarios") echo 'class="current"'; ?>><a href="usuarios.php" class="usuarios">Usuarios</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "categorias") echo 'class="current"'; ?>><a href="categorias.php" class="gallery">Categorías</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "productos") echo 'class="current"'; ?>><a href="productos.php" class="gallery">Productos</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "reportes") echo 'class="current"'; ?>><a href="reportes.php" class="grid">Reportes</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "mensajes") echo 'class="current"'; ?>><a href="mensajes.php" class="calendar">Mensajes</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "alertas") echo 'class="current"'; ?>><a href="alertas.php" class="buttons">Alertas</a></li>
            <li <?php if ($_ACTIVE_SIDEBAR == "archivos") echo 'class="current"'; ?>><a href="archivos.php" class="editor">Archivos</a></li>
        </ul>
    </div>
    <h3 class="open">Controles</h3>    
    <div class="controles">
        <ul>
            <li>
                <a href="#" onClick="nuevo(); return false;" class="controlmas"></a>
            </li>
            <li>
            	<a href="#" onClick="borra(); return false;" class="controlmenos"></a>
            </li>
            <li >
                <a href="#" onClick="edita(); return false;" class="controleditar"></a>
            </li>
        </ul>
    </div><!-- controles -->
    <script type="text/javascript">
        <?php
        
        switch ($_ACTIVE_SIDEBAR) {
            case "empresas":
                echo '
        function nuevo(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/EmpresaIngreso.html", "Ingresar Empresa", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
            //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar Empresa")} 
        }
        function edita(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/EmpresaEdita.html", "Editar Empresa", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
            //ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Editar Empresa")} 
        }
        function borra(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/EmpresaBorra.html", "Eliminar Empresa", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
            //ajaxwin.onclose=function(){ return window.confirm("Cerrar ventana Eliminar Empresa")} 
        }
';
                break;
            case "sedes":
                echo '
        function nuevo(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/SedeIngreso.html", "Ingresar Sede", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
//            ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar Sede")} 
        }
        function edita(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/SedeEdita.html", "Editar Sede", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
//            ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Editar Sede")} 
        }
        function borra(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/SedeBorra.html", "Eliminar Sede", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
//            ajaxwin.onclose=function(){ return window.confirm("Cerrar ventana Eliminar Sede")} 
        }
';
                break;
            case "usuarios":
                echo '
        function nuevo(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosIngreso.html", "Ingresar Usuario", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
//            ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar Usuario")} 
        }
        function edita(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosEdita.html", "Editar Usuario", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
            ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Editar Usuario")} 
        }
        function borra(){ 
            ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosBorra.html", "Eliminar Usuario", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
//            ajaxwin.onclose=function(){ return window.confirm("Cerrar ventana Eliminar Usuario")} 
        }
';
                break;
            case "categorias":
                echo '
        function nuevo(){};
        function edita(){};
        function borra()(){};
';
                break;
            case "productos":
                echo '
        function nuevo(){};
        function edita(){};
        function borra()(){};
';
                break;
            default:
                echo '
        function nuevo(){};
        function edita(){};
        function borra()(){};
';
                break;
        }
        
        ?>
    </script>      
</div>