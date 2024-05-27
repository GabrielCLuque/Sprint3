<?php
  /*
  Imagina que ets una persona que està a punt de sortir de casa per anar a estudiar/treballar. 
  Abans de sortir de casa necessitaràs portar la cartera, les claus de casa, potser les claus del cotxe/moto o la targeta del transport públic, i l'smartphone
  */
class Pertenencias {
        static private $instance = null;
        private $pertenencias = [['cartera',true],['llavescasa',false],['llavescoche',true],['tusual',false],['smartphone',true]];
    
    private function __construct() {}
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Pertenencias ();
        }
        return self::$instance;
    }
    public function versipuedosalir() {
        $podersalir = true;
        for($i=0; $i<count($this->pertenencias); $i++ ){
            if ($this->pertenencias[$i][1] == false){
                echo 'Te falta ' . $this->pertenencias[$i][0] . '</br>' ;
                $podersalir = false;
            }
        }
        if (!$podersalir){
            echo 'No salgas aun';
        }
        else {
            echo 'Puedes salir';
        }
    }


}
?>
