<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Interfirex | Gestor de Inventario y Mantenimiento</title>
<link rel="stylesheet" media="screen" href="css/style.css" />
<link rel="stylesheet" media="screen" href="css/dhtmlwindow.css" type="text/css" />
<link rel="stylesheet" media="screen" href="css/plugins/elfinder.css" type="text/css"/>

<!--[if IE 9]>
    <link rel="stylesheet" media="screen" href="css/ie9.css"/>
<![endif]-->

<!--[if IE 8]>
    <link rel="stylesheet" media="screen" href="css/ie8.css"/>
<![endif]-->

<!--[if IE 7]>
    <link rel="stylesheet" media="screen" href="css/ie7.css"/>
<![endif]-->

<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.flot.min.js"></script>
<script type="text/javascript" src="js/custom/general.js"></script>
<script type="text/javascript" src="js/plugins/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/plugins/elfinder.min.js"></script>
<script type="text/javascript" src="js/dhtmlwindow.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#example').dataTable( {
		"sPaginationType": "full_numbers"
	});
	
});
</script>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#fileManager').elfinder({
		url : 'php/connector.php',
	})
});
</script>


</head>

<body class="bodygrey">