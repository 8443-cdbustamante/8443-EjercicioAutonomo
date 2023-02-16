<?php
class cuadrado extends figura implements formulas {
	
	private $lado1;

	public function GetArea(){
		echo ('getArea cuadrado');
	}

	public function GetPerimetro(){
		echo ('getperi cuadrado');
	}
	public function GetTipo(){
		echo ('tipo cuadrado');
	}

	
	//getters and setters
	function set_lado1($lado1) {
    $this->lado1 = $lado1;
  }
  function get_lado1() {
    return $this->lado1;
  }

//metodos propios
	public function area(){
		return $this->lado1 * $this->lado1;
	}

	public function perimetro(){
		return ($this->lado1 * 4);
	}
}
?>
