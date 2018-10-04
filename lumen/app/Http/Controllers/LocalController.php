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
    public function cadastrarLocal ($cidade,$bairro) {

        return response()->json(
            [                 
                'id' => "1"
            ]);
    }
    public function listarLocal () 
    {
        $local = [
            [
                "cidade" => "cacador"   ,         
                "bairro" => "Municipios"
            ],
            [
                "cidade" => "calmon",
                "bairro" => "centro"
            ]
        ];
        return $local;
    }
}
