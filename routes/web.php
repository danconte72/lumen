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

$router->get('testeconte', function () use ($router) {
    return app('db')->select("select * from users");
});

// Teste AUDIT

$router->get("listarTodasPerguntas", "AuditController@listarTodasPerguntas");

$router->get("listarporid/{id}", "AuditController@listarPorId");

$router->get("responderTodas/{arrayPerguntas}/{arrayRespostas}", "AuditController@responderTodas");

$router->get("responder/{idPergunta}/{idResposta}", "AuditController@responder");

$router->get("calcular/{arrayPerguntas}/{arrayRespostas}", "AuditController@calcular");

// Chat

$router->get("chat", "ChatController@listarChat");

$router->get("chat/enviar/{protocolo}/{texto}/{remetente}/{status}", "MensagensController@enviar");

$router->get("chat/{protocolo}/mensagens" , "MensagensController@listar");

$router->get("chat/{idVisitante}", "ChatController@criarChat");

$router->get("chat/{protocolo}/finalizar", "ChatController@finalizarChat");

$router->get("chat/{protocolo}/atendente", "ChatController@insereAtendente");

$router->get("visitante", "VisitanteController@listarVisitante");

$router->get("cadastrarVisitante[/{nome}/{telefone}/{sexo}/{idade}/{Local}]", "VisitanteController@cadastrarVisitante");

$router->get("cadastrarUsuario/{nome}/{email}/{login}/{senha}/{sexo}/{telefone}/{cpf}/{datanasc}", "UsuarioController@cadastrarUsuario");

$router->get("cadastrarLocal/{cidade}/{bairro}", "LocalController@cadastrarLocal");

$router->get("local", "CategoriaController@listarLocal");

$router->get("usuarios", "UsuarioController@listarUsuarios");

$router->get("mensagens/relatorio[/{filtros}]", "MensagensController@relatorioMensagens");

$router->get("cadastrarCategoria/{nome}", "CategoriaController@cadastrarCategoria");

$router->get("listarCategoria", "CategoriaController@listarCategoria");