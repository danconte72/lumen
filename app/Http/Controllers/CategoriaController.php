<?php

namespace App\Http\Controllers;

class CategoriaController extends Controller

{
    public function cadastrarCategoria ($nome) {
        // return response()->json(
        //     [                 
        //         'id' => "123"
        //     ]);
        return app('db')->select("SELECT idCategoria FROM categoria");
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