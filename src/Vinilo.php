<?php
class Vinilo extends Disco {
    private $tamano;
    private $velocidad;
    private $color;
    private $edicion;
    
    public function __construct($tam, $vel, $col, $ed, $tit, $art, $gen, $prec, $id){
        $this->setTamaño($tam);
        $this->setVelocidad($vel);
        $this->setColor($col);
        $this->setEdicion($ed);
        parent::__construct($tit, $art, $gen, $prec, $id);
    }

    public function setTamaño($tam){
        $this->tamano = $tam;
    }

    public function getTamaño(){
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
        echo "<h3>Vinilos:</h3>";
        parent::mostrarInfo();
        echo "Tamaño del vinilo: " . getTamaño() . "<br>Velocidad: " . getVelocidad() . "<br>Color del vinilo: " . getColor() . "<br>Edición: " . getEdicion() . "<br>";
    }
}