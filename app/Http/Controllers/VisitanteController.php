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

    public function cadastrarVisitante ($nome=null,$telefone=null,$sexo=null,$idade=null,$idLocal=null)
    {
        return response() -> json(
            [
                "idVisitante"=>"1"
            ]
        );
    }
}
