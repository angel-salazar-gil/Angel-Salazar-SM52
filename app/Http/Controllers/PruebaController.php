<?php

namespace LaraDex\Http\Controllers;
use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller {

    // Resibe el parametro $param
    public function prueba($param){
        return 'Estoy dentro de prubaController y resibi este parametro: '.$param;
    }

}