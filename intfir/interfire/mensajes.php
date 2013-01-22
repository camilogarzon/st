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

<form action="" method="post">
        
        	<div class="form_default">
                    
                    <p>
                    	<label for="name">Nombre (s)</label>
                        <input type="text" name="name"  class="elf" />
                    </p>
                    
                    <p>
                    	<label for="subject">Asunto</label>
                        <input type="text" name="email"  class="lf" /><button>Enviar</button>
                    </p>
                    
            </div><!--form-->
            
            
        
        </form>
        
		<div class="widgetbox inlineblock">
			<h3><span>Mensaje</span></h3>
			<div class="content nopadding">
				<textarea id="wysiwyg" cols="130" rows="15"></textarea> 
            </div>
        </div><!-- widgetbox -->  

</div>
</div>
<!-- content -->




<!-- footer -->

<?php include("footer.php"); ?>  

<!-- footer -->
