<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class MensagensController extends BaseController
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

    public function enviar($texto, $remetente, $status)
    {
        return ["status"=> "Ok."];
    }

    public function listar($protocolo)
    {
        $mensagens = [
            [
                "texto"=> "bom dia, tudo bem?",
                "data"=> "22/09/2018",
                "hora"=> "10:11",
                "remetente"=> "V",
                "status"=> "E"
            ],
            [
                "texto"=> "bom dia, tudo e você?",
                "data"=> "22/09/2018",
                "hora"=> "10:12",
                "remetente"=> "A",
                "status"=> "E"
            ],
        ];
        return $mensagens;
    }
<<<<<<< HEAD:lumen/app/Http/Controllers/MensagensController.php
=======
    
    public function relatorioMensagens($filtros)
    {
        return response()->json(
            [
                "id" =>  "001",
                "status" => "E",
                "remetente" => "A"
            ]
        );
    }
>>>>>>> cb4eddddd07d6b8a967be09bffa562af1d760a34:app/Http/Controllers/MensagensController.php
}