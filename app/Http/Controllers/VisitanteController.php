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

    public function cadastrarVisitante ($nome=null,$sexo=null,$idade=null,$local=null,$telefone=null,$idVisitante=null)
    {
        if ($idVisitante == null) {
            $query = "INSERT INTO visitante (nome, sexo, idade, local, telefone) VALUES (";
            $query .= "'" . $nome . "'," . $sexo . "," . $idade . "," . $local . "," . $telefone . ");";
            // $query = "SELECT currval(pg_get_serial_sequence('visitante','idVisitante')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE visitante SET nome = '" . $nome . "', sexo = " . $sexo . ", idade = " . $idade . ", local = " . $local . ", telefone = '" . $telefone . "' WHERE idVisitante = " . $idVisitante . ";";
            return app('db')->select($query);
        }
    }
}