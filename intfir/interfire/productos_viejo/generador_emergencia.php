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
                    <li><a href="#tabs-2">Rev. Semanal</a></li>
                    <li><a href="#tabs-3">Rev. Mensual</a></li>
                    <li><a href="#tabs-4">Rev. Trimestral</a></li>
                    <li><a href="#tabs-5">Rev. Anual</a></li>
                    <li><a href="#tabs-6">Prb. Mensual</a></li>
                    <li><a href="#tabs-7">Prb. Semestral</a></li>
                    <li><a href="#tabs-8">Prb. Anual</a></li>
                    <li><a href="#tabs-9">Mant. Semanal</a></li>
                    <li><a href="#tabs-10">Mant. Mensual</a></li>
                    <li><a href="#tabs-11">Mant. Trimestral</a></li>
                    <li><a href="#tabs-12">Mant. Semestral</a></li>
                    <li><a href="#tabs-13">Mant. Anual</a></li>
                    
                </ul>
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                   <!-- LUCES EMERGENCIA -->
	                   
	                   <fieldset><legend>Luces de Emergencia</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo de Alimentacion</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Bateria</option><option value="1">Generadores de emergencia</option><option value="2"></option></select></div>
                    	<div class="one_fourth"><label for="name">Caseta hidrante</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select> </div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">El edificio tiene una cobertura por luces de emergencia</label></div>
                        <div class="one_fourth">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                        <div class="one_fourth"><label for="name">Duracion del abastecimiento</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="en horas" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SE�ALIZACION EMERGENCIA -->
	                   
	                   <fieldset>
	                   		<legend>Se&ntilde;alizaci&oacute;n de Emergencia</legend>
                     <p>
                    	<div class="one_fourth"><label for="name">Tipo de Alimentacion</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Bateria</option><option value="1">Generadores de emergencia</option><option value="2"></option></select></div>
                    	<div class="one_fourth"><label for="name">El edificio tiene una cobertura por luces de emergencia</label></div>
                        <div class="one_fourth last"> <select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option> </select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ULTIMO MANTENIMIENTO -->
	                   
	                   <fieldset>
	                   		<legend>Mantenimiento</legend>
                    <p>
                    	<div class="one_half"><label for="name">Fecha ultimo mantenimiento</label></div>
                        <div class="one_half last"><input type="text" name="name" value="fecha" class="sftable" /></div>
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
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion semanal</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="40%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Semana 1</td>
			                <td>Semana 2</td>
			                <td>Semana 3</td>
			                <td>Semana 4</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="40%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el nivel de combustible del tanque de suministro</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el nivel diario del tanque</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar y accionar la valvula de flotacion del tanque</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar y accionar la bomba de combustible</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar y accionar la valvula de solenoide</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar la existencia de agua en el sistema de combustible</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar Las mangueras flexibles y conectores</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el nivel de aceite en el motor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el funcionamiento del calentador del aceite del motor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el nivel de refrigerante en el motor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el estado del refrigerante</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar la idoneidad de flujo de aire a traves del radiador</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el estado de la bomba del agua</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar las mangueras flexibles y conectores</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el estado de la camisa de agua</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar la existencia de fugas en el sistema de extraccion de gases</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el purgador de drenaje de condensado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el nivel de electrolito en las baterias</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar el sistema electrico</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el motor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comrpobar la limpieza en la sala del generador y en los tanques de suministro de combustible</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el generador</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			            </table>
			        </div>
				       
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
                
                <div id="tabs-3">
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion mensual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="40%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes anterior</td>
			                <td>Mes actual</td>
			                <td>Mes siguiente</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="40%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar y comprobar el estado de las correas del ventilador y del alternador</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el cargador de la bateria y el ritmo de carga</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comprobar que la carga de bateria se encuentra en flotacion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar y comprobar los seccionadores y fusibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el nivel de aceite del regulador de sobrevelocidad y posibles fugas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>              </tr>
			            </table>
			        </div>
				       
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
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Trimestral</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="40%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Trimestre 1</td>
			                <td>Trimestre 2</td>
			                <td>Trimestre 3</td>
			                <td>Trimestre 4</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="40%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el respiradero del carter</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar el aislamiento del escape</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar los terminales de las baterias para asegurarse de que estan limpios y bien apretados</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar el estado del cableado donde pueda estar sometido a friccion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			            </table>
			        </div>
				       
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
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion anual</legend>
	                   	
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
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar la existencia de obstrucciones en las aberturas de ventilacion del tanque y en los conductos de rebosamiento</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar los conductos de flujo de combustible</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar los mecanismos y controles de ventilacion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar los soportes de sistema de extraccion de gases</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar los contactores del conmutador</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Comprobar el sistema de arranque del motor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			            </table>
			        </div>
	                   	                   
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
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Prueba mensual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="40%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes anterior</td>
			                <td>Mes actual</td>
			                <td>Mes siguiente</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="40%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Probar cada unidad alimentada por bateria durante un minimo de 30 segundos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>probar las baterias del generador de emergencia para verificar su estado de carga</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Accionar el generador de emergencia sin cargar</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			            </table>
			        </div>
				       
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
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Prueba Semestral</legend>
	                   	
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
			                    <col class="con0" width="25%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Comprobar la caducidad del anticongelante</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Probar la operacion de dispositivos de seguridad y alarmas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			            </table>
			        </div>
	                   	                   
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
                
                <div id="tabs-8">
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Prueba anual</legend>
	                   	
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
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inpeccionar la existencia de obstrucciones en las aberturas de ventilacion del tanquey en los conductos de rebosamiento</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Probar los mecanismos y controles de ventilacion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Probar el sistema de arranque conexiones, cojinetes, rotor, aislamiento del secundario</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Probar la bomba de inyeccion y los inyectores</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Probar y registrar las lecturas de la resistencia en el bobinario con un probador de aislamiento (megaohmetro)</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>probar cada unidad alimentada por bateria durante 90 minutos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>probar el generador de emergencia a plena carga o con una carga de prueba igual a esta</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			            </table>
			        </div>
	                   	                   
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
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Mantenimiento semanal</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="40%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Semana 1</td>
			                <td>Semana 2</td>
			                <td>Semana 3</td>
			                <td>Semana 4</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="40%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Retirar el agua del sistema de combustible</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			            </table>
			        </div>
				       
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
                
                <div id="tabs-10">
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Mantenimiento mensual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="40%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes anterior</td>
			                <td>Mes actual</td>
			                <td>Mes siguiente</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="40%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Eliminar corrosion, limpiar y secar la carcasa de la bateria</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			            </table>
			        </div>
				       
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
                
                <div id="tabs-11">
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Mantenimiento Trimestral</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="40%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Trimestre 1</td>
			                <td>Trimestre 2</td>
			                <td>Trimestre 3</td>
			                <td>Trimestre 4</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="40%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Limpiar los filtros y colectores de impurezas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Limpiar el respirador del carter</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			            </table>
			        </div>
				       
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
                
                <div id="tabs-12">
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Mantenimiento Semestral</legend>
	                   	
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
			                    <col class="con0" width="25%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Limpiar las cajas de conexiones, paneles y armarios</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Poner a punto el filtro de aire del motor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			                    <td>Inspeccionar la longitud de las escobillas del generador y capacidad de movimiento en soporte</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                </tr>
			            </table>
			        </div>
	                   	                   
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
                
                <div id="tabs-13">
                
                <h1 class="pageTitle">Sistemas de Luces de Emergencia</h1>
                
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
	                   
	                  	<fieldset>
	                   	<legend>Mantenimiento anual</legend>
	                   	
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
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Eliminar atascos en el intercambiador de calor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Limpiar el exterior del radiador</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Limpiar los mecanismos y controles de ventilacion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Limpiar los contactores del conmutador</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Inspeccionar y limpiar el conmutador y anillos colectores del generador</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                <tr>
			                    <td>Cambiar los coginetes del generador y el lubricante de los mismos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			                    <td>Inspeccionar y limpiar el regulador de tension</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option><option value="2">N/A</option></select></td>
			                <tr>
			            </table>
			        </div>
	                   	                   
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
                <!-- FIN REGISTRO ROCIADORES --><!-- FIN REGISTRO ROCIADORES --><!-- FIN REGISTRO ROCIADORES -->
                
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
