<?php  include('control/db.php');
       include('control/Fusuarios.php');
       include ('funciones.php');
   
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interfirex | Gestor de Inventario y Mantenimiento</title>
<link rel="stylesheet" media="screen" href="css/style.css" />


<!--carga la forma y la ventana de ingreso de item-->
<link rel="stylesheet" media="screen" href="css/dhtmlwindow.css" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/formwizard.css" />

<script src="js/formwizard.js" type="text/javascript"> </script>

<script type="text/javascript">

var myform=new formtowizard({
	formid: 'feedbackform',
	persistsection: true,
	revealfx: ['slide', 500]
})

</script>

<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/ie9.css"/>
<![endif]-->

<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/ie8.css"/>
<![endif]-->

<!--[if IE 7]>
    <link rel="stylesheet" media="screen" href="css/ie7.css"/>
<![endif]-->

<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/dhtmlwindow.js" ></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#example').dataTable( {
		"sPaginationType": "full_numbers"
	});
	
});
</script>

</head>

<body class="bodygrey">

<div class="header">
    
    <div class="topheader">
        <ul class="notebutton">
            <li class="note">
                <a href="dashboard.php" class="inicionotify">
                    <span class="wrap">
                        <span class="thicon inicioicon"></span>
                    </span>
                </a>
            </li>
            <li class="note">
            	<a href="pages/info.html" class="alertnotify">
                	<span class="wrap">
                    	<span class="thicon infoicon"></span>
                        <span class="count">5</span>
                    </span>
                </a>
            </li>
            <li class="note">
                <a href="pages/message.html" class="messagenotify">
                    <span class="wrap">
                        <span class="thicon msgicon"></span>
                        <span class="count">4</span>
                    </span>
                </a>
            </li>
            <li class="note">
            	<a href="archivos.html" class="archivos">
                	<span class="wrap">
                    	<span class="thicon archivosicon"></span>
                    </span>
                </a>
            </li>
        </ul>
    </div><!-- topheader -->


    <!-- logo -->
	<a href=""><img src="images/logo2.png" alt="Logo" /></a>
    
    <?php

//uso de la funcion verificar_usuario()
if (verificar_usuario()){
	//si el usuario es verificado puede acceder al contenido permitido a el
	print "
	<div class=\"accountinfo\">
    	<img src=\"images/foto.png\" alt=\"Avatar\" />
        <div class=\"info\">
        	<h3> Hola : $_SESSION[usuario]</h3>
			<p>";
			
	print "<a href=\"#\">Detalles</a> <a href=\"salir.php\">Salir</a>";
} else {
	//si el usuario no es verificado volvera al formulario de ingreso
	header('Location:index.php');
}
?>
            </p>
        </div><!-- info -->
    </div><!-- accountinfo -->
</div><!-- header -->


<div class="sidebar">
	<div id="accordion">
        <h3 class="open">Navegador General</h3>
        <div class="content" style="display: block;">
        	<ul class="leftmenu">
            	<li><a href="dashboard.php" class="home">Empresas</a></li>
                <li><a href="sedes.php" class="form">Sedes</a></li>
                <li class="current"><a href="" class="usuarios">Usuarios</a></li>
                <li><a href="productos.php" class="gallery">Productos</a></li>
                <li><a href="reportes.html" class="grid">Reportes</a></li>
                <li><a href="mensajes.html" class="calendar">Mensajes</a></li>
                <li><a href="" class="buttons">Alertas</a></li>
                <li><a href="archivos.html" class="editor">Archivos</a></li>
            </ul>
        </div>
        <h3 class="open">Controles</h3>
        <script type="text/javascript">
function ingresa(){ //Define arbitrary function to run desired DHTML Window widget codes
ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/Usuariosingreso.html", "Ingresar Usuarios", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Ingresar usuarios")} //Run custom code when window is about to be closed
}

function borra(){ //Define arbitrary function to run desired DHTML Window widget codes
ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosBorra.html", "Eliminar Usuarios", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
ajaxwin.onclose=function(){ return window.confirm("Cerrar ventana Eliminar usuarios")} //Run custom code when window is about to be closed
}

function edita(){ //Define arbitrary function to run desired DHTML Window widget codes
ajaxwin=dhtmlwindow.open("ajaxbox", "ajax", "iframe/UsuariosEdita.html", "Modificar Usuarios", "width=450px,height=300px,left=300px,top=100px,resize=0,scrolling=0")
ajaxwin.onclose=function(){return window.confirm("Cerrar ventana Modificar usuarios")} //Run custom code when window is about to be closed
}
</script>
        <div class="controles">
        <ul>
            <li>
                <a href="#" onClick="ingresa(); return false" class="controlmas"></a>
            </li>
            <li>
            	<a href="#" onClick="borra(); return false" class="controlmenos"></a>
            </li>
            <li >
                <a ref="#" onClick="edita(); return false" class="controleditar"></a>
            </li>
        </ul>
        </div><!-- controles -->
        
	</div>
	
</div><!-- leftmenu -->


<div class="maincontent">
    
    <div class="tabmenu">
    	<ul>
        	<li><a href="dashboard.php" class="dashboard"><span>Empresas</span></a></li>
            <li><a href="sedes.php" class="elements"><span>Sedes</span></a></li>
            <li class="current"><a href="" class="users"><span>Usuarios</span></a></li>
            <li><a href="productos.php" class="articulos"><span>Productos</span></a></li>
            <li><a href="reportes.html" class="reports"><span>Reportes</span></a></li>
        </ul>
	    
    </div><!-- tabmenu -->
    
    <div class="contenedor">
        
         <!-- USUARIOS -->
         <table cellpadding="0" cellspacing="0" border="0" class="dyntable" id="example">
            <thead>
                <tr>
                    <th class="head0">Nombre</th>
                    <th class="head1">Cargo</th>
                    <th class="head0">Empresa</th>
                    <th class="head1">Sede</th>
                    <th class="head0">Correo</th>
                    <th class="head1">Celular</th>
                </tr>
            </thead>
            <colgroup>
                <col class="con0" />
                <col class="con1" />
                <col class="con0" />
                <col class="con1" />
            	<col class="con0" />
                <col class="con1" />
            </colgroup>
            <tbody>
            

<?php  listaUsuarios(); ?>           
            
              
                
            </tfoot>
        </table>

         <!-- USUARIOS -->
    
    </div>
    
    <br clear="all" />
    
</div><!--maincontent-->

<br />
<div class="footer footer_float">
	<div class="footerinner">
    	&copy; 2012 Interfire S.A.S. Todos los Derechos Reservados || Bogot&aacute;, Colombia || (571) 403 4997
    </div><!-- footerinner -->
</div><!-- footer -->

</body>
</html>
