<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class CargoController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function listarCargo ()
    {
        return app('db')->select("SELECT idCargo as id, nome, setor FROM cargo;");
    }

    public function cadastrarCargo ($nome,$setor,$idCargo=null)
    {
        if ($idCargo == null) {
            $query = "INSERT INTO cargo (nome, setor) VALUES (";
            $query .= "'" . $nome . "','" . $setor . "');";
            // $query = "SELECT currval(pg_get_serial_sequence('cargo','idCargo')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE cargo SET nome = '" . $nome . "', setor = '" . $setor . "' WHERE idCargo = " . $idCargo . ";";
            return app('db')->select($query);
        }
    }
}