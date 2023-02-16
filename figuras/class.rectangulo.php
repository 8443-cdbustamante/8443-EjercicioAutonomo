<?php
class rectangulo extends figura implements formulas{
	private $lado1;
	private $lado2;

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
  function set_lado2($lado2) {
    $this->lado2 = $lado2;
  }
  function get_lado2() {
    return $this->lado2;
  }


//metodos propios
	public function area(){
		return ($this->lado1 ) * ($this->lado2);
	}

	public function perimetro(){
		return (2* $this->lado1 ) +( 2* $this->lado2);
	}
}
?>
