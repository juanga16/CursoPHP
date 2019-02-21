<?php
	class Ciudad {   
		// Variables
		private $nombre;
		private $codigoPostal;
		
		// Puedo declarar tan solo 1 constructor y pierdo el constructor sin parametros
		public function __construct($nombre) {
			$this->nombre = $nombre;
		}		
		
		//Setters
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		
		public function setCodigoPostal($codigoPostal){
			$this->codigoPostal = $codigoPostal;
		}
		
		//Getters
		public function getNombre(){
			return $this->nombre;
		}
		
		public function getCodigoPostal(){
			return $this->codigoPostal;
		}    
	}

	$coronelSuarez = new Ciudad("Coronel Suarez");
	$coronelSuarez->setCodigoPostal(7540);
	
	echo "Ciudad: " . $coronelSuarez->getNombre() . " - Codigo Postal: " . $coronelSuarez->getCodigoPostal();
	echo "</br>";
	
	$coronelSuarez->setNombre("Pigue");
	$coronelSuarez->setCodigoPostal(8170);
	echo "Ciudad: " . $coronelSuarez->getNombre() . " - Codigo Postal: " . $coronelSuarez->getCodigoPostal();
	echo "</br>";
?>