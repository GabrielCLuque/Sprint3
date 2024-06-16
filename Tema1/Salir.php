<?php
  
  require('Pertenencias.php');
class Salir {
        public $pertenencias;
    
    public function __construct(Pertenencias $pertenencias ) {
        $this->pertenencias = $pertenencias;
    }

    public function verSiPuedoSalir() : void {
        if ($this->pertenencias->getCartera()===true && $this->pertenencias->getLlavesCasa()===true
        && $this->pertenencias->getLlavesCoche()===true && $this->pertenencias->getTusual()===true
        && $this->pertenencias->getSmartphone()===true){
            echo 'Puedes salir.';
        }
        else{
            echo 'No puedes salir, revisa que tengas todas tus pertenencias contigo.';
        }
    }
    
}
?>  