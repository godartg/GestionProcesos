<?php  

echo '	
	 <form action="caja2.php" method="post">
    <p>
      <input name="group1" type="radio" id="alg1" />
      <label for="alg1">Alg. FIFO</label>
    </p>
    <p>
      <input name="group1" type="radio" id="alg2" />
      <label for="alg2">Alg. SJF(Apropiativo)</label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" id="alg3"  />
      <label for="alg3">Alg. SJF(No Apropiativo)</label>
    </p>
      <p>
        <input name="group1" type="radio" id="alg4" />
        <label for="alg4">Alg. Round Robin</label>
    </p>
		<input type="submit" value="Seleccion">
  </form>'	
?>
