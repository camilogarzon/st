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
                    <li><a href="#tabs-2">Rev. Mensual</a></li>
                    <li><a href="#tabs-3">Rev. Semestral Hidrantes de Columna Seca - Rev. Anual Hidrantes de Columna Humeda</a></li>
                    <li><a href="#tabs-4">Prb y Mant Anual</a></li>
                </ul>
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Hidrante</h1>
                
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
	                   
	                   <!-- PUERTAS CORTA FUEGO -->
	                   
	                   <fieldset>
	                   		<legend>Hidrantes</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo</label></div>
                        <div class="one_fourth">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Cilindro seco</option>
	                          <option value="1">Cilindro humedo</option>
	                          <option value="2">Hidrante pared</option>
	                          <option value="3">Hidrante petrolero</option>
	                        </select>
                        </div>
                        <div class="one_fourth"><label for="name">Caseta hidrante</label></div>
                        <div class="one_fourth last">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Fecha instalacion</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Valvula de apertura previa</label></div>
                        <div class="one_fourth">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                        <div class="one_fourth"><label for="name">Boquilla monitor</label></div>
                        <div class="one_fourth last">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOQUILLA MONITOR -->
	                   
	                   <fieldset>
	                   		<legend>Boquilla monitor</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo</label></div>
                        <div class="one_fourth">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Cobra</option>
	                          <option value="1">Doble cremallera</option>
	                        </select>
                        </div>
                        <div class="one_fourth"><label for="name">Boquilla</label></div>
                        <div class="one_fourth last">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Chorro niebla</option>
	                          <option value="1">Hydroflow</option>
	                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CASETA DE HIDRANTES -->
	                   
	                   <fieldset>
	                   		<legend>Caseta de hidrantes</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Manguera de 2 1/2"</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Manguera de 1 1/2"</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Llave apertura valvula</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Llave apertura hidrante</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Llave spaner</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Reduccion de 2 1/2" a 1 1/2"</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Bifurcacion de 2 1/2" a 1 1/2"</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="numerador" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ultimo mantenimiento -->
	                   
	                   <fieldset> <legend>mantenimiento</legend>
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
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Hidrantes contra incendios</h1>
                
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
	                   
	                   <!-- TABLA MENSUAL-->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Mensual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
                            <col class="head0" width="25%" />
                            <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes Anterior</td>
                            <td>Mes Actual</td>
                            <td>Mes Siguiente</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
                                <col class="con0" width="25%" />
                                <col class="con0" width="25%" />
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
			                    <td>Armario #</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
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
                
                <div id="tabs-3">
                
                <h1 class="pageTitle">Hidrantes contra incendios</h1>
                
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
	                   	<legend>Inspeccion Semestral - Hidrantes de columna seca</legend>
	                   	
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
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Las bocas de hidrantes estan apretadas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>No hay perdidas en el hidrante</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>No hay grietas en la columna del hidrante</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La tuerca para accionarno no esta gastada ni tiene los bordes redondeados</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las mangueras para conexion al hidrante no estan estropeadas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			            </table>
			        </div>
				       
				       </fieldset>
				       
				       <fieldset>
	                   	<legend>Inspeccion Anual - Hidrantes de columna humeda</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>N/A</td>
			                <td>Año</td>
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
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Los Hidrantes estan accesibles</td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
                                
			                </tr>
			                <tr>
			                    <td>Las bocas de hidrantes estan apretadas</td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>No hay perdidas en el hidrante cuando se abre la valvula</td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>No hay perdidas fugas en la junta debajo de las tapas cuando se abre la valvula</td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>No hay grietas en la columna del hidrante</td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La tuerca para accionarlo no esta gastada ni tiene los bordes redondeados</td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las mangueras para conexion al hidrante no estan estropeadas</td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comprobar los armarios para mangueras, si existen, para asegurarse de que todo el equipo esta en buenas condiciones </td>
			                    <td>N/A</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
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
                
                <div id="tabs-4">
                
                <h1 class="pageTitle">Hidrantes contra incendios</h1>
                
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
			                    <td>Lubricacion de la tuerca de operacion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Lubricado de empaquetaduras</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Lubricar del collar de empuje</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Hacer funcionar el hidrante con descarga de agua durante al menos 1 munuto</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
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
