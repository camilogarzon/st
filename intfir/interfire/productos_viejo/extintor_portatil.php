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
                    <li><a href="#tabs-2">Rev. Mensual</a></li>
                </ul>
                
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Extintores Portatiles Contra Incendio</h1>
                
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
                    	<div class="one_fourth"><label for="name">Loca lizaci&oacute;n del extintor</label></div>
                    	<div class="one_fourth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_fourth"><label for="name">Tipo de extintor</label></div>
                        <div class="one_fourth last"><select name="occupation"><option>Seleccione una</option><option value="0">ABC</option><option value="1">BC</option><option value="2">AC</option><option value="3">A</option><option value="4">K</option></select></div>
                    </p>
                    <p>
                    	<div class="one_sixth"><label for="name">Esta el edificio totalmente cubierto con extintores</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Estan los extintores en condicion de funcionamiento</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Se han modificado las ubicaciones</label></div>
                    	<div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    </p>	                   
                    	</fieldset>
	                   
	                   <!-- VALVULA -->
	                   
	                   <fieldset>
	                   		<legend>V&aacute;lvula</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Esta buena la manija de transporte</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Esta buena la manija de operacion</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Existe dioxido o corrocion</label></div>
                    	<div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CILINDRO -->
	                   
	                   <fieldset>
	                   		<legend>Cilindro</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Fecha de corrocion o de retimbrado</label></div>
                    	<div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                    	<div class="one_sixth"><label for="name">Danos mecanicos (abolladuras o abrasion)</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_sixth"><label for="name">Estado de la pintura</label></div>
                        <div class="one_sixth last"><select name="occupation"> <option>Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
                    </p>
                    <p>
                    	<div class="one_sixth"><label for="name">Presencia de reparaciones (soldadura, etc.)</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_sixth"><label for="name">Roscas danadas</label></div>
                        <div class="one_sixth last"><select name="occupation"> <option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- BOQUILLA -->
	                   
	                   <fieldset>
	                   		<legend>Boquilla</legend>
	                <p>
                    	<div class="one_sixth"><label for="name">Boquilla</label></div>
                        <div class="one_sixth last"><select name="occupation"> <option>Seleccione una</option><option value="0">Deforme</option><option value="1">Danada</option><option value="1">Rota</option></select></div>
                    	<div class="one_sixth"><label for="name">Roscas danadas</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                    	<div class="one_sixth"><label for="name">Aberturas bloqueadas</label></div>
                        <div class="one_sixth last"><select name="occupation"> <option>Seleccione una</option><option value="0">Buena</option><option value="1">Mala</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- MANGUERA -->
	                   
	                   <fieldset>
	                   		<legend>Manguera</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Danada (rota, cuarteada, gastada)</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Acoplamiento o junta giratoria danada</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Rosca danada (corrida o gastada)</label></div>
                    	<div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- MMANOMETRO CONTROL DE PRESION -->
	                   
	                   <fieldset>
	                   		<legend>Manometro control de presion</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Aguja atascada o perdida</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Cristal perdido o roto</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Escala de medicion borrosa</label></div>
                    	<div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- MECANISMO DE PUNCION -->
	                   
	                   <fieldset>
	                   		<legend>Mecanismo de puncion</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Vastago corroido o danado</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Vastago atascado o roto</label></div>
                    	<div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- CARRO Y RUEDAS -->
	                   
	                   <fieldset>
	                   		<legend>Carro y ruedas</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Carro corroido, deforme o roto</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Ruedas danadas o deformes</label></div>
                    	<div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ABRAZADERAS -->
	                   
	                   <fieldset>
	                   		<legend>Abrazaderas</legend>
                    <p>
                    	<div class="one_sixth"><label for="name">Corroidas, estropeadas rotas</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Perdida de ajuste</label></div>
                    	<div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
                    	<div class="one_sixth"><label for="name">Viejas (Frajiles, cuarteadas)</label></div>
                    	<div class="one_sixth last"><select name="occupation"><option>Seleccione una</option><option value="0">SI</option><option value="1">NO</option></select></div>
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
                
                <h1 class="pageTitle">Extintores Portatiles</h1>
                
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
	                   
	                   <!-- INFORMACION EXTINTOR -->
	                   
	                   <fieldset>
		                   <legend>Extintor portatil</legend>
		                   
		            <p>
                    	<div class="one_sixth"><label for="name">Situacion del extintor</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Tipo de extintor</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Numero de Serie</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                    </p>
                    <p>
                    	<div class="one_sixth"><label for="name">Numero de indentificacion</label></div>
                        <div class="one_sixth"><input type="text" name="name" value="dato precargado" class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Fecha de compra</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="fecha" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- TABLA MANTENIMIENTO -->
	                   
	                  	<fieldset>
	                   	<legend>Inspeccion, Mantenimiento y Recarga</legend>
                   
				        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="33%" />
			                <col class="head0" width="33%" />
			                <col class="head1" width="33%" />
			            </colgroup>
			            <tr>
			                <td>ID Extintor</td>
			                <td>Mensual (M), Anual (A), Recarga (R)</td>
			                <td>Notas</td>
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
			                    <td>Precargado</td>
			                    <td><select name="occupation"><option>Seleccionar</option><option value="0">Inspeccion Mensual</option><option value="1">Mantenimiento Anual</option><option value="1">Recarga Extintor</option></select></td>
			                    <td><input type="text" name="name" class="sftable" /></td>
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
