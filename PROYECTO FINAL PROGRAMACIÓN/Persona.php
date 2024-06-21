<?php 
class Persona{
    private $nombre;
    private $dinero;


    public function __construct($nombre){
        $this->nombre = $nombre;
        $this->dinero = mt_rand(30, 100);
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getDinero(){
        return $this->dinero;
    }
}
?>