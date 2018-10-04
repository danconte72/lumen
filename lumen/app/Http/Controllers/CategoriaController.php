<?php

namespace App\Http\Controllers;

class CategoriaController extends Controller

{
    public function cadastrarCategoria ($nome) {

        return response()->json(
            [                 
                'id' => "123"
            ]);
    }
    public function listarCategoria() {
        $categorias = [
            [
                "nome" => "Álcool"
            ],
            [
                "nome" => "Entorpecentes"
            ]
        ];
        return $categorias;
    }
}