<?php  

echo '	
	 <form action="action.php" method="post">
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
        <input name="group1" type="radio" id="alg4" disabled="disabled" />
        <label for="alg4">Alg. Round Robin</label>
    </p>
	<div class="btn">
		<button type="submit">Seleccionar</button>
	</div>
  </form>'	
?>
