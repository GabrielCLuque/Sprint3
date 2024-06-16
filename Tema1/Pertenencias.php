<?php

class Pertenencias {
        public $cartera = true;
        public $llavescasa = true;
        public $llavescoche = true;
        public $tusual = true;
        public $smartphone = true;
    
    public function __construct() {

    }
        public function getCartera() {
            return $this->cartera;
        }
    
        public function getLlavesCasa() {
            return $this->llavescasa;
        }
    
        public function getLlavesCoche() {
            return $this->llavescoche;
        }
    
        public function getTusual() {
            return $this->tusual;
        }
    
        public function getSmartphone() {
            return $this->smartphone;
        }
        public function setCartera($cartera) {
            $this->cartera = $cartera;
        }
    
        public function setLlavesCasa($llavescasa) {
            $this->llavescasa = $llavescasa;
        }
    
        public function setLlavesCoche($llavescoche) {
            $this->llavescoche = $llavescoche;
        }
    
        public function setTusual($tusual) {
            $this->tusual = $tusual;
        }
    
        public function setSmartphone($smartphone) {
            $this->smartphone = $smartphone;
        }
    
}
?>
