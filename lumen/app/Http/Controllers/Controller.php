<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
}

$router->get("listarporid/{id}", "AuditController@listarPorId");

$router->get("listarTodasPerguntas", "AuditController@listarTodasPerguntas");

$router->get("responder/{idPergunta}/{idResposta}", "AuditController@responder");

$router->get("responderTodas/{arrayPerguntas}/{arrayRespostas}", "AuditController@responderTodas");

$router->get("calcular/{arrayPerguntas}/{arrayRespostas}", "AuditController@calcular");