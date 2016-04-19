<?php 
class algoritmo{

private $idAlg;
private $NA;
private $TME;
private $quantum;


private $_procesos = array();

public function __contruct($NA){
	$this->_na = $NA;
}
public function addProceso(Proceso $proceso){
	$this->_procesos[]= $proceso;
}

}
?>	 