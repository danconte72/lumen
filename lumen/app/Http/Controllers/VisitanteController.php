<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class VisitanteController extends Controller
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

    public function CadastrarVistante ($nome,$telefone,$sexo,$idade,$idlocal)
    {
        return response() -> json(
            [
                "idVisitante"=>"1"
            ]
        );
    }
}
