<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class VisitanteController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function cadastrarVisitante ($nome=null,$telefone=null,$sexo=null,$idade=null,$uuid=null)
    {
        // return response() -> json(
        //     [
        //         "idVisitante"=>"1"
        //     ]
        // );
        // return app('db')->select("SELECT idvisitante as id FROM visitante;");
        $query = "INSERT INTO local (nome, telefone, sexo, idade, uuid) VALUES (";
        $query += "'" . $nome . "'," . $telefone . ",'" . $sexo . "','" . $idade . "'," . $uuid . "');";
        $query += "SELECT currval(pg_get_serial_sequence('visitante','idvisitante')) as id;";
        return app('db')->select($query);
    }

    public function listarVisitante()
    {
    //    $visitante = [
    //         [
    //             "id"=> "01",
    //             "nome"=> "Andrei Maurina",
    //             "telefone"=> "3567",
    //             "idade"=> "19",
    //             "uuid"=> "007"
    //         ],
    //         [
    //             "id"=> "02",
    //             "nome"=> "Guilherme",
    //             "telefone"=> "3563",
    //             "idade"=> "20",
    //             "uuid"=> "024"
    //         ]
    //     ];
    //     return $visitante;
        return app('db')->select("SELECT idvisitante as id, nome, telefone, idade, uuid FROM visitante;");
    }
}
