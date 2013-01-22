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
                    <li><a href="#tabs-4">Prb. Trimestral</a></li>
                    <li><a href="#tabs-5">Rev. Anual</a></li>
                    <li><a href="#tabs-6">Rev. Trimestral</a></li>
                    <li><a href="#tabs-7">Prb. Anual</a></li>
                    <li><a href="#tabs-8">Mant. Anual</a></li>
                </ul>
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Rociadores de Espuma</h1>
                
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
                    	<div class="one_fourth"><label for="name">Loca lizaci&oacute;n de la v&aacute;lvula de control</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Se ha modificado el sistema desde la &uacute;ltima inspecci&oacute;n?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option> <option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Cual es el riesgo protegido?</label></div>
                    	<div class="three_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
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
                    </p>	                   </fieldset>
	                   
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
                
                <h1 class="pageTitle">Sistema de Rociadores de Espuma</h1>
                
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
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			                <col class="head1" width="16%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Valvulas precintadas</td>
			                <td>Boquillas </td>
			                <td>Conexiones / Tapas instaladas</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="25%" />
			                    <col class="con0" width="25%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
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
			                    <td>Conexiones para el departamento de bomberos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Valvulas bloqueadas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de alarma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                <tr>
			                    <td>Presion del agua</td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
                                <td><input type="text" name="email"  class="sftable" /></td>
                                <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Instrucciones disponibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Boquillas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Valvulas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
                                <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Tanque de espumogeno</td>
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
                
                <div id="tabs-4">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores de Espuma</h1>
                
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
	                   	<legend>Inspeccion Trimestral </legend>
	                   	
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
			                    <td>Prueba de drenaje: Registrar la presion estatica en el suministro de agua</td>
			                    <td><input type="text" name="email" class="sftable" /></td>
			                    <td><input type="text" name="email" class="sftable" /></td>
                                <td><input type="text" name="email" class="sftable" /></td>
                                <td><input type="text" name="email" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>- Abrir el drenaje y dejar que el flujo se estabilice</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>- Registrar la presion residual en el suministro de agua</td>
			                    <td><input type="text" name="email" class="sftable" /></td>
			                    <td><input type="text" name="email" class="sftable" /></td>
                                <td><input type="text" name="email" class="sftable" /></td>
                                <td><input type="text" name="email" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>- Cerrar lentamente la valvula de drenaje</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Alarma de flujo</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Accionar valvulas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
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
                
                <div id="tabs-5">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores de Espuma </h1>
                
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
			                    <td>Rociadores de espuma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Tuberias de los rociadores</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Soportes de tuberias y abrazaderas antisismicas</td>
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
                
                <div id="tabs-6">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores de Espuma</h1>
                
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
			                    <td>Inspeccionar los filtros de espumogeno</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el area proxima al sistema de espuma para asegurar un drenaje correcto</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el sistema de tuberias y accesorios para ver si existe corrocion, falta de alineacion, secciones bloqueadas, estado de los puntos de drenaje y de las juntas de goma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar los soportes para ver si estan dañados o le faltan elementos, si esta correctamente sustentada, oxidada, con signos de corrosion o con el revestimiento dañado</td>
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
                
                <div id="tabs-7">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores de Espuma </h1>
                
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
                    </p>	                   </fieldset>
	                   
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
			                    <td>Limpiar filtro</td>
		|	                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comprobar la concetracion de espuma</td>
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
                
                <h1 class="pageTitle">Sistema de Rociadores de Espuma </h1>
                
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
			                    <td>Accionar Valvulas</td>
		|	                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Lubricar las valvulas</td>
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
