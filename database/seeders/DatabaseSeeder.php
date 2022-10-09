<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Classification;
use App\Models\Client;
use App\Models\Console;
use App\Models\Employer;
use App\Models\Gender;
use App\Models\Order;
use App\Models\Region;
use App\Models\State;
//use App\Models\States;
use App\Models\Status;
use App\Models\Type_Employee;
use App\Models\User;
use App\Models\Videogame;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        //using seeders for static information
        $classification = new Classification();
        $classification -> nombre = 'A - PARA TODOS';
        $classification -> save();

        $classification1 = new Classification();
        $classification1 -> nombre = 'B - +12 ANIOS';
        $classification1 -> save();

        $genero = new Gender();
        $genero -> nombre = 'TERROR';
        $genero -> save();

        $genero1 = new Gender();
        $genero1 -> nombre = 'AVENTURA';
        $genero1 -> save();

        $consolas = new Console();
        $consolas -> nombre = 'PLAYSTATION 5';
        $consolas -> save();

        $consolas1 = new Console();
        $consolas1 -> nombre = 'XBOX ONE FAT';
        $consolas1 -> save();

        $region = new Region();
        $region -> nombre = 'MEDIO ORIENTE';
        $region -> save();

        $region1 = new Region();
        $region1 -> nombre = 'EUROPA';
        $region1 -> save();

        $tipo_empleado = new Type_Employee();
        $tipo_empleado -> tipo = 'EMPLEADO';
        $tipo_empleado -> save();

        $tipo_empleado1 = new Type_Employee();
        $tipo_empleado1 -> tipo = 'CLIENTE';
        $tipo_empleado1 -> save();

        $estado = new State();
        $estado -> nombre = 'JALISCO';
        $estado -> save();

        $estado1 = new State();
        $estado1 -> nombre = 'MICHOACAN';
        $estado1 -> save();

        $estatus = new Status();
        $estatus -> nombre = 'DISPONIBLE';
        $estatus -> save();

        $estatus1 = new Status();
        $estatus1 -> nombre = 'NO DISPONIBLE';
        $estatus1 -> save();

        $cliente = new Client();
        $cliente -> id_user = 1;
        $cliente -> saldo = 5000;
        $cliente -> save();

        $cliente = new Client();
        $cliente -> id_user = 5;
        $cliente -> saldo = 8000;
        $cliente -> save();

        $empleado = new Employer();
        $empleado -> id_user = 2;
        $empleado -> salario = 300;
        $empleado -> fecha_contratacion = '22/09/22';
        $empleado -> save();

        $empleado = new Employer();
        $empleado -> id_user = 10;
        $empleado -> salario = 500;
        $empleado -> fecha_contratacion = '22/09/22';
        $empleado -> save();

        $administrador = new Administrator();
        $administrador -> id_user = 3;
        $administrador -> salario = 200;
        $administrador -> fecha_contratacion = '22/09/22';
        $administrador -> save();

        $administrador = new Administrator();
        $administrador -> id_user = 14;
        $administrador -> salario = 300;
        $administrador -> fecha_contratacion = '22/09/22';
        $administrador -> save();

        //using factories for random information in the tables
        User::factory(15)->create();
        Videogame::factory(20)->create();
        Order::factory(10)->create(); 
    }
}

