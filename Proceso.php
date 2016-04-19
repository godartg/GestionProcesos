<?php 
/**
* 
*/
class Proceso 
{
	private $idProc;
	private $Raf;
	private $TLLegada;
	private $OLlegada;
	private $TEspera;

	function __construct($Raf, $Tl, $Ol, $Te)
	{
		$this->_raf = $Raf;
		$this->_tl = $Tl;
		$this->_ol = $Ol;
		$this->_te = $te;
	}
}
 ?>