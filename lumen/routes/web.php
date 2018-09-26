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

// $router->post("chat/{protocolo}/mensagens", "MensagensController@enviar");

// $router->get("chat/{protocolo}/mensagens" , "MensagensController@listar");

// $router->get("chat", "ChatController@criarChat");

// $router->get("chat/{protocolo}/finalizar", "ChatController@finalizarChat");

// $router->get("chat/{protocolo}/atendente", "ChatController@insereAtendente");

<<<<<<< HEAD
// $router->get("cadastrarVisitante[/{nome}][/{telefone}][/{sexo}][/{idade}][/{idLocal}]", "VisitanteController@CadastrarVisitante");
=======
$router->get("cadastrarVisitante[/{nome}/{telefone}/{sexo}/{idade}/{idLocal}]", "VisitanteController@cadastrarVisitante");
>>>>>>> 86f4d70d56c650d65f7d5039f3b3f8cb1384cdce

// $router->get("listarporid/{id}", "AuditController@listarPorId");

// $router->get("listarTodasPerguntas", "AuditController@listarTodasPerguntas");

// $router->get("responder/{idPergunta}/{idResposta}", "AuditController@responder");

// $router->get("responderTodas/{arrayPerguntas}/{arrayRespostas}", "AuditController@responderTodas");

// $router->get("calcular/{arrayPerguntas}/{arrayRespostas}", "AuditController@calcular");

// $router->get("cadastrarUsuario/{nome}/{eMail}/{sexo}/{telefone}/{CPF}/{DataNasc}}", "UsuarioController@cadastarUsuario");

$router->get("cadastrarLocal/{cidade}/{bairro}", "LocalController@cadastrarLocal");
