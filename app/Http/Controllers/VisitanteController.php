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

    public function listarVisitante()
    {
        return app('db')->select("SELECT idVisitante as id, nome, telefone, sexo, idade, uuid, local FROM visitante;");
    }

    public function cadastrarVisitante ($nome,$telefone,$sexo,$idade,$local,$idVisitante=null)
    {
        if ($idVisitante == null) {
            $query = "INSERT INTO visitante (nome, telefone, sexo, idade, local) VALUES (";
            $query .= "'" . $nome . "','" . $telefone . "'," . $sexo . "," . $idade . "," . $local . ");";
            // $query = "SELECT currval(pg_get_serial_sequence('visitante','idVisitante')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE visitante SET nome = '" . $nome . "', telefone = '" . $telefone . "', sexo = " . $sexo . ", idade = " . $idade . ", local = " . $local . " WHERE idVisitante = " . $idVisitante . ";";
            return app('db')->select($query);
        }
    }
}