<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SJFa</title>
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

      		<ul id="nav-mobile" class="nav navbar-nav">
        		<li><a href="SJFa.php">SJF(Apropiativo)</a></li>
      		</ul>
      		<ul id="nav-mobile" class="nav navbar-nav">
        		<li><a href="SJFn.php">SJF(No apropiativo)</a></li>
      		</ul>
      		<ul id="nav-mobile" class="nav navbar-nav">
        		<li><a href="rr.php">Round Robin</a></li>
      		</ul>
    	</div>
 	</nav>
 	<div class="container">
  		<form action="datos.php" method="post">
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
					<label for="">Numero de procesos</label>
					<input type="text" name="np" id="np" placeholder="Numero de procesos">	
				</div>
			</div>
			<br>
			<div class="radio-inline">
			  <label>
			    <input type="radio" name="Or" id="Or1" value="o1" >
			    Tiempo de llegada
			  </label>
			</div>
			<div class="radio-inline">
			  <label>
			    <input type="radio" name="Or" id="Or2" value="o2">
			    Orden de llegada
			  </label>
			</div>
			<div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Crear tabla</button>
			    </div>
  			</div>
  			<?php

			$fp = fopen("fichero.txt", "w");

			fputs($fp, "2");

			fclose($fp);

			?>
		</form>
	</div>
</body>
</html>