<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class ChatController extends BaseController
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

    public function criarChat($idVisitante)
    {
        // return ["protocolo" => "p1"];
        $query = "INSERT INTO mensagem (protocolo, texto, data, hora, remetente, status) VALUES (";
        $query .= "" . $protocolo . ",'" . $texto . "','" . $data . "','" . $hora . "','" . $remetente . "','" . $status . "');";
        // $query = "SELECT currval(pg_get_serial_sequence('mensagem','idMensagem')) as id";
        return app('db')->select($query);
    }

    public function finalizarChat($protocolo)
    {
        return ["Status" => "encerrado"];
    }

    public function insereAtendente($protocolo)
    {
        return ["id" => "26"];
    }

    public function listarChat()
    {
    // {
    //     return [
    //             "id" => "1",
    //             "id" => "2"
    //             ];
    // }
    return app('db')->select("SELECT texto, data, hora, remetente, status FROM mensagem;");
    }
}
