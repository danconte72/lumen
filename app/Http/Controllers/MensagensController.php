<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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

    public function listar($protocolo)
    {
        // $mensagens = [
        //     [
        //         "texto"=> "bom dia, tudo bem?",
        //         "data"=> "22/09/2018",
        //         "hora"=> "10:11",
        //         "remetente"=> "V",
        //         "status"=> "E"
        //     ],
        //     [
        //         "texto"=> "bom dia, tudo e você?",
        //         "data"=> "22/09/2018",
        //         "hora"=> "10:12",
        //         "remetente"=> "A",
        //         "status"=> "E"
        //     ],
        // ];
        // return $mensagens;
        return app('db')->select("SELECT * FROM mensagem WHERE protocolo = " . $protocolo . ";");
    }
    
    public function relatorioMensagens($filtros=null)
    {
        // return response()->json(
        //     [
        //         "id" =>  "001",
        //         "status" => "E",
        //         "remetente" => "A"
        //     ]
        // );
        return app('db')->select("SELECT idMensagem as id, status, remetente FROM mensagem;");
    }

    public function enviar($protocolo,$texto,$remetente,$status)
    {
        // return ["status"=> "Ok."];
        // return app('db')->select("SELECT status FROM mensagem;");
        $query = "INSERT INTO mensagem (protocolo, texto, data, hora, remetente, status) VALUES (";
        $query .= "" . $protocolo . ",'" . $texto . "','" . $data . "','" . $hora . "','" . $remetente . "','" . $status . "');";
        // $query = "SELECT currval(pg_get_serial_sequence('mensagem','idMensagem')) as id";
        return app('db')->select($query);
    }
}