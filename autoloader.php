<?php

spl_autoload_register(function($clase){
    $ruta = __DIR__ . "/src/$clase.php";

    if (file_exists($ruta)){
        require $ruta;
    }
});