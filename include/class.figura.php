<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" method="POST" action="" >
			<table border=0 align="center">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<div class="form-group">
						<select id="tipo" name="tipo" OnChange="opcionFigura()">
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
						</div>
					</td>
				</tr>
				<tr>
				<div class="form-group">
					<td>Lado 1:</td>
					<td><input type="text"  name="lado_1" id="lado_1" size="4" disabled></td>
				</div>
				</tr>
				<tr>
				<div class="form-group">
					<td>Lado 2:</td>
					<td><input type="text" name="lado_2" id="lado_2" size="4" disabled></td>
					</div>
				</tr>
				<tr>
				<div class="form-group">
					<td>Lado 3:</td>
					<td><input type="text" name="lado_3" id="lado_3" size="4" disabled></td>
					</div>
				</tr>							
				<tr>
					<th colspan="2"><button type="submit" class="btn btn-primary" name="calcular" value="Calcular" disabled>Calcular</button></th>
				</tr>
			</table>
			</form>
			<script src="script/casillas.js"></script>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
