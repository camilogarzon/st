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
        </div><!-- info --> <!-- info -->
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
</div><!-- sidebar -->


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
                    <li><a href="#tabs-4">Rev. Anual</a></li>
                    <li><a href="#tabs-5">Prb. Trimestral</a></li>
                    <li><a href="#tabs-6">Prb. Semestral</a></li>
                    <li><a href="#tabs-7">Prb. Anual</a></li>
                    <li><a href="#tabs-8">Mant. Mensual</a></li>
                    <li><a href="#tabs-9">Mant. Trimestral</a></li>
                    <li><a href="#tabs-10">Mant. Semestral</a></li>
                    <li><a href="#tabs-11">Mant. Anual</a></li>
                </ul>
                
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Espuma</h1>
                
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
	                   
	                   <!-- GENERAL -->
	                   
	                   <fieldset>
	                   		<legend>General</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Ubicaci&oacute;n del Sistema</label></div>
                    	<div class="one_fourth "><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Sede</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" value="dato precargado"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Loca lizaci&oacute;n de la v&aacute;lvula de control </label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Se ha modificado el sistema desde la &uacute;ltima inspecci&oacute;n?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option> <option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Cual es el riesgo protegido?</label></div>
                    	<div class="three_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>	                   </fieldset>
	                   
	                   <!-- VALVULA -->
	                   
	                   <fieldset>
	                   		<legend>V&aacute;lvulas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">C&oacute;mo est&aacute;n supervisadas las v&aacute;lvulas?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Precintadas</option><option value="1">Bloqueadas</option><option value="2">Interruptor antimanipulacion</option></select></div>
                    	<div class="one_fourth"><label for="name">Est&aacute;n las v&aacute;lvulas identificadas con alguna se&ntilde;alizaci&oacute;n?</label></div>
                        <div class="one_fourth last"><select name="occupation"> <option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ABASTECIMIENTO DE AGUA -->
	                   
	                   <fieldset>
	                   		<legend>Abastecimiento de agua</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Cuando se realiz&oacute; la &uacute;ltima prueba de abastecimiento de agua?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select> </div>
                    	<div class="one_fourth"><label for="name">Est&aacute;n los dep&oacute;sitos, tanques de presi&oacyte;n, etc, en buen estado?</label></div>
                        <div class="one_fourth last"><select name="occupation"> <option>Seleccione una</option> <option value="0">Si</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOMBAS -->
	                   
	                   <fieldset>
	                   		<legend>Bombas</legend>
	                <p>
                    	<div class="one_sixth"><label for="name">La bomba contra incendios es?</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Diesel</option><option value="1">Electrica</option><option value="2">Gasolina</option></option><option value="3">Ninguna de estas</option></select></div>
                    	<div class="one_sixth"><label for="name">Cuando se inspeccionaron las bombas por &uacute;ltima vez?</label></div>
                        <div class="one_sixth"> <input type="text" name="name" value="fecha" class="sftable" /> </div>
                    	<div class="one_sixth"><label for="name">La bomba est&aacute; en buenas condiciones?</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option> <option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CONEXIONES PARA EL DEPARTAMENTO DE BOMBEROS -->
	                   
	                   <fieldset>
	                   		<legend>CONEXIONES PARA EL DEPARTAMENTO DE BOMBEROS</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Ubicaci&oacute;n</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /></div>                    	
                        <div class="one_fourth"><label for="name">Existen placas identificadoras</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select> </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- INSTRUCCIONES DE MANEJO -->
	                   
	                   <fieldset>
	                   		<legend>Instrucciones de manejo</legend>
                    <p>
                    	<div class="one_half"><label for="name">Se han entregado la instrucciones de funcionamiento?</label></div>
                        <div class="one_half last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
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
                
                <h1 class="pageTitle">Sistemas de Espuma</h1>
                
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
			                <col class="head1" width="50%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Valvulas precintadas</td>
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
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
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
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Espuma</h1>
                
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
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			                <col class="head1" width="15%" />
			                <col class="head0" width="15%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Conecxiones para el departamento de bomberos</td>
			                <td>Valvulas bloqueadas</td>
			                <td>Produccion de espuma</td>
			                <td>Nivel de concentracion de espuma</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="20%" />
			                    <col class="con0" width="20%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                    <col class="con1" width="15%" />
			                    <col class="con0" width="15%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
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
                
                <h1 class="pageTitle">Sistemas de Espuma </h1>
                
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
	                   	<legend>Inspeccion Anual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="50%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Año</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="50%" />
			                    <col class="con0" width="50%" />
			                </colgroup>
			                <tr>
			                    <td>Camaras de espuma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Tuberias</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Soportes </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Manometros</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
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
                
                <h1 class="pageTitle">Sistemas de Espuma</h1>
                
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
	                   	<legend>Pruebas Trimetrales</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
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
			                    <col class="con1" width="50%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
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
			                    <td>Valvulas de control</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
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
                
                <h1 class="pageTitle">Sistemas de Espuma</h1>
                
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
	                   
	                   <!-- TABLA SEMESTRAL-->
	                   
	                  	<fieldset>
	                   	<legend>Pruebas Semestrales</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
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
			                    <td>Sistema de deteccion  - Probar el sistema para asegurarse de que funciona correctamente</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                    <td>Espumogeno - Vaciar 5 galones (19 litros) de fondo del deposito y dejar que repose durante varias horas. Buscar sedimentos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
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
                
                <h1 class="pageTitle">Sistemas de Espuma </h1>
                
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
	                   	<legend>Pruebas Anuales</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="50%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Año</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="50%" />
			                    <col class="con0" width="50%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
		|	                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                    <td>Calidad de la espuma - Retirar una pinta (0,5 litros) de espumogeno y enviarla al fabricante para que realice un analisis. Adjuntar el informe a este formulario </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                    <td>Prueba de descarga - Realizar una prueba de descarga para asegurarse de que todos los componentes del sistema funcionan correctamente. Asegurarse de que el sistema este en perfectas condiciones de trabajo</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
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
                
                <div id="tabs-8">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Espuma </h1>
                
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
	                   	<legend>Mantenimiento mensual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
                            <col class="head0" width="25%" />
                            <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Mes 1</td>
                            <td>Mes 2</td>
                            <td>Mes 3</td>
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
			                    <td>Accionar las bombas durante 20 o 30 segundos asegurandose de que no hay perdida de espuma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes. Situar un numero en esta casilla y numerar la nota correspondiente mas abajo.</td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
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
                
                <h1 class="pageTitle">Sistemas de Espuma</h1>
                
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
	                   	<legend>Mantenimiento Trimestral </legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
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
			                    <col class="con1" width="50%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
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
			                    <td>Girar cada valvula lo maximo posible y retornarla a su posicion inicial, Volver a precintar o a bloquear, si procede </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes. Situar un numero en esta casilla y numerar la nota correspondiente mas abajo </td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
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
                
                 <div id="tabs-10">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Espuma </h1>
                
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
	                   	<legend>Mantenimiento Semestral</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="25%" />
                            <col class="head0" width="25%" />
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
			                    <td>Sello hidraulico de venteo</td>
		|	                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
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
			                    <td>Asegurar que el sello hidraulico de venteo es correcto</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes. Situar un numero en esta casilla y numerar la nota correspondiente mas abajo.</td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
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
                
                 <div id="tabs-11">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Espuma </h1>
                
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
	                   	<legend>Mantenimiento Anual</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="50%" />
			            </colgroup>
			            <tr>
			                <td>Detalle</td>
			                <td>Año</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="50%" />
			                    <col class="con0" width="50%" />
			                </colgroup>
			                <tr>
			                    <td>Lubricar valvulas</td>
		|	                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Aplicar grafito o grafito en aceite ligero para lubricar los vastagos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Asegurarse que las instrucciones de manejo estan actualizadas y disponibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                    <td>Inspeccionar los filtros</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                    <td>Inspeccionar posibles daños o corrosion en tuberias aereas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                    <td>Registrar todas aquellas observaciones acerca del sistema que el inspector considere importantes. Situar un numero en esta casilla y numerar la nota correspondiente mas abajo.</td>
			                    <td><input type="text" name="email" class="sftable" /></td>
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
                <!-- FIN REGISTRO ROCIADORES --><!-- FIN REGISTRO ROCIADORES --><!-- FIN REGISTRO ROCIADORES -->
                
            </div><!-- tabs -->
 
            <div class="widgetbox">
                <div class="content">
                	<div id="chartplace" style="height:1px;"></div>
                </div><!-- content -->
            </div><!-- widgetbox2 -->
        
            
         <!-- ARTICULOS -->
    
    </div><!-- contenedor -->
    
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
