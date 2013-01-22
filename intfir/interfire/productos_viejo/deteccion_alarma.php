<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interfirex | Gestor de Inventario y Mantenimiento</title>
<link rel="stylesheet" media="screen" href="../css/style.css" />

<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="../css/ie9.css"/>
<![endif]-->

<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="../css/ie8.css"/>
<![endif]-->

<!--[if IE 7]>
    <link rel="stylesheet" media="screen" href="../css/ie7.css"/>
<![endif]-->

<script type="text/javascript" src="../js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="../js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="../js/custom/general.js"></script>
<script type="text/javascript" src="../js/custom/dashboard.js"></script>

</head>

<body class="bodygrey">

<div class="header">
    
    <div class="topheader">
        <ul class="notebutton">
            <li class="note">
                <a href="../dashboard.php" class="inicionotify">
                    <span class="wrap">
                        <span class="thicon inicioicon"></span>
                    </span>
                </a>
            </li>
            <li class="note">
            	<a href="../pages/info.html" class="alertnotify">
                	<span class="wrap">
                    	<span class="thicon infoicon"></span>
                        <span class="count">5</span>
                    </span>
                </a>
            </li>
            <li class="note">
                <a href="../pages/message.html" class="messagenotify">
                    <span class="wrap">
                        <span class="thicon msgicon"></span>
                        <span class="count">4</span>
                    </span>
                </a>
            </li>
            <li class="note">
            	<a href="" class="archivos">
                	<span class="wrap">
                    	<span class="thicon archivosicon"></span>
                    </span>
                </a>
            </li>
        </ul>
    </div><!-- topheader -->


    <!-- logo -->
	<a href=""><img src="../images/logo2.png" alt="Logo" /></a>
    
    <div class="accountinfo">
    	<img src="../images/foto.png" alt="Avatar" />
        <div class="info">
        	<h3>Felipe Ceballos</h3>
            <p>
            	<a href="">Detalles</a> <a href="../index.php">Salir</a>
            </p>
        </div><!-- info -->
    </div><!-- accountinfo -->
</div><!-- header -->


