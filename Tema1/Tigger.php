<?php
  
class Tigger {
    static private $instance = null;
    private $rugidos = 0;
    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
            $this->rugidos +=1;
    }
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Tigger ();
        }
        return self::$instance;
    }

    public function getCounter (){
        echo 'Tigger ha rugido ' . $this->rugidos . ' veces </br>';
    }
}
?>
