<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos</title>
	<link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation">
    	<div class="container">
    		<ul class="nav navbar-nav">
        		<li><a href="index.php">UPT</a></li>
      		</ul>
      		<ul class="nav navbar-nav">
        		<li><a href="FIFO.php">FIFO</a></li>
      		</ul>

      		<ul class="nav navbar-nav">
        		<li><a href="SJFa.php">SJF(Apropiativo)</a></li>
      		</ul>
      		<ul class="nav navbar-nav">
        		<li><a href="SJFn.php">SJF(No apropiativo)</a></li>
      		</ul>
      		<ul class="nav navbar-nav">
        		<li><a href="rr.php">Round Robin</a></li>
      		</ul>
    	</div>
 	</nav>
 	<?php 
 	$opc=$_POST['Or'];

 	 ?>
 	<div class="container">
	 	<form action="resultado.php" method="post">
		 	<div class="table-responsive">
				<table class="table">
				<thead>
					<td>Proceso</td>
					<td>Rafaga</td>
					<?php if ($opc=="o1") { ?>
						<td>Tiempo de llegada</td>
					<?php }elseif ($opc=="o2") {?>
						<td>Orden de llegada</td>
					<?php } ?>
				</thead>
			<?php 
			$np= $_POST["np"];
			$qa=$_POST["qa"];
			for ($i=1; $i <= $np; $i++) { 
				?>
				<tr>
					<td><?php echo "P".$i; ?></td>
					<td><input type="text" class="form-control" id="<?php echo "R".$i; ?>"></td>
					<?php if ($opc=="o1") { ?>
						<td><input type="text" class="form-control" id="<?php echo "tl".$i; ?>"></td>
					<?php }elseif ($opc=="o2") {?>
						<td><input type="text" class="form-control" id="<?php echo "ol".$i; ?>"></td>
					<?php } ?>
				</tr>
			<?php
			}
			 ?>
				</table>
			</div>
			<button type="submit" class="btn btn-default"> Calcular </button>
		</form>
	</div>
	<?php

			$fp = fopen("fichero.txt", "a");

			fputs($fp, PHP_EOL."$np");
			if (!is_null($opc)){
				fputs($fp, PHP_EOL."$opc");
			}else{
				fputs($fp, PHP_EOL);
			}
			if (!is_null($qa)) {
				fputs($fp, PHP_EOL."$qa");
			}
			fclose($fp);

			?>
</body>
</html>