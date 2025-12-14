<?php
class Audioteca {

    /* Almacena las pistas de audio de la audioteca */
    private $pistas;

    /* Añade una nueva pista a la audioteca */
    public function agregarPista($nuevaPista){
        $this->pistas[] = $nuevaPista;
    }

    /* Devuelve todas las pistas almacenadas */
    public function obtenerPistas(){
        return $this->pistas;
    }

    /* Busca una pista por su ID */
    public function buscarPista($id){
        foreach ($this->pistas as $pista) {
            if ($pista->getId() == $id) {
                return $pista;
            }
        }
        return null;
    }

    /* Actualiza los datos de una pista existente */
    public function actualizarPista($id, $titulo, $duracion){
        $pista = $this->buscarPista($id);

        if ($pista !== null) {
            $pista->setTitulo($titulo);
            $pista->setPrecio($duracion); 
            return true;
        }

        return false;
    }

    /* Elimina una pista de la audioteca */
    public function eliminarPista($id){

        foreach ($this->pistas as $i => $pista) {
            if ($pista->getId() == $id) {
                unset($this->pistas[$i]);
                $this->pistas = array_values($this->pistas);
                return true;
            }
        }

        return false;
    }
}

