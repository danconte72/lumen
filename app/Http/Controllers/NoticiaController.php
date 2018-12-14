<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class NoticiaController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function listarNoticia ()
    {
        return app('db')->select("SELECT idNoticia as id, titulo, corpo, data, referencia, hora, imagem, categoria, usuario FROM noticia");
    }

    public function cadastrarNoticia ($titulo,$corpo,$referencia,$imagem,$categoria,$usuario,$idNoticia=null)
    {
        if ($idNoticia == null) {
            $query = "INSERT INTO noticia (titulo, corpo, data, referencia, imagem, categoria, usuario) VALUES (";
            $query .= "'" . $titulo . "','" . $corpo . "', CURRENT_TIMESTAMP(), '" . $referencia . "','" . $imagem . "'," . $categoria . "," . $usuario . ");";
            // $query = "SELECT currval(pg_get_serial_sequence('noticia','idNoticia')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE noticia SET titulo = '" . $titulo . "', corpo = '" . $corpo . "', data = " . $data . ", referencia = '" . $referencia . "', imagem = '" . $imagem . "', categoria = " . $categoria . ", usuario = " . $usuario . " WHERE idNoticia = " . $idNoticia . ";";
            return app('db')->select($query);
        }
    }
}