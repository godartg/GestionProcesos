
<script src="js/jquery.js"></script>

    <script>
         $(document).ready(function() {
            // Interceptamos el evento submit
            $('#formulario3').submit(function() {
            //Enviamos el formulario usando AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    // Mostramos un mensaje con la respuesta de PHP
                    success: function(data) {
                        $('.respuesta_03').html(data);
                    }
                })        
                return false;
            }); 

        })
    </script>
<form id="formulario3" action=".php" method="post">
<?php
$n=$_POST['cant_pro']; 
$o=$_POST['Oll'];
$t=$_POST['Tll'];
echo "<table>
			<thead>
				<tr>
					<td>Proceso</td>
					<td>Rafaga</td>
					<td>Tiempo de llegada</td>
					<td>Orden de llegada</td>
					<td>......</td>
				</tr>
			</thead>";
for($i=1; $i<= $n;$i++){
	echo "<tr>
				<td>P$i</td>
				<td><div class=\"input-field\">
          <input id=\"R$i\" type=\"text\" class=\"validate\">
        </div></td>
				<td><div class=\"input-field\">
          <input id=\"Tl$i\" type=\"text\" class=\"validate\">
        </div></td>
				<td><div class=\"input-field\">
          <input id=\"Ol$i\" type=\"text\" class=\"validate\">
        </div></td>
        <td>\"<input class=\"waves-effect waves-light btn\" type=\"submit\" value=\"Eliminar\"></td>
			</tr>";
}

	
	echo	"</table>";
	echo "<p>T.E: P:1, P:2
			T.M.E: (P1+P2)/n
			T.M.E: R</p>";
 ?>
 </form>