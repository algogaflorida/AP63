<?php
class Vinilo extends Disco {

    private $tamano;
    private $velocidad;
    private $color;
    private $edicion;

    public function __construct($tam, $vel, $col, $ed, $tit, $art, $gen, $prec, $id){
        parent::__construct($tit, $art, $gen, $prec, $id);
        $this->setTamano($tam);
        $this->setVelocidad($vel);
        $this->setColor($col);
        $this->setEdicion($ed);
    }

    public function setTamano($tam){
        $this->tamano = $tam;
    }

    public function getTamano(){
        return $this->tamano;
    }

    public function setVelocidad($vel){
        $this->velocidad = $vel;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function setColor($col){
        $this->color = $col;
    }

    public function getColor(){
        return $this->color;
    }

    public function setEdicion($edi){
        $this->edicion = $edi;
    }

    public function getEdicion(){
        return $this->edicion;
    }

    public function mostrarInfo(){
        echo "<h3>Vinilo</h3>";
        parent::mostrarInfo();
        echo "Tamaño del vinilo: " . $this->getTamano() . "<br>";
        echo "Velocidad: " . $this->getVelocidad() . "<br>";
        echo "Color del vinilo: " . $this->getColor() . "<br>";
        echo "Edición: " . $this->getEdicion() . "<br>";
    }
}
