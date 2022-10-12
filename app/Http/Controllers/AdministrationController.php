<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function index(){

    }

    public function create(){
        return "vista creacion de la administracion";
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
