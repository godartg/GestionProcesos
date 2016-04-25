<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado</title>
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
  <?php 
  $cont=0;
  $fp = fopen("fichero.txt", "r");
      while(!feof($fp)) {
      $linea[$cont] = fgets($fp);
      $cont++;
      }
  fclose($fp); ?>
	<?php 
    switch ($linea[0]) {
      case 1:
        echo "<h2>FIFO</h2>";
        if ($linea[2]=="o1") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["tl".$i]));
          }
        }elseif ($linea[2]=="o2") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["ol".$i]));
          }
        }else{
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i]));
          }
        }
        break;
      case 2:
        echo "<h2>SJF (Apropiativo)</h2>";
        if ($linea[2]=="o1") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["tl".$i]));
          }
        }elseif ($linea[2]=="o2") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["ol".$i]));
          }
        }else{
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i]));
          }
        }
        break;
      case 3:
        echo "<h2>SJF (No Apropiativo)</h2>";
        if ($linea[2]=="o1") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["tl".$i]));
          }
        }elseif ($linea[2]=="o2") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["ol".$i]));
          }
        }else{
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i]));
          }
        }
        break;
      case 4:
        echo "<h2>Round Robin</h2>";
        if ($linea[2]=="o1") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["tl".$i]));
          }
        }elseif ($linea[2]=="o2") {
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i], $_POST["ol".$i])));
          }
        }else{
          for ($i=1; $i <= $linea[1]; $i++) { 
            $proc[$i]= array("P$i"=> array($_POST["R".$i]));
          }
        }
        break;
      default:
        echo "No valido";
        break;
    }
	 ?>
   <?php 
    
    ?>
   <div class="container">
   <?php 
    $color = sprintf("#%06x",rand(0,16777215));
  ?>
      <div class="progress">
        <div id="p1" class="progress-bar progress-bar-striped" style="width: 35%; background: <?php echo "$color"; ?>">
          <span class="sr-only">35% Complete (success)</span>
        </div>
      </div>
      

    </div>

</body>
</html>