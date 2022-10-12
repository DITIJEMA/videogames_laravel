<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    public function __invoke()
    {
        return "Invocacion";
    }

    public function index(){

    }

    public function create(){
        return view('crud.console.create_console');
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

?>