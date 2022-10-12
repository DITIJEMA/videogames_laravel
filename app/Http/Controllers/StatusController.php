<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function index(){

    }

    public function create(){
        return "creacion de estatus de un pedido o cliente";
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
