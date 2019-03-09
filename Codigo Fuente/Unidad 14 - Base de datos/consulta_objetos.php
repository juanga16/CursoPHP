<?php
    require "include/abrir_conexion.php";
?>

<h1>Consultas a la base de datos</h1>

<?php
    class Pelicula {   
        // Variables
        private $id;
        private $titulo;
        private $calificacion;
        private $nacionalidad;
        private $poster;
        private $fechaEstreno;
        
        //Setters
        public function setId($id){
            $this->id = $id;
        }
        
        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        public function setCalificacion($calificacion){
            $this->calificacion = $calificacion;
        }
        
        public function setNacionalidad($nacionalidad){
            $this->nacionalidad = $nacionalidad;
        }
        
        public function setPoster($poster){
            $this->poster = $poster;
        }
        
        public function setFechaEstreno($fechaEstreno){
            $this->fechaEstreno = $fechaEstreno;
        }

        //Getters
        public function getId(){
            return $this->id;
        }
        
        public function getTitulo(){
            return $this->titulo;
        }
        
        public function getCalificacion(){
            return $this->calificacion;
        }
        
        public function getNacionalidad(){
            return $this->nacionalidad;
        }

        public function getPoster(){
            return $this->poster;
        }

        public function getFechaEstreno(){
            return $this->fechaEstreno;
        }        
    }

    // Armo la consulta
    $consulta = $conexion->prepare("SELECT id, titulo, calificacion, nacionalidad, poster, fecha_estreno as fechaEstreno FROM pelicula ORDER BY calificacion");
    $consulta->execute();
    // Ejecuto la consulta y llenamos un arreglo de instancia de Peliculas
    $resultado = $consulta->fetchAll(PDO::FETCH_CLASS, 'Pelicula');

    // Para obtener la cantidad de registros
    echo "<h2>Cantidad de registros: ".$consulta->rowCount()."</h2>";

    if ($resultado) {
        echo "<table>";
        echo "<tr>";
        echo "<th>Id</th>";
        echo "<th>Titulo</th>";
        echo "<th>Fecha de Estreno</th>";
        echo "<th>Calificacion</th>";
        echo "<th>Nacionalidad</th>";
        echo "<th>Poster</th>";
        echo "</tr>";

        foreach ($resultado as $registro) {
            $fechaEstreno = new DateTime($registro->getFechaEstreno());

            // Imprimimos cada fila
            echo "<tr>";
            echo "<td>".$registro->getId()."<td/>";
            echo "<td>".utf8_encode($registro->getTitulo())."<td/>";            
            echo "<td>".$fechaEstreno->format('d/m/Y H:i')."<td/>";
            echo "<td>".$registro->getCalificacion()."<td/>";
            echo "<td>".$registro->getNacionalidad()."<td/>";
            echo "<td><img width='50px' src='posters/".$registro->getPoster()."'/></td>";
            echo "</tr>";

            // utf8_encode: sirve para imprimir las ñ correctamente
        }

        echo "</table>";
    }

    $consulta = null;
    $resultado = null;
    require "include/cerrar_conexion.php";
?>