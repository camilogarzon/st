<?php
require_once 'includes/generic_validate_session.php';
?>
<!-- head -->
<?php include("head.php"); ?>
<!-- head -->


<!-- header -->
<div class="header">
<?php include("header.php"); ?> 
</div>
<!-- header -->


<!-- sidebar -->
<div class="sidebar">
<?php include("sidebar.php"); ?>
</div>
<!-- sidebar -->

<!-- content -->
<div class="maincontent">

	<div class="contenedor">
	
	<h3>Formato Auditoría</h3>
	
	<form action="" method="post">
                   <div class="form_default">
	                   
	                   <!-- INFORMACION GENERAL -->
	                   
	                   <fieldset>
                    	<div class="one_sixth"><label for="name">Nombre Cliente</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Fecha</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Sede</label></div>
                        <div class="one_sixth last"><input type="text" name="name"  class="sftable" /></div>
	                   </fieldset>
	                   
	                   <fieldset>
		                   <legend>Información General</legend>
                    	<div class="one_sixth"><label for="name">Tipo de riesgo NFPA 101</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Riesgo leve</option><option value="1">Riesgo ordinario</option><option value="2">Riesgo elevado</option></select></div>
                        <div class="one_sixth"><label for="name">Ocupación princial</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="email">Area construida m2</label></div>
                        <div class="one_sixth last"><input type="text" name="name"  class="sftable" /></div>
                        <div class="clear"></div>
                    	<div class="one_sixth"><label for="name">Numero de pisos sobre nivel</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Numero de pisos bajo nivel</label></div>
                        <div class="one_sixth"><input type="text" name="name"  class="sftable" /></div>
                        <div class="one_sixth"><label for="name">Cuenta con acometida de gas</label></div>
                        <div class="one_sixth last"><input type="text" name="name" value="donde se ubica" class="sftable" /></div>
                        <div class="clear"></div>
                    	<div class="one_sixth"><label for="name">Cuenta con planta de emergencia</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                        <div class="one_sixth"><input type="text" name="name" value="donde se ubica" class="sftable" /></div>
                       <div class="one_sixth"><label for="name">Cuenta con calderas</label></div>
                        <div class="one_sixth"><select name="occupation"><option>Seleccione una</option><option value="0">Si</option><option value="1">No</option></select></div>
                        <div class="one_sixth last"><input type="text" name="name" value="donde se ubica" class="sftable" /></div>
                        <div class="clear"></div>
                       <div class="one_third"><label for="name">Tipo de sistemas de protección con los que cuenta</label></div>
                       <div class="clear"></div>
                       <ul>
	                       <li class="check_iframe">Bombas contra incendio <input type="checkbox" name="" value="Visualizar" id="01" class="check_iframe"><label for="01" class="check_iframe check_form">Elegir</label></li>
	                       <li class="check_iframe">Extintor portatil <input type="checkbox" name="" value="Visualizar" id="02" class="check_iframe"><label for="02" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Ascensor de emergencia <input type="checkbox" name="" value="Visualizar" id="03" class="check_iframe"><label for="03" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Hidrantes contra incendio <input type="checkbox" name="" value="Visualizar" id="04" class="check_iframe"><label for="04" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Luces de emergencia<input type="checkbox" name="" value="Visualizar" id="05" class="check_iframe"><label for="05" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Puertas y compuertas <input type="checkbox" name="" value="Visualizar" id="06" class="check_iframe"><label for="06" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Abastecimiento de agua <input type="checkbox" name="" value="Visualizar" id="07" class="check_iframe"><label for="07" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Agua nebulizada <input type="checkbox" name="" value="Visualizar" id="08" class="check_iframe"><label for="08" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Agua pulverizada <input type="checkbox" name="" value="Visualizar" id="09" class="check_iframe"><label for="09" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Control de humos <input type="checkbox" name="" value="Visualizar" id="10" class="check_iframe"><label for="10" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Detección y alarma de incendios <input type="checkbox" name="" value="Visualizar" id="11" class="check_iframe"><label for="11" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Espuma <input type="checkbox" name="" value="Visualizar" id="12" class="check_iframe"><label for="12" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Extinción alternativo al halón <input type="checkbox" name="" value="Visualizar" id="13" class="check_iframe"><label for="13" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Agente extintor acuoso <input type="checkbox" name="" value="Visualizar" id="14" class="check_iframe"><label for="14" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Agente halogenado <input type="checkbox" name="" value="Visualizar" id="15" class="check_iframe"><label for="15" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Dioxido de carbono <input type="checkbox" name="" value="Visualizar" id="16" class="check_iframe"><label for="16" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Dioxido de carbono <input type="checkbox" name="" value="Visualizar" id="17" class="check_iframe"><label for="17" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Rociadores automaticos<input type="checkbox" name="" value="Visualizar" id="18" class="check_iframe"><label for="18" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Rociadores espuma <input type="checkbox" name="" value="Visualizar" id="19" class="check_iframe"><label for="19" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Tuberias y mangueras <input type="checkbox" name="" value="Visualizar" id="20" class="check_iframe"><label for="20" class="check_iframe">Elegir</label></li>
	                       <li class="check_iframe">Extinción por polvo <input type="checkbox" name="" value="Visualizar" id="21" class="check_iframe"><label for="21" class="check_iframe">Elegir</label></li>
	                   </ul>
	                   
	                   </fieldset>
	                   	                   
	                   <!-- NOTAS -->
	                   
	                   <fieldset><legend>Notas</legend>
                        <textarea name="location" class="mftable" cols="" rows=""></textarea>
	                   </fieldset>
                      <div class="clear"></div>
                        <input type="button" name="button" id="button" value="Registrar" />
                        </div>
                    </form>
    
    </div>

</div>
<!-- content -->


<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->