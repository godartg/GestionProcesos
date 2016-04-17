
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
$cont=0
$btnNomb= "Seleccion";
echo "<form id=\"formulario2\" action=\"tabla1.php\" method=\"post\">";
switch ($_POST['group1']) {
	case "alg1":
		echo "<h3>FIFO</h3>";
		$btnNomb= "Calcular";
		cont++;
		break;
	case "alg2":
		echo "<h3>SFJ (Apropiativo)</h3>";
		$btnNomb= "Calcular";
		cont++;
		break;
	case "alg3":
		echo "<h3>SFJ (No apropiativo)</h3>";
		$btnNomb= "Calcular";
		break;
	case "alg4":
		echo "<h3>Round Robin</h3>";
		
		$btnNomb= "Calcular";
		break;
	default:
		echo "<h3>Futuro Algoritmo</h3>";
		
		$btnNomb= "Calcular";
		break;
}
			
echo "<input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Agregrar\">";
echo "</form>";
echo "<span class=\"respuesta_02\"></span>";

?>
