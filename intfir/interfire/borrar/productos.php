<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interfirex | Gestor de Inventario y Mantenimiento</title>
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

<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/custom/dashboard.js"></script>
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
    
    <div class="accountinfo">
    	<img src="images/foto.png" alt="Avatar" />
        <div class="info">
        	<h3>Felipe Ceballos</h3>
            <p>
            	<a href="">Detalles</a> <a href="index.php">Salir</a>
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
                <li><a href="usuarios.php" class="usuarios">Usuarios</a></li>
                <ul class="productos"><a href="productos.php" class="gallery">Productos</a>
                	<li class="articulos"><a href="items.html" class="items">Items</a></li>
                </ul>
                </li>
                <li><a href="reportes.html" class="grid">Reportes</a></li>
                <li><a href="mensajes.html" class="calendar">Mensajes</a></li>
                <li><a href="" class="buttons">Alertas</a></li>
                <li><a href="archivos.html" class="editor">Archivos</a></li>
            </ul>
        </div>
        <h3 class="open">Controles</h3>
        
        <div class="controles">
        <ul>
            <li>
                <a href="" class="controlmas"></a>
            </li>
            <li>
            	<a href="" class="controlmenos"></a>
            </li>
            <li >
                <a href="" class="controleditar"></a>
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
            <li><a href="usuarios.php" class="users"><span>Usuarios</span></a></li>
            <li class="current"><a href="productos.php" class="articulos"><span>Productos</span></a></li>
            <li><a href="reportes.html" class="reports"><span>Reportes</span></a></li>
        </ul>
	
	    <form id="search" action="" method="post">
	    	<input type="text" name="keyword" /> <button class="searchbutton"></button>
	    </form>
	    
    </div><!-- tabmenu -->
    
    <div class="contenedor">
        
         <!-- START WIDGET LIST -->
         <ul class="widgetlist">
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 1" /><span>Deteccion y alarma de Incendios</span></a></li>
             <li><a href="articulos.php"><img src="images/icons/empresa.png" alt="Empresa 2" /><span>Rociadores Automaticos</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 3" /><span>Agua nebulizada</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 4" /><span>Agua Pulverizada</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 5" /><span>Rocaidores de Espuma</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 6" /><span>Sistemas de Espuma</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 7" /><span>Tuberias y Mangueras</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 8" /><span>Bombas Contra Incendios</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 9" /><span>Abastecimiento de Agua</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 10" /><span>Hidrantes cContra Incendios</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 11" /><span>Sistemas Fijos de Extinción por Polvo</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 12" /><span>Sistemas De Extincion por Agente Extintor Acuoso</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 13" /><span>Sistemas De Extincion por Agente Halogenado</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 14" /><span>Sistemas De Extincion por Agente Alternativo al Halon</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 15" /><span>Sistemas De Extincion por Dióxido de Carbono</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 16" /><span>Extintores Portatiles</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 17" /><span>Puertas y Compuertas Cortafuego</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 18" /><span>Luces de emergencia</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 19" /><span>Sistema de Control de Humos</span></a></li>
             <li><a href="#"><img src="images/icons/empresa.png" alt="Empresa 20" /><span>Ascensor de Emergencia</span></a></li>

         </ul>
         <!-- END WIDGET LIST -->
    
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
