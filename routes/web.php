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

<<<<<<< HEAD
$router->get("chat/{protocolo}/{texto}/{remetente}/{status}", "MensagensController@enviar");
=======
$router->get('/teste', function () use ($router) {
    
return  app('db')->select("SELECT * FROM users");
});


// $router->post("chat/{protocolo}/mensagens", "MensagensController@enviar");
>>>>>>> c7273855257de3b021216fcf96ab7eeb98d7f968

$router->get("chat/{protocolo}/mensagens" , "MensagensController@listar");

$router->get("chat/{idVisitante}", "ChatController@criarChat");

$router->get("chat/{protocolo}/finalizar", "ChatController@finalizarChat");

$router->get("chat/{protocolo}/atendente", "ChatController@insereAtendente");

$router->get("cadastrarVisitante[/{nome}/{telefone}/{sexo}/{idade}/{Local}]", "VisitanteController@cadastrarVisitante");

$router->get("listarporid/{id}", "AuditController@listarPorId");

$router->get("listarTodasPerguntas", "AuditController@listarTodasPerguntas");

$router->get("responder/{idPergunta}/{idResposta}", "AuditController@responder");

$router->get("responderTodas/{arrayPerguntas}/{arrayRespostas}", "AuditController@responderTodas");

$router->get("calcular/{arrayPerguntas}/{arrayRespostas}", "AuditController@calcular");

$router->post("cadastrarUsuario/{nome}/{eMail}/{sexo}/{telefone}/{CPF}/{DataNasc}", "UsuarioController@cadastarUsuario");

$router->post("cadastrarLocal/{cidade}/{bairro}", "LocalController@cadastrarLocal");

$router->get("mensagens/relatorio[/{filtros}]", "mensagensController@relatorioMensagens");