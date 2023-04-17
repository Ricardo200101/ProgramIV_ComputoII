<?php

// Copiar de controller.php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController{
    public function index () { // Agregamos Witch
        return view('index')->with('title', 'Introduccion a Laravel'); 

    }
}