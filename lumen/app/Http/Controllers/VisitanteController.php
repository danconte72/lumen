<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
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
