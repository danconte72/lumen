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

    public function listarVisitante()
    {
       $visitante = [
            [
                "id"=> "01",
                "nome"=> "Andrei Maurina",
                "telefone"=> "3567",
                "idade"=> "19",
                "uuid"=> "007"
            ],
            [
                "id"=> "02",
                "nome"=> "Guilherme",
                "telefone"=> "3563",
                "idade"=> "20",
                "uuid"=> "024"
            ]
        ];
        return $visitante;
    }

}
