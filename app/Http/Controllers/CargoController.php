<?php

namespace App\Http\Controllers;

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
        // $local = [
        //     [
        //         "cidade" => "cacador"   ,         
        //         "bairro" => "Municipios"
        //     ],
        //     [
        //         "cidade" => "calmon",
        //         "bairro" => "centro"
        //     ]
        // ];
        // return $local;
        return app('db')->select("SELECT * FROM cargo;");
    }
    public function cadastrarCargo (string $nome,$setor) {
        // return response()->json(
        //     [                 
        //         'id' => "1"
        //     ]);
        // return app('db')->select("SELECT idLocal as id FROM local;");

        $query = "INSERT INTO cargo (nome, setor) VALUES (";
        $query .= "'" . $nome . "','" . $setor . "');";
        // $query += "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id;";
        return app('db')->select($query);
    }
}