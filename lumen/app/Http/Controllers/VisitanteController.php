<?php

namespace App\Http\Controllers;

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

    public function cadastrarVisitante ($nome,$telefone,$sexo,$idade,$idLocal)
    {
        return response() -> json(
            [
                "idVisitante"=>"1"
            ]
        );
    }
}
