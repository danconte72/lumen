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
        return ["protocolo" => "p1"];
    }

    public function finalizarChat($protocolo)
    {
        return ["Status" => "encerrado"];
    }

    public function insereAtendente($protocolo)
    {
        return ["id" => "26"];
    }
}
