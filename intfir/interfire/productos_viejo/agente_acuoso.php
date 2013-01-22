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
                    <li><a href="#tabs-3">Mant. Semestral</a></li>
                    <li><a href="#tabs-4">Pruebas</a></li>
                </ul>
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n por Agente Acuoso</h1>
                
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
	                   
	                   <fieldset><legend>General</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Ubicaci&oacute;n del Sistema</label></div>
                    	<div class="one_fourth "> <input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Fabricante del sistema</label></div>
                    	<div class="one_fourth last"><input type="text" name="name"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Fecha de instalaci&oacute;n</label></div>
                    	<div class="one_fourth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Contrato de mantenimiento</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TIPO DE AGENTE EXTINTOR -->
	                   
	                   <fieldset><legend>Tipo de angente extintor</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tipo de agente extintor</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Bicarbonato de portasio&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Acetato potasico &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Combinacion carbonato de potasio / acetato de potasio 
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CILINDROS DE AGENTE -->
	                   
	                   <fieldset><legend>Cilindros de agente extintor acuoso</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Presion normal</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /> psi (bar)</div>
                    	<div class="one_fourth"><label for="name">Presion minima segun fabricante</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /> psi (bar)</div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Peso normal</label></div>
                        <div class="one_fourth"><input type="text" name="name" class="sftable" /> lb (kg)</div>
                    	<div class="one_fourth"><label for="name">Peso minimo segun fabricante</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /> lb (kg)</div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- EQUIPO PROTEGIDO -->
	                   
	                   <fieldset><legend>Equipo protegido</legend>
	                <p>
                    	<div class="one_fourth"><label for="name">Equipo protegido</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Freidoras&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Parrillas altas&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Planchas &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="3" /> Quemadores &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="4" /> Parrillas &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="5" /> Conductos &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="6" /> Otros
                        </div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Otros</label></div>
                        <div class="three_fourth last">
                        <input type="text" name="name" class="sftable" />
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- cartucho propelente de gas -->
	                   
	                   <fieldset><legend>cartucho propelente de gas</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Se dispone cartucho propelente de gas?</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_sixth"><label for="name">(En caso afirmativo) Peso normal (CO2)</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /> lb (kg)</div>
                    	<div class="one_sixth"><label for="name">Presion normal (Nitrogeno)</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /> psi (bar)</div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMA DE ALARMA-->
	                   
	                   <fieldset><legend>SISTEMA DE ALARMA</legend>
                    <p>
                    	<div class="one_half"><label for="name">Esta conectado a un sistema de alarma?</label></div>
                        <div class="one_half last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SCORTE AUTOMATICO-->
	                   
	                   <fieldset><legend>Corte automatico</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Corte automatico del equipo de cocina</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_fourth"><label for="name">En caso afirmativo</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Gas</option><option value="1">Electrico</option> </select></div>
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
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n por Agente Acuoso</h1>
                
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
			                    <td>Tapas de boquilla colocadas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El sistema de extincion esta correctamente situado sobre el sistema a proteger</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Los componentes de sistema no presentan daños evidentes</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>No se ha añadido o modificado ningun equipo de cocina</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las boquillas estan orientadas sobre la superficie que protegen</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Los disparadores manuales no estan obstruidos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Los indicadores antimanipulacion y los precintos estan intactos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La etiqueta o certificado de mantenimieto esta en su lugar</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La presion indicada en el manometro es correcta</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
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
                
                <div id="tabs-3">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n por Agente Acuoso</h1>
                
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
			                    <td>Registrar las presion en el cilindro de agente extintor:)</td>
			                    <td><input type="text" name="email"  class="sftablehalf" /><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><input type="text" name="email"  class="sftablehalf" /><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>- Cartucho de gas propelente (si se trata del tipo presurizado) presion del nitrogeno en psi (bar)</td>
			                    <td><input type="text" name="email"  class="sftablehalf" /><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><input type="text" name="email"  class="sftablehalf" /><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>- Peso de dioxido de carbono (libras)</td>
			                    <td><input type="text" name="email"  class="sftablehalf" /><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><input type="text" name="email"  class="sftablehalf" /><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Comprobar componentes no dañandos: Detectores o eslabones fusibles</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Cilindros de gas propelente</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Contenedores de agente extintor</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de disparo</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Tuberias</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Boquillas </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Alarmas </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Equipo auxiliar </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Reposicion de componentes dañados o prueba hidrostatica </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                <tr>
			                    <td>Se probo el sistema de tuberias para ver si estaba obstruido </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>el sistema de tuberias no esta obstruido </td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                    <td>Sustitucion del eslabon fusible (Anualmente)</td>
			                    <td>N/A</td>
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
                
                <div id="tabs-4">
                
                <!-- Pruebas -->
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n por Agente Acuoso</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset><legend>Informaci&oacute;n General</legend>
		                   
		             <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- prueba hidrostatica -->
	                   
	                   <fieldset> <legend>prueba de funcionamiento</legend>
                    
                    <p>
                    	<div class="one_half"><label for="name">Fecha de la ultima prueba hidrostatica(Debe realizarse cada 12 años)</label></div>
                    	<div class="one_half last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
	                   </fieldset>
                       
                        <!-- prueba de funcionamiento (Semestral) -->
	                   
	                   <fieldset> <legend>fecha de la prueba de funcionamiento (Smestral)</legend>
                    
                    <p>
                    	<div class="one_sixth"><label for="name">fecha de la prueba de funcionamiento (Smestral)</label></div>
                    	<div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Activacion manual</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Satisfactorio</option><option value="1">No Satisfactorio</option></select></div>
                        <div class="one_sixth"><label for="name">Eslabon fusible</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Satisfactorio</option><option value="1">No Satisfactorio</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- Conexion con el sistema de alarma de incendios -->
	                   
	                   <fieldset><legend>Conexion con el sistema de alarma de incendios</legend>
                     <p>
                    	
                    	<div class="one_sixth"><label for="name">Conexion con el sistema de alarma de incendios</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No </option></select></div>
                        <div class="one_sixth"><label for="name">Resultados</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Satisfactorio</option><option value="1">No Satisfactorio</option></select></div>
                    </p>
	                   </fieldset>
                       
                       <!-- Conexion para el corte de energia del equipo de cocina -->
	                   
	                   <fieldset><legend>Conexion para el corte de energia del equipo de cocina</legend>
                     <p>
                    	
                    	<div class="one_sixth"><label for="name">Conexion para el corte de energia del equipo de cocina</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No </option></select></div>
                        <div class="one_sixth"><label for="name">Resultados</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Satisfactorio</option><option value="1">No Satisfactorio</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- Sustitucion del eslabon fusible (Anual) -->
	                   
	                   <fieldset> <legend>Sustitucion del eslabon fusible (Anual)</legend>
                    <p>
                    	
                    	<div class="one_half"><label for="name">Sustitucion del eslabon fusible (Anual)</label></div>
                        <div class="one_half last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
                       
                       <!-- Conexion con el sistema de extraccion de gases  -->
	                   
	                   <fieldset> <legend>Conexion con el sistema de extraccion de gases</legend>
                    <p>
                    	
                    	<div class="one_sixth"><label for="name">Conexion con el sistema de extraccion de gases</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No </option></select></div>
                        <div class="one_sixth"><label for="name">Resultados</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Satisfactorio</option><option value="1">No Satisfactorio</option></select></div>
                    </p>
	                   </fieldset>
                       
                       <!-- Extractor para vapores de aceite -->
	                   
	                   <fieldset> <legend>Extractor para vapores de aceite</legend>
                    <p>
                    	
                    	<div class="one_half"><label for="name">Extractor para vapores de aceite</label></div>
                        <div class="one_half last"><select name="occupation"><option>Seleccione una</option><option value="0">Continua en funcionamiento</option><option value="1">Se detiene</option></select></div>
                    </p>
	                   </fieldset>
                       
                       <!-- Conexion para desconectar lo aparatos electricos  -->
	                   
	                   <fieldset> <legend>Conexion para desconectar lo aparatos electricos </legend>
                    <p>
                    	
                    	<div class="one_sixth"><label for="name">Conexion para desconectar lo aparatos electricos </label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No </option></select></div>
                        <div class="one_sixth"><label for="name">Resultados</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Satisfactorio</option><option value="1">No Satisfactorio</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                  
	                   <!--Pruebas hidrostaticas a realizar-->
	                   
	                   <fieldset><legend>Pruebas hidrostaticas a realizar</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">cilindros de agente extintor acuoso</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_sixth"><label for="name">Cilindros de presion auxiliar</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_sixth"><label for="name">Manguitos</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
	                   </fieldset>
	                   
	                   
	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset><legend>Notas</legend>
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
