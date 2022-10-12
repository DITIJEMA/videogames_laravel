<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function index(){

    }

    public function create(){
        return "creacion de un usuario";
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
