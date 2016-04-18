<script src="js/jquery.js"></script>

    <script>
         $(document).ready(function() {
            // Interceptamos el evento submit
            $('#formulario2').submit(function() {
            //Enviamos el formulario usando AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        $('.respuesta_02').html(data);
                    }
                })        
                return false;
            }); 

        })
    </script>
<?php
switch ($_POST['group1']) {
	case "alg1":
		echo "<h3>FIFO</h3>";
		break;
	case "alg2":
		echo "<h3>SFJ (Apropiativo)</h3>";
		break;
	case "alg3":
		echo "<h3>SFJ (No apropiativo)</h3>";
		break;
	case "alg4":
		echo "<h3>Round Robin</h3>";
		echo "<label for=\"quats\">Quantus</label><input placeholder=\"Quantus\" id=\"quats\" type=\"text\" class=\"validate\" name=\"quats\">";

		break;
	default:
		echo "<h3>Futuro Algoritmo</h3>";
		break;
}
header("location:tabla2.php?Noa=$NA")
?>
<form id="formulario2" action="tabla1.php" method="post">
   
   <div class="row">
	   		<label for="cant_pro">Cantidad de Procesos</label>
	        <input placeholder="Cantidad de Procesos" id="cant_pro" type="text" class="validate" name="cant_pro">
	</div>
    <div class="input-field col s5">
    	<input type="checkbox" class="filled-in offset-s1" id="filled-in-box" checked="checked" name="Tll" />
      <label for="filled-in-box">Tiempo llegada</label>
      <input type="checkbox" class="filled-in" id="filled-in-box" checked="checked" name="Oll" />
      <label for="filled-in-box">Orden de llegada</label>
    </div>
	<br><br><br>
   <button class="btn waves-effect waves-light" type="submit" name="action">Crear</button>
</form>
<span class="respuesta_02"></span>
