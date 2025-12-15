<?php
class Audioteca {

    public function __construct() {
        if (!isset($_SESSION['pistas'])) {
            $_SESSION['pistas'] = [];
        }
    }

    /* Devuelve todas las pistas almacenadas */
    public function obtenerPistas() {
        return $_SESSION['pistas'];
    }

    /* Busca una pista por su ID */
    public function buscarPista($id) {
        foreach ($_SESSION['pistas'] as $pista) {
            if ($pista->getId() == $id) {
                return $pista;
            }
        }
        return null;
    }

    /* Actualiza los datos de una pista existente */
    public function actualizarPista($id, $titulo, $duracion) {
        foreach ($_SESSION['pistas'] as $i => $pista) {
            if ($pista->getId() == $id) {
                $pista->setTitulo($titulo);
                $pista->setPrecio($duracion); // si es duración, ajusta el setter
                $_SESSION['pistas'][$i] = $pista;
                return true;
            }
        }
        return false;
    }

    /* Elimina una pista de la audioteca */
    public function eliminarPista($id) {
        foreach ($_SESSION['pistas'] as $i => $pista) {
            if ($pista->getId() == $id) {
                unset($_SESSION['pistas'][$i]);
                $_SESSION['pistas'] = array_values($_SESSION['pistas']);
                return true;
            }
        }
        return false;
    }

    /* Añade una nueva pista */
    public function agregarPista($nuevaPista) {
        $_SESSION['pistas'][] = $nuevaPista;
    }
}

