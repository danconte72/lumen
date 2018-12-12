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
        return app('db')->select("SELECT idCargo as id, nome, setor FROM cargo;");
    }
    public function cadastrarCargo (string $nome,$setor,$idCargo=null) {
        // return response()->json(
        //     [                 
        //         'id' => "1"
        //     ]);
        // return app('db')->select("SELECT idLocal as id FROM local;");

        $query = "INSERT INTO cargo (nome, setor) VALUES (";
        $query .= "'" . $nome . "','" . $setor . "');";
        // $query += "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id;";
        return app('db')->select($query);

        /* */

        // if ($idCargo != null){
        //     $query = "UPDATE cargo
        //               "' . $nome . '" = '',
        //               rel = 'follow'
        //               WHERE
        //               ID = 1 
        //               RETURNING id,
        //               description,
        //               rel;
        //     // $query += "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id;";
        //     return app('db')->select($query);
        // }else{
        //     $query = "INSERT INTO cargo (nome, setor) VALUES (";
        //     $query .= "'" . $nome . "','" . $setor . "');";
        //     // $query += "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id;";
        //     return app('db')->select($query);
        // }
    }
}