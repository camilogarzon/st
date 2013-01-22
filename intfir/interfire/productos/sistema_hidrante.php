			<h1 class="pageTitle">Sistema de Hidrante</h1>
			
			<div id="tabs" class="tabs2">
                <ul>
                    <li><a href="#tabs-1">Registro</a></li>
                    <li><a href="#tabs-2">Rev. Mensual</a></li>
                    <li><a href="#tabs-3">Rev. Semestral Seca</a></li>
                    <li><a href="#tabs-4">Rev. Anual Humeda</a></li>
                    <li><a href="#tabs-5">Prb. Anual</a></li>
                </ul>
                
                <div id="tabs-1">
                
                <?php include("sistema_hidrante/registro.php") ?>
                
                </div>
                
                <div id="tabs-2">
                
                <?php include("sistema_hidrante/rev_mensual.php") ?>
                
                </div>
                           
                <div id="tabs-3">
                
                <?php include("sistema_hidrante/rev_semestral.php") ?>
                
                </div>
                
                <div id="tabs-4">
                
                <?php include("sistema_hidrante/rev_anual.php") ?>
                
                </div>
                
                <div id="tabs-5">
                
                <?php include("sistema_hidrante/prb_anual.php") ?>
                
                </div>
                
			</div>