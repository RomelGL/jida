<?php
    class Usuario
    {
        private $id;
        private $nombre;
        private $email;
        private $telefono;
        private $fecha_registro;

        public function __GET($k){
            return $this->$k;
        }
        public function __SET($k, $v){
            return $this->$k = $v; 
        }
    }
?>