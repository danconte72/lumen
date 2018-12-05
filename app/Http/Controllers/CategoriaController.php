<?php

namespace App\Http\Controllers;

class CategoriaController extends Controller

{
    public function cadastrarCategoria ($nome) {
        // return response()->json(
        //     [                 
        //         'id' => "123"
        //     ]);
        // return app('db')->select("SELECT idCategoria as id FROM categoria");

        $query = "INSERT INTO categoria (nome) VALUES (";
        $query .= "'" . $nome . "');";
        // $query += "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id;";
        return app('db')->select($query);
    }
    public function listarCategoria() {
    //     $categorias = [
    //         [
    //             "nome" => "Álcool"
    //         ],
    //         [
    //             "nome" => "Entorpecentes"
    //         ]
    //     ];
    //     return $categorias;
        return app('db')->select("SELECT nome FROM categoria;");
    }
}