<?php

class Disco {
    private $titulo;
    private $artista;
    private $genero;
    private $precio;
    private $id;

    public function __construct($tit, $art, $gen, $prec, $id){
        $this->setTitulo($tit);
        $this->setArtista($art);
        $this->setGenero($gen);
        $this->setPrecio($prec);
        $this->id = $id;
    }

    public function setTitulo($tit){
        $this->titulo = $tit;
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function setArtista($art){
        $this->artista = $art;
    }

    public function getArtista(){
        return $this->artista;
    }

    public function setGenero($gen){
        $this->genero = $gen;
    }

    public function getGenero(){
        return $this->genero;
    }

    public function setPrecio($prec){
        $this->precio = $prec;
    }

    public function getPrecio(){
        return $this->precio;
    }

    public function mostrarInfo(){
        echo "Título: " . getTitulo() . "<br>Artista: " . getArtista() . "<br>Género: " . getGenero() . "<br>Precio: " . getPrecio() . "<br>";
    }
}