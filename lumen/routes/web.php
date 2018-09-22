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

$router-post("/chat/{protocolo}/mensagens", "MensagensController@enviar");
$router-get("/chat/{protocolo}/mensagens" , "MensagensCOntroller@listar");
$router-get("/chat", "ChatController@criarChat");
$router-get("/chat/{protocolo}/finalizar", "ChatController@finalizarChat");
$router-get("/chat/{protocolo}/atendente", "ChatController@insereAtendente");