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
                    <li><a href="#tabs-2">Rev y Mant Trimestral</a></li>
                    <li><a href="#tabs-3">Mant. Semestral</a></li>
                </ul>
                <div id="tabs-1">
                
                <!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES --><!-- INICIO REGISTRO ROCIADORES -->
                
                <h1 class="pageTitle">Sistemas de Puertas Cortafuego</h1>
                
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
	                   		<legend>Puertas Cortafuego</legend>
                    <p>
                    	<div class="one_fourth"><label for="name">Clasificacion en horas</label></div>
                        <div class="one_fourth"><input type="text" name="name" value="numerador" class="sftable" /></div>
                        <div class="one_fourth"><label for="name">Dispositivo de cierre</label></div>
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
                    	<div class="one_fourth"><label for="name">Senalizacion adecuada</label></div>
                        <div class="one_fourth last">
	                        <select name="occupation">
	                          <option>Seleccione una</option>
	                          <option value="0">Si</option>
	                          <option value="1">No</option>
	                        </select>
                        </div>
                    </p>
                    <p>
                    	<div class="one_fourth"><label for="name">Aprobado UL/FM</label></div>
                        <div class="one_fourth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                        <div class="one_fourth"><label for="name">Tipo de cerramiento</label></div>
                        <div class="one_fourth last"><input type="text" name="name" class="sftable" /></div>
                    </p>
	                   </fieldset>
	                   
	                   <!-- ultimo mantenimiento -->
	                   
	                   <fieldset><legend>mantenimiento</legend
                    ><p>
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
                
                <h1 class="pageTitle">Sistemas de Puertas Cortafuego</h1>
                
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
	                   	<legend>Inspeccion y Mantenimiento Trimestral</legend>
                        
                        <p>1. Comprobar si hay dañon fisicos en la puerta y ver que el panel de virado (si existe) esta correcto</p>
                        <p>2. Comprobar que funcionan los cierrapuertas</p>
                        <p>3. Comprobar que funcionan los pestillos</p>
                        <p>4. Comprobar que funciona el coordinador (si existe)</p>
                        <p>5. Comprobar que los herrajes estan seguros</p>
                        <p> 6. Comprobar que no exista corrosion en puertas Kalamein</p>
                        <p> 7. Comprobar cables y cadenas de las puertas deslizantes para asegurar que estan en perfecto estado y funcionan adecuadamente</p>
                        <p>8. Comprobar que pintura u otros contaminantes en cables, cadenas, enrrolladores, fusibles, y otras partes moviles no puedan afectar a su funcionamiento. Reemplazar los eslabones fusibles que se hayan pintado</p>
                        <p>9. Engrasar herrajes en puertas giratorias, enrrollables y deslizantes</p>
                        <p>10. Comprobar que las puertas homologadas no han sido modificadas indebidamente</p>
                        <p>11. Limpiar el area circundante de elementos que puedan interferir u obstruir el funcionamiento de la puerta</p>
                        <p>12. Comprobar que las puertas deslizantes se mueven con facilidad y cierran completamente</p>
                        
                        
                        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="10%" />
			                <col class="head0" width="6%" />
			                <col class="head1" width="6%" />
			                <col class="head0" width="6%" />
			                <col class="head1" width="6%" />
                            <col class="head0" width="6%" />
			                <col class="head1" width="6%" />
			                <col class="head0" width="6%" />
                            <col class="head0" width="6%" />
			                <col class="head1" width="6%" />
			                <col class="head0" width="6%" />
                            <col class="head0" width="6%" />
			                <col class="head1" width="6%" />
			                <col class="head0" width="6%" />
			            </colgroup>
			            <tr>
			                <td>Numero de la puerta Cortafuego o Emplazamiento</td>
			                <td>1</td>
			                <td>2</td>
			                <td>3</td>
			                <td>4</td>
                            <td>5</td>
                            <td>6</td>
                            <td>7</td>
                            <td>8</td>
                            <td>9</td>
                            <td>10</td>
                            <td>11</td>
                            <td>12</td>
                            <td>13</td>
			            </tr>
			            </table>
			        
			        <div class="sTableWrapper">
			            <table cellpadding="0" cellspacing="0" class="sTable" width="100%">
			                <colgroup>
			                    <col class="con1" width="10%" />
			                    <col class="con0" width="6%" />
			                    <col class="con1" width="6%" />
			                    <col class="con0" width="6%" />
			                    <col class="con1" width="6%" />
                                <col class="con0" width="6%" />
			                    <col class="con1" width="6%" />
			                    <col class="con0" width="6%" />
			                    <col class="con1" width="6%" />
                                <col class="con0" width="6%" />
			                    <col class="con1" width="6%" />
			                    <col class="con0" width="6%" />
			                    <col class="con1" width="6%" />
                                <col class="con0" width="6%" />
			                </colgroup>
			                <tr>
			                    <td><input type="text" name="email"  class="sftablehalf" /></td>
			                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
			                    	</select></td>
                                    <td><select name="occupation"><option>Sel</option>
			                    	<option value="0">SI</option>
			                    	<option value="1">NO</option>
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
                
                <h1 class="pageTitle">Sistemas de Puertas Cortafuego</h1>
                
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
	                   	<legend>Pruebas y Mantenimiento Semestral</legend>
	                   	
	                   	<p>1. Comprobar que la compuerta cierra completamente y se encaja el pestillo (si se dispone de el)</p>
                        <p>2. Comprobar que la compuerta esta firmemente anclada en su lugar y que el conducto (si existe) esta correctamente sujeto con las juntas</p>
                        <p>3. Engrasar todas las partes moviles para asegurar su correcto funcionamiento</p>
                        
                        
                        <table cellpadding="0" cellspacing="0" class="sTableHead" width="100%">
			        	<colgroup>
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			                <col class="head1" width="25%" />
			                <col class="head0" width="25%" />
			            </colgroup>
			            <tr>
			                <td>Numero de la puerta Cortafuego o Emplazamiento</td>
			                <td>1</td>
			                <td>2</td>
			                <td>3</td>
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
			                    <td><input type="text" name="email"  class="sftablehalf" /></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Correcto</option>
			                    	<option value="1">Incorrecto</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Correcto</option>
			                    	<option value="1">Incorrecto</option>
			                    	</select></td>
			                    <td><select name="occupation"><option>Seleccionar</option>
			                    	<option value="0">Correcto</option>
			                    	<option value="1">Incorrecto</option>
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
