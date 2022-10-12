<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideogameController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function index(){

    }

    public function create(){
        return "creacion de un videojuego";
    }

    public function show(){

    }

    public function update(){

    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
