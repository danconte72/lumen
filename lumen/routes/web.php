<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get("listarporid/{id}", "AuditController@listarPorId");

$router->get("listarTodasPerguntas", "AuditController@listarTodasPerguntas");

$router->get("responder/{idPergunta}/{idResposta}", "AuditController@responder");

$router->get("responderTodas/{arrayPerguntas}/{arrayRespostas}", "AuditController@responderTodas");

$router->get("calcular/{arrayPerguntas}/{arrayRespostas}", "AuditController@calcular");

$router ->post("cadastrarUsuario/{$nome}/{$eMail}/{$sexo}/{$telefone}/{$CPF}/{$DataNasc}}", "UsuarioController@cadastarUsuario");

$router ->post("cadastrarLocal/{$cidade}/{$bairro}", "LocalController@cadastrarLocal");