<?php  

echo '	
	 <form action="index.php" method="post">
    <p>
      <input name="group1" type="radio" value="alg1" />
      <label for="alg1">Alg. FIFO</label>
    </p>
    <p>
      <input name="group1" type="radio" value="alg2" />
      <label for="alg2">Alg. SJF(Apropiativo)</label>
    </p>
    <p>
      <input class="with-gap" name="group1" type="radio" value="alg3"  />
      <label for="alg3">Alg. SJF(No Apropiativo)</label>
    </p>
      <p>
        <input name="group1" type="radio" value="alg4" />
        <label for="alg4">Alg. Round Robin</label>
    </p>
		<input type="submit" value="Seleccion">
  </form>'	
?>
