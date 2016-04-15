<?php

	switch ($_POST['group1'];) {
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
			break;
		
		default:
			echo "<h3>Futuro Algoritmo</h3>";
			break;
	}
?>
