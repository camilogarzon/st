<?php 
$urlQR = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=http://interfiresas.com/interfire/".$_GET['href']."?id=".$_GET['id'];
?>
<iframe style="width:450px; height:400px;" src="<?php echo $urlQR; ?>"></iframe>