<div class="sidebar">
	<div id="accordion">
        <h3 class="open">Navegador General</h3>
        <div class="content" style="display: block;">
        	<ul class="leftmenu">
            	<li><a href="../dashboard.php" class="home">Empresas</a></li>
                <li><a href="../sedes.html" class="form">Sedes</a></li>
                <li><a href="../usuarios.php" class="usuarios">Usuarios</a></li>
                <li class="current"><a href="" class="gallery">Art&iacute;culos</a></li>
                <li><a href="../reportes.html" class="grid">Reportes</a></li>
                <li><a href="" class="calendar">Mensajes</a></li>
                <li><a href="" class="buttons">Alertas</a></li>
                <li><a href="" class="editor">Archivos</a></li>
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
        	<li><a href="../dashboard.php" class="dashboard"><span>Empresas</span></a></li>
            <li><a href="../sedes.html" class="elements"><span>Sedes</span></a></li>
            <li><a href="../usuarios.php" class="users"><span>Usuarios</span></a></li>
            <li class="current"><a href="../articulos.php" class="articulos"><span>Productos</span></a></li>
            <li><a href="../reportes.html" class="reports"><span>Reportes</span></a></li>
        </ul>
	
	    <form id="search" action="" method="post">
	    	<input type="text" name="keyword" /> <button class="searchbutton"></button>
	    </form>
	    
    </div><!-- tabmenu -->
    
    <div class="contenedor">
        
         <!-- ARTICULOS -->
         
         	<div id="tabs" class="tabs2">
                <ul>
                    <li><a href="#tabs-1">Registro</a></li>
                    <li><a href="#tabs-2">Ins Semanal</a></li>
                    <li><a href="#tabs-3">Ins Mensual</a></li>
                    <li><a href="#tabs-4">Ins Trimestral</a></li>
                    <li><a href="#tabs-5">Ins Semestral</a></li>
                    <li><a href="#tabs-6">Prb Anual</a></li>
                    <li><a href="#tabs-7">Ins Semanal Motor</a></li>
                    <li><a href="#tabs-8">Prb Mensual</a></li>
                    <li><a href="#tabs-9">Prb Trimestral</a></li>
                </ul>
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Deteccion y alarma de Incendios</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_fourth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_fourth"><label for="email">Sistema</label></div>
                        <div class="one_fourth last"><input type="text" name="email"  class="sftable" /></div>
                    </p>
                    
                    <p>
                    	<div class="one_fourth"><label for="name">Situaci&oacute;n</label></div>
                    	<div class="three_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- GENERAL -->
	                   
	                   <fieldset>
	                   <legend>Sistema de Deteccion</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Marca de Panel</label></div>
                    	<div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Marca de detectores</label></div>
                    	<div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Cantidad de detectores</label></div>
                    	<div class="one_sixth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_sixth"><label for="name">Funcionamiento</label></div>
                    	<div class="one_sixth"><input type="text" name="name"value="%" class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Fecha Instalacion</label></div>
                    	<div class="one_sixth"><input type="text" name="name"value="fecha" class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Fecha ultima prueba</label></div>
                    	<div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   <legend>Sistema de Alarma</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Marca de pulsadores</label></div>
                    	<div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Cantidad de pulsadores</label></div>
                    	<div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Fecha de ultima prueba</label></div>
                    	<div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   <legend>Fecha de ultima mantenimiento</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Fecha de ultima mantenimiento</label></div>
                    	<div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>    
                    </form>
                </div>
                
                <div id="tabs-2">
                
                <h1 class="pageTitle">Sistema de Deteccion y Alarma de Incendios</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA SEMANAL -->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Semanal</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Semana</td>
			                <td>Semana</td>
			                <td>Semana</td>
			                <td>Semana</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>El equipo de control para sistemas de alarma de incendios sin localizacion de alarmas, supervision ni senales de averias</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="5">No Aplica</option></select></td>
			                   </tr>
			                <tr>
			                    <td>Fusibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="5">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de hardware</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="5">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Lamparas y LED</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="5">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Suministro principal de nergia</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="5">No Aplica</option></select></td>
			                </tr>
			            </table>
				       
				       </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div> 
                      
                    </form>
                </div>
                
                <!-- REGISTRO MENSUAL -->
                
                <div id="tabs-3">
                
               <h1 class="pageTitle">Sistema de Deteccion y Alarma de Incendios</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA MENSUAL -->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Mensual</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes</td>
			                <td>Mes</td>
			                <td>Mes</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Baterias de plomo acido</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Baterias primarias secas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			            </table>
				       
				       </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div> 
                      
                    </form>
                </div>
                
                <div id="tabs-4">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de agua pulverizada</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA TRIMESTRAL-->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Trimestral</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Trimestre</td>
			                <td>Trimestre</td>
			                <td>Trimestre</td>
			                <td>Trimestre</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Detector de llama</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de supervision de senal</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de control de flujo</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			            </table>
				       
				       </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>    
                    </form>
                </div>
                
                <div id="tabs-5">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de agua pulverizada</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA TRIMESTRAL-->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Semestral</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Semestre 1</td>
			                <td>Semestre 2</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="50%" />
			                    <col class="con0" width="25%" />
			                    <col class="con1" width="25%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Baterias de niquel-cadmio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Baterias sellaadas de plomo-acido</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Supresores de corriente continua</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Senales de averia en el panel de control</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipos de emergencia de transmision de alarma/voz</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Avisadores remotos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de muestreo de aire</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Detectores de polvo</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos electromecanicos de apertura y cierre de puertas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Interruptores de los sistemas de extincion de incendios</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Interruptores de los sistemas de supresion de incendio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Cuadros de alarma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Detectores de calor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Detectores de humo</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipanmiento de vigilante</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Interfaz</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de notificaciones de alarma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                </tr>
			            </table>
				       
				       </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>    
                    </form>
                </div>
                        
                        
                         <div id="tabs-6">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de agua pulverizada</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA ANUAL-->
	                   
	                  	<fieldset>
	                   	<legend>Prueba Anual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="75%" />
			                <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Valor</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="75%" />
			                    <col class="con0" width="25%" />
			                </colgroup>
			                <tr>
			                    <td>Equipos de control: Sistemas de alarma de incendios con localizacion de alarma, supervision y senales de averias: Funciones</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Fusibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de interfaz</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Lamparas y LED's</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de energia principal</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Transpondedores</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>BATERIAS SISTEMAS DE ALARMA DE INCENDIOS. Prueba del cargador de baterias de niquel-cadmio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Prueba de descarga (30min)</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Prueba del cargador de baterias selladas de plomo-acido (reemplazar cada 4 anos)</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Prueba de descarga (30min)</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Energia para el cable de fibra optica</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Senales de averia en el panel de control</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de emergencia de transmision de alarma-voz</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Avisadores remotos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>DISPOSITIVOS DE INICIO DE ALARMA. Detectores de humos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos electromecanicos en cierres</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Interruptores de extincion o supresion de incendios</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Detectores de gas y otros</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Detectores de calor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Pulsadores manuales</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Funcionamiento de los detectores de humos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sensibilidad de los detectores de humos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de proteccion del vigilante</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de hardware</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de proteccion para riesgos especiales</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>DISPOSITIVOS DE AVISO DE ALARMA. Dispositivos audibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Altavoces</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos visibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="1">N/A</option></select></td>
			                </tr>
			            </table>
				       
				       </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>    
                    </form>
                </div>
                
                <div id="tabs-7">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de deteccion y alarma de incendios</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA QUINQUENAL-->
	                   
	                  	<fieldset>
	                   	<legend>Generador Accionado por motor - Inspeccion semanal</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Funcionamiento</td>
			                <td>Notas</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
			                </colgroup>
			                <tr>
			                    <input type="text" name="name" value="fecha" class="sftable" />
			                    <input type="text" name="name" value="inspector" class="sftable" />
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <input type="text" name="name" class="sftable" />
			                </tr>
                            
			            </table>    
                        
                         </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>    
                    </form>
                </div>
                
                <!-- REGISTRO MENSUAL -->
                
                <div id="tabs-8">
                
               <h1 class="pageTitle">Sistema de Deteccion y Alarma de Incendios</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA MENSUAL -->
	                   
	                  	<fieldset>
	                   	<legend>Pruebas Mensuales</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes</td>
			                <td>Mes</td>
			                <td>Mes</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Tension de carga para baterias secas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			            </table>
				       
				       </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div> 
                      
                    </form>
                </div>
                
                <div id="tabs-9">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de deteccion y alarma de incendios</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>Informaci&oacute;n General</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA TRIMESTRAL-->
	                   
	                  	<fieldset>
	                   	<legend>Prueba trimestral (para sistemas sin localizacion de senal)</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes</td>
			                <td>Mes</td>
			                <td>Mes</td>
			                <td>Mes</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                    <td><div class="one_sixth"><input type="text" name="name" value="inspector" class="sftable" /></div></td>
			                </tr>
			                <tr>
			                    <td>Funciones</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Fusibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo de hardware</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Lampara y LED's</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de energia principal</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Transpondedores</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de supervision de senal (excepto interruptores antimanipulacion)</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			                <tr>
			                    <td>Otros equipos de transmision</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="3">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="4">No Aplica</option></select></td>
			                </tr>
			            </table>
				       
				       </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Notas</legend>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>    
                    </form>
                </div>
                
            </div><!-- tabs -->
 
            <div class="widgetbox">
                <div class="content">
                	<div id="chartplace" style="height:1px;"></div>
                </div><!-- content -->
            </div><!-- widgetbox2 -->
        
            
         <!-- ARTICULOS -->
    
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
