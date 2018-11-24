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
        // return response()->json(
        //     [                 
        //         'id' => "1"
        //     ]);
        return app('db')->select("SELECT idLocal FROM local;");
    }
    public function listarLocal () 
    {
        // $local = [
        //     [
        //         "cidade" => "cacador"   ,         
        //         "bairro" => "Municipios"
        //     ],
        //     [
        //         "cidade" => "calmon",
        //         "bairro" => "centro"
        //     ]
        // ];
        // return $local;
        return app('db')->select("SELECT cidade, bairro FROM local;");
    }
}
