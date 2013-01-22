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
            <li class="current"><a href="articulos.php" class="articulos"><span>Productos</span></a></li>
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
                    <li><a href="#tabs-5">Rev. Semestral</a></li>
                    <li><a href="#tabs-6">Rev. Anual</a></li>
                    <li><a href="#tabs-7">Rev. Quinquenal</a></li>
                    <li><a href="#tabs-8">Rev. Trianual</a></li>
                    <li><a href="#tabs-9">5, 20 y 50 a�os</a></li>
                    <li><a href="#tabs-10">Tuberia area</a></li>
                    <li><a href="#tabs-11">Tuberia Subterranea</a></li>
                </ul>
                
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Denominaci&oacute;n General</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Edificio</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Puesto Control</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Sistema de Rociadores</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> H&uacute;medo&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Seco &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Diluvio &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="3" /> Preacci&oacute;n
                        </div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Marca Puesto Control</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Esta el edificio totalmente cubierto por rociadores?</label></div>
                        <div class="one_fourth"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                        <div class="one_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                        <div class="one_half"><label for="name">Esta todo el sistema de rociadores en condiciones de funcionamiento?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
                    <p>
                        <div class="one_half"><label for="name">Se ha modificado el sistema de rociadores desde la &uacute;ltima inspecci&oacute;n?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- VALVULA -->
	                   
	                   <fieldset>
	                   		<legend>V&aacute;vula</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">C&oacute;mo est&aacute;n supervisadas las v&aacute;lvulas?</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Con asiento&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> Cerradas &nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Interruptor antimanipulaci&oacute;n
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Est&aacute;n las v&aacute;lvulas identificadas con alguna se&ntilde;alizaci&oacute;n?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- abastecimiento de agua -->
	                   
	                   <fieldset>
	                   		<legend>Abastecimiento de agua</legend>
                    <p>
                    	<div class="one_half"><label for="name">Cu&aacute;ndo fue la &uacute;ltima vez que se realiz&oacute; una prueba de abastecimiento?</label></div>
                        <div class="one_half last">
                        <input type="text" name="name" value="fecha" class="sftable" />
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Est&aacute;n los tanques o los dep&oacute;sitos de presi&oacute;n en buen estado?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOMBAS -->
	                   
	                   <fieldset>
	                   		<legend>Bombas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">La bomba contra incendios es</label></div>
                        <div class="three_fourth last">
                        <input type="radio" name="language[]" value="0" /> Diesel&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="1" /> El&eacute;ctrica&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="2" /> Gasolina&nbsp;&nbsp;&nbsp;&nbsp; 
                        <input type="radio" name="language[]" value="3" /> Ninguna de estas
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Cu&aacute;ndo se realiz&oacute; una inspecci&oacute;n a la bomba por &uacute;ltima vez?</label></div>
                        <div class="one_half last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">La bomba est&aacute; en buenas condiciones?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CONEXION CUERPO BOMBEROS -->
	                   
	                   <fieldset>
	                   		<legend>Conexi&oacute;n con el cuerpo de bomberos</legend>
                    <p>
                    	<div class="one_half"><label for="name">Localizaci&oacute;n?</label></div>
                        <div class="one_half last">
                        <input type="text" name="name"  class="sftable" />
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Existen se&ntilde;ales indentificativas?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMAS HUMEDOS -->
	                   
	                   <fieldset>
	                   		<legend>Sistemas h&uacute;medos</legend>
                    <p>
                    	<div class="one_half"><label for="name">El edificio esta calefactado adecuadamente?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                          <option value="2">N/A</option>
                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">El sistema esta calculado hidr&aacute;ulicamente?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Hay se&ntilde;alizada alguna informaci&oacute;n sobre el c&aacute;lculo hidr&aacute;ulico?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                        </select>
                        </div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- SISTEMAS SECOS -->
	                   
	                   <fieldset>
	                   		<legend>Sistemas secos</legend>
                    <p>
                    	<div class="one_half"><label for="name">La v&aacute;lvula del puesto de control est&aacute; en un local calefactado?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                          <option value="2">N/A</option>
                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Tiene el local calefactado un local por baja temperatura?</label></div>
                        <div class="one_half last"><select name="occupation">
                          <option>Seleccione una</option>
                          <option value="0">Si</option>
                          <option value="1">No</option>
                          <option value="2">N/A</option>
                        </select>
                        </div>
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
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
			                <col class="head1" width="17%" />
			                <col class="head0" width="17%" />
			                <col class="head1" width="11%" />
			                <col class="head0" width="11%" />
			                <col class="head1" width="11%" />
			                <col class="head0" width="11%" />
			                <col class="head1" width="11%" />
			                <col class="head0" width="11%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Valvulas precintadas</td>
			                <td>Rociadores OK</td>
			                <td>Valvula de alarma OK</td>
			                <td>Valvula de tuberia seca</td>
			                <td>Valvula de preaccion</td>
			                <td>Presion del agua</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="17%" />
			                    <col class="con0" width="17%" />
			                    <col class="con1" width="11%" />
			                    <col class="con0" width="11%" />
			                    <col class="con1" width="11%" />
			                    <col class="con0" width="11%" />
			                    <col class="con1" width="11%" />
			                    <col class="con0" width="11%" />
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
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                     <td><input type="text" name="email"  class="sftablehalf" /><input type="text" name="email"  class="sftablehalf" /></td>
                                  <td><input type="text" name="email"  class="sftablehalf" /><input type="text" name="email"  class="sftablehalf" /></td>
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
                           
                <div id="tabs-3">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
			                <col class="head1" width="18%" />
			                <col class="head0" width="18%" />
			                <col class="head1" width="12%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
			                <col class="head0" width="12%" />
			                <col class="head1" width="12%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Valvulas</td>
			                <td>Valvulas alarma</td>
			                <td>Rociadores de Repuesto</td>
			                <td>Dispositivos Alarma</td>
			                <td>Presion agua</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="18%" />
			                    <col class="con0" width="18%" />
			                    <col class="con1" width="12%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
			                    <col class="con0" width="12%" />
			                    <col class="con1" width="12%" />
			                </colgroup>
			                <tr>
			                    <td>Precargado</td>
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Cerradas</option>
			                    	<option value="1">Cerrada de nuevo</option>
			                    	<option value="2">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Abiertas</option>
			                    	<option value="1">Cerradas</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccione una</option>
			                    	<option value="0">Si</option>
			                    	<option value="1">No</option>
			                    	</select></td>
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
                
                <div id="tabs-4">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
	                   	<legend>Inspeccion Trimetral</legend>
	                   	
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
			                    <td>Prueba de Drenaje</td>
			                    <td><input type="text" name="email" class="sftable" /><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><input type="text" name="email" class="sftable" /><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><input type="text" name="email" class="sftable" /><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><input type="text" name="email" class="sftable" /><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Conexiones para el cuerpo de bomberos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Alarma de flujo del sistema de tuberia mojada</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Nivel de agua de cebado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Alarma de baja presion de aire en sistemas secos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Alarma de flujo del sistema seco</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Dispositivos de apertura rapida</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Alarma de flujo en sistema de preaccion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Alarma de flujo en sistema de diluvio</td>
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
			                <tr>
			                    <td>Placa de caracteristicas hidraulicas</td>
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
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Valvulas de tiempo frio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Abierto</option><option value="1">Cerrado</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Abierto</option><option value="1">Cerrado</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de tuberia seca</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de diluvio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de preaccion</td>
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
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
			                    <td>Estado General</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Congelacion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Prueba anticongelante</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Mantenimiento de las valvulas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Limpieza de filtros</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistemas de tuberia seca</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar internamente valvula de sistema seco</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Probar el mecanismo de mantenimiento de la presion del aire</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar la alarma por baja temperatura *si existe*</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de rociadores de preaccion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar internamente la valvula de preaccion</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Probar el mecanismo de mantenimiento de la presion del aire *si existe* en el momento de la prueba de disparo</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar la alarma por baja temperatura en la valvula</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Sistema de rociadores de diluvio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Registrar el tiempo transcurrido desde la activacion del detector hasta que comienza la descarga de agua</td>
			                    <td><input type="text" name="email" value="segundos" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Comprobar que la forma de descarga del agua es adecuada</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Registrar la presion del agua en la salida del rociador mas desfavorable</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Registrar la presion del agua en la valvula de diluvio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar internamente la valvula de diluvio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar probar la alarma por baja temperatura *si existe*</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Rociadores en equipos de cocina</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
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
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
	                   	<legend>Inspeccion quinquenal</legend>
	                   	
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
			                    <td>Inspeccion interna de las valvulas de alarma</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
			                </tr>
			                <tr>
			                    <td>Inspeccion interna de las valvulas de pruebas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option><option value="2">N/A</option></select></td>
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
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
	                   	<legend>Inspeccion trianual</legend>
	                   	
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
			                    <td>Prueba de disparo a caudal maximo de la valvula del sistema seco</td>
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
                
                <div id="tabs-9">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
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
	                   
	                   <!-- TABLA 5 A�OS-->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion cada 5 a&ntilde;os</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			            </colgroup>
			            <tr>
			                <td>A&ntilde;o</td>
			                <td>Inspector</td>
			                <td>Investigar obstrucciones</td>
			                <td>Calibrar manometros</td>
			                <td>Probar rociadores alta temperatura</td>
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
			                    <td>5</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>10</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>15</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>20</td>
			                    <td><input type="text" name="email" value="precargado" class="sftable" /></td>
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
                
                <div id="tabs-10">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>IMaterial del instalador y certificado de prueba para tuberias aereas</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- PLANOS -->
	                   
	                   <fieldset>
	                   		<legend>Planos</legend>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Aceptados por</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Domicilio</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Esta la instalacion de acuerdo con los planos recibidos</label>
                    	</div>
                    	<div class="three_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Esta correcto el equipo utilizado</label>
                    	</div>
                    	<div class="three_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    	</fieldset>
	                   
	                   <!-- INSTRUCCIONES -->
	                   
	                   <fieldset>
	                   		<legend>Instrucciones</legend>
                    <p>
                    	<div class="one_half">
                    	<label for="name">Se ha instruido a la persona a cargo de las instalaciones contra incendios en cuestiones como valvulas de control, cuidados y mantenimiento de estos equipos</label>
                    	</div>
                    	<div class="one_half last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_half">
                    	<label for="name">Esta la instalacion de acuerdo con los planos recibidos</label>
                    	</div>
                    	<div class="one_half last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_half">
                    	<label for="name">Esta correcto el equipo utilizado</label>
                    	</div>
                    	<div class="one_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    	</fieldset>
	                   
	                   <!-- LOCALIZACION SISTEMA -->
	                   
	                   <fieldset>
	                   		<legend>Localizacion del sistema</legend>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Edificio de suministros</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    	</fieldset>
	                   
	                   <!-- ROCIADORES -->
	                   
	                   <fieldset>
	                   		<legend>Rociadores</legend>
						<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="17%" />
			                <col class="head0" width="17%" />
			                <col class="head1" width="17%" />
			                <col class="head0" width="16%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			            </colgroup>
			            <tr>
			                <td>Marca</td>
			                <td>Modelo</td>
			                <td>Ano</td>
			                <td>Tamano orificio</td>
			                <td>Cantidad</td>
			                <td>Temperatura</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="17%" />
			                    <col class="con0" width="17%" />
			                    <col class="con1" width="17%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                </colgroup>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			            </table>
			            </fieldset>
	                   
	                   <!-- tuberias y accesorios -->
	                   
	                   <fieldset>
	                   		<legend>Tuberias y accesorios</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tuberia conforme a la norma</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Accesorios conformes a la norma</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- VALVULA DE ALARMA O INDICADOR DE FLUJO -->
	                   
	                   <fieldset>
	                   		<legend>Valvula de alarma o indicador de flujo</legend>
						<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="60%" />
			                <col class="head0" width="40%" />
			            </colgroup>
			            <tr>
			                <td>Dispositivo de alarma</td>
			                <td>Maximo tiempo de funcionamiento en tuberia de prueba</td>
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
			                    <td>Tipo</td>
			                    <td>Marca</td>
			                    <td>Modelo</td>
			                    <td>Min.</td>
			                    <td>Sec.</td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			            </table>
			            </fieldset>
			            
	                   
	                   <!-- PRUEBA DE FUNCIONAMIENTO DEL SISTEMA SECO-->
	                   
	                   <fieldset>
	                   		<legend>Prueba de funcionamiento del sistema seco</legend>
						<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="50%" />
			            </colgroup>
			            <tr>
			                <td>Valvula de tuberia seca</td>
			                <td>Dispositivo de apertura rapida</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="17%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                </colgroup>
			                <tr>
			                    <td>Marca</td>
			                    <td>Modelo</td>
			                    <td>No. Serie</td>
			                    <td>Marca</td>
			                    <td>Modelo</td>
			                    <td>No. Serie</td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                </tr>
			            </table>
			            
			            <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="50%" />
			                <col class="head0" width="50%" />
			            </colgroup>
			            <tr>
			                <td>Valvula de tuberia seca</td>
			                <td>Dispositivo de apertura rapida</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="14%" />
			                    <col class="con0" width="14%" />
			                    <col class="con1" width="14%" />
			                    <col class="con0" width="14%" />
			                    <col class="con1" width="14%" />
			                    <col class="con0" width="14%" />
			                    <col class="con1" width="14%" />
			                </colgroup>
			                <tr>
			                    <td></td>
			                    <td>Tiempo de disparo a traves de la tuberia de prueba</td>
			                    <td>Presion del agua</td>
			                    <td>Presion del aire</td>
			                    <td>Presion del aire en el momento del disparo</td>
			                    <td>Tiempo de rretraso hasta que el agua sale por la toma de pruebas</td>
			                    <td>Funcionamiento correcto de la alarma</td>
			                </tr>
			                <tr>
			                    <td></td>
			                    <td>Min.</td>
			                    <td>Sec.</td>
			                    <td>PSI Bar</td>
			                    <td>PSI Bar</td>
			                    <td>Sec.</td>
			                    <td>Seleccionar</td>
			                </tr>
			                <tr>
			                    <td>Sin DAR</td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			                <tr>
			                    <td>Con DAR</td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			            </table>
			            </fieldset>
	                   
	                   <!-- valvulas de diluvio y preaccion -->
	                   
	                   <fieldset>
	                   		<legend>Valvulas de diluvio y preaccion</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Funcionamiento</label></div>
                    	<div class="one_fourth"><select name="occupation"><option>Seleccionar</option><option value="0">Neumatico</option><option value="1">Electrico</option><option value="2">Hidraulico</option></select></div>
                    	<div class="one_fourth"><label for="name">Tuberia supervisada</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Deteccion supervisada</label></div>
                    	<div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_fourth"><label for="name">Hay alguna toma para prueba accesible en cada circuito</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <br />
                    <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			                <col class="head0" width="20%" />
			                <col class="head1" width="20%" />
			            </colgroup>
			            <tr>
			                <td>Marca</td>
			                <td>Modelo</td>
			                <td>Cada circuito tiene supervision de perdida o fallo de alarma</td>
			                <td>Cada circuito activa las apertura de valvulas</td>
			                <td>Tiempo maximo para el accionamientodel mecanismo de apertura</td>
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
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><input type="text" name="email"  class="sftable" /></td>
			                    <td><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></td>
			                    <td><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></td>
			                </tr>
			            </table>
	                   </fieldset>
	                   
	                   <!-- pruebas -->
	                   
	                   <fieldset>
	                   		<legend>Pruebas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Toda la tuberia se ha probado hidrostaticamente a</label></div>
                    	<div class="one_fourth"><input type="text" value="PSI bar" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">durante </label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="horas" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Se ha probado neumaticamente la tuberia seca?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_fourth"><label for="name">El equipo trabaja satisfactoriamente</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Prueba de drenaje - Lectura del manometro localizado cerca de la tuberia de pruebas del abastecimiento de agua. Presion estatica:</label></div>
                    	<div class="one_fourth last"><input type="text" value="PSI bar" name="name"  class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Prueba de drenaje - Presion residual con la valvula de pruebas abierta completamente:</label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="PSI bar" class="sftable" /></div>
                    </p>
                    <p>La tuberia subterranea y las conexiones a las tuberias ascendentes del sistema se limpiaron antes de que se hiciera la conexion al sistema de rociadores</p>
                    <p>
                    	<div class="one_fourth"><label for="name">Verificado con copia del modelo U No. 85B</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option><option value="2">Otra</option></select></div>
                    	<div class="one_fourth"><label for="name">Limpiado por el instalador de las tuberias subterraneas</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option><option value="2">Otra</option></select></div>
                    </p>
                    <br />
                    <p>NOTAS</p>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
	                   
	                   <!-- JUNTAS PARA PRUEBAS -->
	                   
	                   <fieldset>
	                   		<legend>Juntas para pruebas</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Cantidad usada</label></div>
                    	<div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Localizacion</label></div>
                        <div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Cantidad respuesta</label></div>
                        <div class="one_sixth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- soldadura -->
	                   
	                   <fieldset>
	                   		<legend>Soldadura</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Existen tuberias soldadas</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>Si es asi</p>
                    <p>
                    	<div class="three_fourth"><label for="name">Certifica como instalador que los procedimientos de soldadura cumplen los requisitos de al menos la AWS D10.9, Nivel AR-3?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="three_fourth"><label for="name">Certifica que la soldadura se realizo por los soldadores cualificados de acuerdo a los requisitos de al menos la AWS D10.9, Nivel AR-3?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="three_fourth"><label for="name">Certifica que la soldadura se llevo a cabo de acuerdo a un procedimiento de control documentado para asegurarse que todos los discos se han recuperado, que las aberturas en las tuberias se han pulido, que toda la escoria y demas residuos se han retirado, y que los diametros internos de la tuberia no se han penetrado?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- placa y caracteristicas hidraulicas -->
	                   
	                   <fieldset>
	                   		<legend>Placa y caracteristicas hidraulicas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Se ha suministrado placa</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>NOTAS</p>
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Observaciones</legend>
                    <p>
                    	<div class="one_third"><label for="name">Dia que se dejo en servicio con todas las valvulas de control abiertas</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
                    <br />
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
	                   
	                   <!-- INSTLADOR -->
	                   
	                   <fieldset>
	                   		<legend>FIRMAS</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Instalador de los rociadores</label></div>
                        <div class="three_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                      
                        <input type="submit" name="button" id="button" value="Registrar" />
                    </div>  
                     
                    </form>
                </div>
                
                <div id="tabs-11">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistema de Rociadores Autom&aacute;ticos</h1>
                
                   <form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
		                   <legend>IMaterial del instalador y certificado de prueba para tuberias subterraneas</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">A&ntilde;o</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Sistema</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Actividad</label></div>
                        <div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">Instalaci&oacute;n</option><option value="1">Dise&ntilde;o</option><option value="2">Auditor&iacute;a</option><option value="3">Interventor&iacute;a</option><option value="4">IPM</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- PLANOS -->
	                   
	                   <fieldset>
	                   		<legend>Planos</legend>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Aceptados por</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Domicilio</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Esta la instalacion de acuerdo con los planos recibidos</label>
                    	</div>
                    	<div class="three_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Esta correcto el equipo utilizado</label>
                    	</div>
                    	<div class="three_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    	</fieldset>
	                   
	                   <!-- INSTRUCCIONES -->
	                   
	                   <fieldset>
	                   		<legend>Instrucciones</legend>
                    <p>
                    	<div class="one_half">
                    	<label for="name">Se ha instruido a la persona a cargo de las instalaciones contra incendios en cuestiones como valvulas de control, cuidados y mantenimiento de estos equipos</label>
                    	</div>
                    	<div class="one_half last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_half">
                    	<label for="name">Esta la instalacion de acuerdo con los planos recibidos</label>
                    	</div>
                    	<div class="one_half last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_half">
                    	<label for="name">Esta correcto el equipo utilizado</label>
                    	</div>
                    	<div class="one_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    	</fieldset>
	                   
	                   <!-- LOCALIZACION SISTEMA -->
	                   
	                   <fieldset>
	                   		<legend>Localizacion del sistema</legend>
                    <p>
                    	<div class="one_fourth">
                    	<label for="name">Edificio de suministros</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
                    	</fieldset>
	                   
	                   <!-- tuberias y accesorios -->
	                   
	                   <fieldset>
	                   		<legend>Tuberias y accesorios</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Tuberia conforme a la norma</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Accesorios conformes a la norma</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Las juntas con anclajes estan conformes a la norma</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   	                   
	                   <!-- Pruebas de limpieza -->
	                   
	                   <fieldset>
	                   		<legend>Pruebas de limpieza</legend>
                    <p>
                    	<div class="one_half"><label for="name">Las tuberias enterradas nuevas se han limpiado de acuerdo a la norma</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Por la empresa</label></div>
                        <div class="three_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Como se obtuvo el caudal?</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Red publica</option><option value="1">Tanque reserva</option><option value="2">Bomba incendios</option></select></div>
                        <div class="one_fourth"><label for="name">Que tipo de abertura?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Brida y grifo</option><option value="1">Tuberia abierta</option></select></div>
                    </p>
	                   </fieldset>
	                   	                   
	                   <!-- Prueba hidrostatica -->
	                   
	                   <fieldset>
	                   		<legend>Pruebas hidrostatica</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Toda la tuberia se ha probado hidrostaticamente a</label></div>
                    	<div class="one_fourth"><input type="text" value="PSI bar" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">durante </label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="horas" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Se han incluido las juntas?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   	                   
	                   <!-- Prueba de fugas -->
	                   
	                   <fieldset>
	                   		<legend>Pruebas de fugas</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Cantidad de agua medida en las fugas</label></div>
                    	<div class="one_fourth"><input type="text" value="gals" name="name" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">durante </label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="horas" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Fuga adminisble:</label></div>
                    	<div class="one_fourth"><input type="text" value="gals" name="name" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">durante </label></div>
                        <div class="one_fourth last"><input type="text" name="name" value="horas" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   	                   
	                   <!-- hidrantes -->
	                   
	                   <fieldset>
	                   		<legend>Hidrantes</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Numero instalado</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Tipo y marca</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Todas funcionan correctamente?</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- VALVULAS DE CONTROL -->
	                   
	                   <fieldset>
	                   		<legend>Valvulas de control</legend>
                    <p>
                    	<div class="one_half"><label for="name">Las valvulas de control se dejan en posicion completamente abierta?</label></div>
                    	<div class="one_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
                    <p>
                    	<div class="one_half"><label for="name">Son las manguera y accesorios para acoplamiento intercambiables con los que utiliza el cuerpo de bomberos que va a responder la alarma?</label></div>
                    	<div class="one_fourth last"><select name="occupation"><option>Seleccionar</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset>
	                   		<legend>Observaciones</legend>
                    <p>
                    	<div class="one_third"><label for="name">Dia que se dejo en servicio con todas las valvulas de control abiertas</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
                    <br />
                    <p>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
                    </p>
	                   </fieldset>
	                   
	                   <!-- INSTALADOR -->
	                   
	                   <fieldset>
	                   		<legend>FIRMAS</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Instalador de los rociadores</label></div>
                        <div class="three_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                      
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
