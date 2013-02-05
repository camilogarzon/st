			<h1 class="pageTitle">Sistema de Control de Humos</h1>
			
			<div id="tabs" class="tabs2">
                <ul>
                    <li><a href="#tabs-1">Registro</a></li>
                    <li><a href="#tabs-2">Prueba de Recepción</a></li>
                    <li><a href="#tabs-3">Prueba de Comportamiento</a></li>
                    <li><a href="#tabs-4">Prueba Zonal</a></li>
                    <li><a href="#tabs-5">Prueba Presurización</a></li>
                </ul>
                
                <div id="tabs-1">
                
                <?php include("sistema_humos/registro.php") ?>
                
                </div>
                
                <div id="tabs-2">
                
                <?php include("sistema_humos/recepcion.php") ?>
                
                </div>
                <div id="tabs-3">
                
                <?php include("sistema_humos/comportamiento.php") ?>
                
                </div>
                
                <div id="tabs-4">
                
                <?php include("sistema_humos/zonal.php") ?>
                
                </div>
                
                <div id="tabs-5">
                
                <?php include("sistema_humos/presurizacion.php") ?>
                
                </div>
                
			</div>