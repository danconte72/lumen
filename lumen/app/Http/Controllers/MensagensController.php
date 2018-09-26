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
    
    public function relatorioMensagens($idUsuario, $status, $remetente)
    {
        return response()->json(
            [
                "idUsuario" =>  "001",
                "status" => "E",
                "remetente" => "A"
            ]
        );
    }
}