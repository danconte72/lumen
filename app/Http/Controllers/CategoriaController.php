<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class CategoriaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function listarCategoria()
    {
        return app('db')->select("SELECT idCategoria as id, nome FROM categoria;");
    }

    public function cadastrarCategoria ($nome,$idCategoria=null)
    {
        if ($idCategoria == null) {
            $query = "INSERT INTO categoria (nome) VALUES (";
            $query .= "'" . $nome . "');";
            // $query = "SELECT currval(pg_get_serial_sequence('categoria','idCategoria')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE categoria SET nome = '" . $nome . "' WHERE idCategoria = " . $idCategoria . ";";
            return app('db')->select($query);
        }
    }
}