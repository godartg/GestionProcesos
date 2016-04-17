<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestor de Proyectos</title>
	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <script type="text/javascript" src="materialize/js/materialize.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

  <script src="js/jquery.js"></script>

    <script>
         $(document).ready(function() {
            // Interceptamos el evento submit
            $('#formulario1').submit(function() {
            //Enviamos el formulario usando AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        $('.respuesta_01').html(data);
                    }
                })        
                return false;
            }); 

        })
    </script>
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
			    <div class="col s3 grey lighten-5">
          <p class="z-depth-1">
          <!--FORMULARIO-->
          <form id="formulario1" action="caja2.php" method="post">
            <p>
              <input name="group1" type="radio" value="alg1" id="alg1" checked/>
              <label for="alg1">Alg. FIFO</label>
            </p>
            <p>
              <input name="group1" type="radio" value="alg2" id="alg2"/>
              <label for="alg2">Alg. SJF(Apropiativo)</label>
            </p>
            <p>
              <input name="group1" type="radio" value="alg3"  id="alg3"/>
              <label for="alg3">Alg. SJF(No Apropiativo)</label>
            </p>
            <p>
              <input name="group1" type="radio" value="alg4" id="alg4"/>
              <label for="alg4">Alg. Round Robin</label>
            </p>
      		  <input class="waves-effect waves-light btn" type="submit" value="Seleccion">
          </form>
          </p>
          </div>

    			<div class="col s9 grey lighten-5">
            <span class="flow-text">
              <span class="respuesta_01"></span>

            </span>
          </div>
			  </div>

	   </div>
  </div>

          
</body>
</html>