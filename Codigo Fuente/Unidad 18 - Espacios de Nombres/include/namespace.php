<?php
    namespace miNamespace;
    
    class Persona {
        protected $nombre;                
        
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
        
        public function getNombre() {
            return $this->nombre;
        }
        
    }

    function trim($cadena) {
        return "***".\trim($cadena)."***";
    };
?>