<?php

namespace Database\Seeders;

use App\Models\Classification;
use App\Models\Console;
use App\Models\Gender;
use App\Models\Region;
use App\Models\State;
//use App\Models\States;
use App\Models\Status;
use App\Models\Type_Employee;
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
        //parte manual utilizando seeder

        //\App\Models\User::factory(10)->create();
        //clasificaciones
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
    }
}
