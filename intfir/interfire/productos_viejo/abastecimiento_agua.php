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
                    <li><a href="#tabs-2">Ins diaria invierno</a></li>
                    <li><a href="#tabs-3">Ins semanal</a></li>
                    <li><a href="#tabs-4">Ins mensual</a></li>
                    <li><a href="#tabs-5">Ins Trimestral</a></li>
                    <li><a href="#tabs-6">Ins Anual</a></li>
                    <li><a href="#tabs-7">Ins Trimestral</a></li>
                    <li><a href="#tabs-8">Ins Quincenal</a></li>
                    <li><a href="#tabs-9">Prb Mensual Invierno</a></li>
                    <li><a href="#tabs-10">Prb Semestral</a></li>
                    <li><a href="#tabs-11">Mant Anual</a></li>
                    <li><a href="#tabs-12">Prb Anual Caudal</a></li>
                </ul>
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Abastecimiento de Agua</h1>
                
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
	                   <legend>Tanque principal red contra incendio</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Disposicion del tanque</label></div>
                    	<div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Superficie</option><option value="1">Enterrado</option><option value="2">Elevado</option></select></div>
                    	<div class="one_fourth"><label for="name">Tipo de tanque</label></div>
                    	<div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Vertical</option><option value="1">Horizontal</option></select></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Capacidad</label></div>
                    	<div class="one_fourth"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Material fabricacion</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Abastecimiento</label></div>
                    	<div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Manual</option><option value="1">Automatico</option></select></div>
                    	<div class="one_fourth"><label for="name">Numero de salidas</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Fecha instalacion</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Medicion</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Diametro de salidas</label></div>
                    	<div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Uso compartido</label></div>
                    	<div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
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
                
                <h1 class="pageTitle">Sistemas de Abastecimiento de Agua</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                  	<fieldset>
	                   	<legend>Inspecciones diarias durante el invierno</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>El estado del tanque es normal</td>
			                <td>La temperatura del tanque es 40¡F o mas</td>
			                <td>Calefaccion operativa</td>
			                <td>Notas</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td>inspector precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><input type="text" name="email" class="sftable" /></td>
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
                
                <h1 class="pageTitle">Sistemas de Abastecimiento de Agua</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   	<legend>Inspecciones Semanales</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="33%" />
			                <col class="head0" width="33%" />
			                <col class="head1" width="33%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Las valvulas de control estan correctamente dispuestas</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="33%" />
			                    <col class="con0" width="33%" />
			                    <col class="con1" width="33%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td>inspector precargado</td>
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
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n de incendios alternativos al halon</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
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
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Comprobar la presion en el deposito</td>
			                <td>El nivel de agua esta a una altura normal</td>
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
			                    <td>inspector precargado</td>
			                    <td><input type="text" value="PSI" class="sftable" /></td>
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
                
                <div id="tabs-5">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n por Agente Halogenado</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion Trimestral</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			                <col class="head1" width="16%" />
			                <col class="head0" width="16%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>Condiciones exteriores del tanque adeacuadas</td>
			                <td>Sustentacion del tanque es adecuada</td>
			                <td>Medios de acceso al deposito adecuados</td>
			                <td>Area libre de suciedad y sin fugas</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                    <col class="con1" width="16%" />
			                    <col class="con0" width="16%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td>inspector precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
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
                
                <div id="tabs-6">
                
                <h1 class="pageTitle">Sistemas de Abastecimiento de Agua</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
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
			                    <td>La conexion siamesa para el cuerpo de bomberos esta accesible</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La conexion siamesa para el cuerpo de bomberos esta correctamente sustentada</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Existen tapas de la conexion siamesa para el cuerpo de bomberos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las mangueras de la conexion al cuerpo de bomberos estan en buen estado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El dispositivo antigoteo en la conexion para bomberos esta operativa</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El estado general de los depositos de agua es satisfactorio, sin advertirse descascarillado ni fugas en las costuras</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las escaleras en los tanques son estables y estan libres de oxido</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Los tejados en los depositos de abastecimiento de agua son estables y estan libres de oxido</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las abrazaderas oscilantes sobre los depositos de almacenamiento de agua son establ–es y estan libres de oxido</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El estado de la pintura de los depositos es satisfactorio</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Los depositos de agua elevados y pozos estan libres de suciedad</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>En deposito de estructura plastica, la toma para drenaje no tiene fugas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>En depositos de estructura plastica, las paredes no estan desgastadas</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>En depositos de estructura plastica, la proteccion de pintura exterior no presenta oxidacion ni se ha visto afectada por el clima</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>La pintura sobre los tanques de presion es satisfactoria</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El interior de los tanques de presion es satisfactoria</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El interior de los tanques de presion ha sido inspeccionado por un inspector cualificado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>El sistema de calefaccion funciona correctamente (comprobar durante los dos primeros meses de funcionamiento cada temporada)</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Para tanques de madera, los aros y rejillas son satisfactorios</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Las juntas de expansion no muestran signos de tension, oxido o corrosion</td>
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
                
                <div id="tabs-7">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n de incendios alternativos al halon</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   	<legend>Inspeccion Trimestral</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="33%" />
			                <col class="head0" width="33%" />
			                <col class="head1" width="33%" />
			            </colgroup>
			            <tr>
			                <td>Fecha</td>
			                <td>Inspector</td>
			                <td>El deposito de presion no muestra senales de oxido, corrosion, ni desechos</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="33%" />
			                    <col class="con0" width="33%" />
			                    <col class="con1" width="33%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td>inspector precargado</td>
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
                
                <div id="tabs-8">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n de incendios alternativos al halon</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   	<legend>Inspeccion Quincenal</legend>
	                   	
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
			                <td>El interior del deposito no muestra signos de oxido, corrosion ni desechos</td>
			                <td>Examinar todas las valvulas para asegurarse de que estan operativas</td>
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
			                    <td>inspector precargado</td>
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
                
                <div id="tabs-9">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n de incendios alternativos al halon</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   	<legend>Pruebas mensuales durante la temporada invernal</legend>
	                   	
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
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="inspector" class="sftable" /></td>
			                    <td><input type="text" name="email" value="inspector" class="sftable" /></td>
			                    <td><input type="text" name="email" value="inspector" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Las alarmas de temperatura funcionan correctamente</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Los interruptores de limite de temperatura funcionan correctamente</td>
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
                
                <div id="tabs-10">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n de incendios alternativos al halon</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   	<legend>Pruebas semestrales</legend>
	                   	
	                   	<table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="33%" />
			                <col class="head0" width="33%" />
			                <col class="head1" width="33%" />
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
			                    <col class="con1" width="33%" />
			                    <col class="con0" width="33%" />
			                    <col class="con1" width="33%" />
			                </colgroup>
			                <tr>
			                    <td>Fecha</td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                    <td><input type="text" name="email" value="fecha" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspector</td>
			                    <td><input type="text" name="email" value="inspector" class="sftable" /></td>
			                    <td><input type="text" name="email" value="inspector" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Las alarmas de nivel de agua funcionan correctamente</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Drenar los sedimentos del deposito y examinarlo en busca de signos de deterioro del mismo</td>
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
                
                <div id="tabs-11">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n de incendios alternativos al halon</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
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
			                    <td><input type="text" name="email" value="inspector" class="sftable" /></td>
			                </tr>
			                <tr>
			                    <td>Inspeccionar el correcto funcionamiento de la proteccion catodica de los depositos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Valvulas de drenaje de depositos de almacenamiento estacional</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Limpiar las membranas de venteo de los depositos</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Correcto</option><option value="1">Incorrecto</option></select></td>
			                </tr>
			                <tr>
			                    <td>Accionar las valvulas de control para asegurarse que abren y cierran completamente</td>
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
                
                <div id="tabs-12">
                
                <h1 class="pageTitle">Sistemas de Extinci&oacute;n de incendios alternativos al halon</h1>
                
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
                    	<div class="one_fourth">
                    	<label for="name">Situaci&oacute;n</label>
                    	</div>
                    	<div class="three_fourth last">
                        <input type="text" name="name"  class="sftable" />
                    	</div>
                    </p>
	                   </fieldset>
	                   
	                   <fieldset>
	                   	<legend>Realizar un prueba de drenaje a traves de la salida de 2"</legend>
	                   	
	                   	<p>
	                    	<div class="one_fourth"><label for="name">Presion estatica</label></div>
	                        <div class="one_fourth"><input type="text" name="name" value="PSI" class="sftable" /></div>
	                        <div class="one_fourth"><label for="email">Presion caudal maximo</label></div>
	                        <div class="one_fourth last"><input type="text" name="email" value="PSI" class="sftable" /></div>
                        </p>
	                   	<p>Depositos a nivel del terreno susbterraneos: La prueba anual se realizara durante las pruebas de la bomba a caudal maximo.</p>
				       
				       </fieldset>
	                   
	                   <fieldset>
	                   	<legend>Sistemas de distribucion del agua</legend>
	                   	<p>La prueba anual se realizara durante la prueba anual de hidrantes. Para cada prueba, tomar los siguientes datos:</p>
	                   	
	                   	<p>
	                    	<div class="one_sixth"><label for="name">Localizacion del hidrante residual</label></div>
	                        <div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
	                        <div class="one_sixth"><label for="email">Localizacion del hidrante abierto</label></div>
	                        <div class="one_sixth"><input type="text" name="email" class="sftable" /></div>
	                        <div class="one_sixth"><label for="email">Presion estatica (hidrante residual)</label></div>
	                        <div class="one_sixth last"><input type="text" name="email" value="PSI" class="sftable" /></div>
                        </p>
	                   	
	                   	<p>
	                    	<div class="one_sixth"><label for="name">Presion residual</label></div>
	                        <div class="one_sixth"><input type="text" name="name" value="PSI" class="sftable" /></div>
	                        <div class="one_sixth"><label for="email">Presion en el Pitot</label></div>
	                        <div class="one_sixth"><input type="text" name="email" value="PSI" class="sftable" /></div>
	                        <div class="one_sixth"><label for="email">Tama–o boquilla (hidrante abierto)</label></div>
	                        <div class="one_sixth last"><input type="text" name="email" value="Pulgadas" class="sftable" /></div>
                        </p>
	                   	
	                   	<p>
	                    	<div class="one_sixth"><label for="name">Coeficiente de la boquilla (hidrante abierto)</label></div>
	                        <div class="one_sixth"><input type="text" name="name" class="sftable" /></div>
	                        <div class="one_sixth"><label for="email">Caudal disponible</label></div>
	                        <div class="one_sixth last"><input type="text" name="email" value="PSI" class="sftable" /></div>
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
