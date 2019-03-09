<?php
	abstract class Deportista {
		// Variables
		protected $nombre;
		protected $numero;
		
		// Puedo declarar tan solo 1 constructor y pierdo el constructor sin parametros
		public function __construct($nombre, $numero) {
			$this->nombre = $nombre;
			$this->numero = $numero;

			echo "En el constructor Deportista";
			echo "<br/>";
		}

		function __destruct() {
			echo "Destruyendo $this->nombre";
			echo "<br/>";
		}
		
		// Setters
		public function setNombre($nombre) {
			$this->nombre = $nombre;
		}
		
		public function setNumero($numero) {
			$this->numero = $numero;
		}
		
		// Getters
		public function getNombre() {
			return $this->nombre;
		}
		
		public function getNumero() {
			return $this->numero;
		}

		// Metodo estatico
		public static function imprimirTitulo() {
			echo "<h1>Ejemplo de herencia</h1>";
		}
	}

	interface iBasquetbolista {
		public function lanzarTriple();
	}

	final class Basquetbolista extends Deportista implements iBasquetbolista {
		// Variables
		private $altura;

		function __construct($nombre, $numero, $altura) {
			parent::__construct($nombre, $numero);
			$this->altura = $altura;

			echo "En el constructor Basquetbolista";
			echo "<br/>";
		}

		// Esta es otra forma de definir un nuevo "constructor"
		// Utilizando un metodo estatico
		public static function obtener($nombre, $numero) {
			$instancia = new self($nombre, $numero, 200);

			return $instancia;
		}

		public function setAltura($altura){
			$this->altura = $altura;
		}

		public function getAltura(){
			return $this->altura;
		}

		// Metodos
		public function presentar() {
			echo "<h3>Hola me llamo ".$this->nombre.", mi numero de camiseta es ".$this->getNumero()." y mido ".$this->getAltura()." metros</h3>";
		}

		public function lanzarTriple() {
			echo "<h3>".$this->nombre." esta lanzando de 3!</h3>";
		}
	}

	// Invoco un metodo estatico de la clase Deportista
	Deportista::imprimirTitulo();

	$manuGinobili = new Basquetbolista("Emanuel Ginobili", 20, 1.98);
	$manuGinobili->presentar();
	$manuGinobili->setNombre("Manu");
	$manuGinobili->presentar();
	$manuGinobili->lanzarTriple();
	$manuGinobili = null;

	$andresNocioni = Basquetbolista::obtener("Andres Nocioni", 5);
	$andresNocioni->presentar();
	$andresNocioni = null;
?>