<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class EntorpecenteController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function listarEntorpecente () {
        // return response()->json(
        // $entorpecentes = [
        //     {
        //         "nome": "Maconha",
        //     },
        //     {
        //         "nome": "metanfetamina",
        //     },
        // ]
        return app('db')->select("SELECT idEntorpecente as id, nome FROM entorpecente");
    }

        public function cadastrarEntorpecente ($nome,$idEntorpecente=null) {

        // return response()->json(
        // $entorpecente = [
        //     {
        //         "nome": "Maconha",
        //     },
        // ]
        // return app('db')->select("SELECT idEntorpecente as id FROM entorpecente");
        if ($idEntorpecente == null) {
            $query = "INSERT INTO entorpecente (nome) VALUES (";
            $query .= "'" . $nome . "');";
            // $query = "SELECT currval(pg_get_serial_sequence('entorpecente','idEntorpecente')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE entorpecente SET nome = '" . $nome . "' WHERE idEntorpecente = '" . $idEntorpecente . "');";
            return app('db')->select($query);
        }
    }
}