<?php 
require 'Proceso.php';

public class Algoritmo{

private $idAlg;
private $NA;
private $TME;
private $quantum;

private $_procesos = array();

public function __contruct($NA, $TME, $quantum){
	$this->_na = $NA;
	$this->_tme = $TME;
	$this->_quantum = $Quantum;
}
public function addProceso(Proceso $proceso){
	$this->_procesos[]= $proceso;
}

}
 ?>	 