<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestor de Proyectos</title>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
	<nav class="light-blue lighten-1" role="navigation">
    	<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">UPT</a>
      		<ul class="right hide-on-med-and-down">
        		<li><a href="#">Navbar Link</a></li>
      		</ul>

      		<ul id="nav-mobile" class="side-nav">
        		<li><a href="#">Navbar Link</a></li>
      		</ul>
      		<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    	</div>
  	</nav>
  	<div class="section no-pad-bot" id="index-banner">
	    <div class="container">
		      <br><br>
			<h1 class="header center orange-text">Sistemas Operativos I</h1>
			<div class="row">
			    <div class="col s3 grey lighten-5"><span class="flow-text"><p class="z-depth-1"><?php include('caja1.php') ?></p></span></div>
			    <div class="col s9 grey lighten-5"><span class="flow-text"><?php include('caja2.php') ?></span></div>
			</div>

	    </div>
    </div>

          
</body>
</html>