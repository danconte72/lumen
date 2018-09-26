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
