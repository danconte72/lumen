<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class LocalController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function cadastrarLocal (string $cidade,$bairro) {
        // return response()->json(
        //     [                 
        //         'id' => "1"
        //     ]);
        // return app('db')->select("SELECT idLocal as id FROM local;");
            // $query = "INSERT INTO local (cidade, bairro) VALUES (";
            // $query += "'" . $cidade . "','" . $bairro . "');";
        // $query = "INSERT INTO local (cidade, bairro) VALUES ("'" . $cidade . "','" . $bairro . "');
        // $query += "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id;";

        $query = "INSERT INTO local VALUES ('$cidade, $bairro), (cidade, bairro)";
        // $query += "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id;";
        return app('db')->select($query);
        
        // SELECT currval(pg_get_serial_sequence('local','idLocal')) as id; -> Example.
    }
    public function listarLocal () 
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
        return app('db')->select("SELECT idLocal as id, cidade, bairro FROM local;");
    }
}