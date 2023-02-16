<?php
class triangulo extends figura implements formulas{

	private $lado1;
	private $lado2;
	private $lado3;

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
  function set_lado23($lado3) {
    $this->lado3 = $lado3;
  }
  function get_lado3() {
    return $this->lado3;
  }


//metodos propios
	public function area(){
		$s = ($this->perimetro())/2;
		return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
	}

	public function perimetro(){
		return ($this->lado1)+($this->lado2)+($this->lado3);
	}
}
	
?>

