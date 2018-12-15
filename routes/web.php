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

/* Teste AUDIT */

$router->get("listarTodasPerguntas", "AuditController@listarTodasPerguntas");

$router->get("listarporid/{id}", "AuditController@listarPorId");

$router->get("responderTodas/{arrayPerguntas}/{arrayRespostas}", "AuditController@responderTodas");

$router->get("responder/{idPergunta}/{idResposta}", "AuditController@responder");

$router->get("calcular/{arrayPerguntas}/{arrayRespostas}", "AuditController@calcular");

/* Chat */

//Listar Atendimentos
$router->get("chat", "ChatController@listarChat");

//Enviar Mensagens
$router->get("chat/enviar/{protocolo}/{texto}/{remetente}/{status}", "MensagensController@enviar");

//Criar novo chat
$router->get("chat/{idVisitante}", "ChatController@criarChat");

//Listar Mensagens
$router->get("chat/{protocolo}/mensagens" , "MensagensController@listar");

//Inserir um atendente
$router->get("chat/{protocolo}/atendente", "ChatController@insereAtendente");

//Finalizar um chat
$router->get("chat/{protocolo}/finalizar", "ChatController@finalizarChat");

//Emitir Relatórios de mensagens
$router->get("relatorio_mensagem[/{status}/{remetente}/{idUsuario}]", "MensagensController@relatorioMensagens");
/* $router->get("mensagens/relatorio[/{filtros}]", "MensagensController@relatorioMensagens"); */

/* Visitante */

//Listar os Visitantes
$router->get("visitantes", "VisitanteController@listarVisitante");

//Cadastrar um Visitante
$router->get("visitante/cadastrar[/{nome}/{sexo}/{idade}/{Local}/{telefone}/{idVisitante}]", "VisitanteController@cadastrarVisitante");

/* Usuário */

//Listar Usuários
$router->get("usuarios", "UsuarioController@listarUsuarios");

//Cadastrar Usuário
$router->get("usuario/cadastrar/{nome}/{email}/{login}/{senha}/{sexo}/{telefone}/{cpf}/{datanasc}[/{idUsuario}]", "UsuarioController@cadastrarUsuario");

/* Local */

//Listar local
$router->get("locais", "LocalController@listarLocal");

//Cadastrar um local
$router->get("local/cadastrar/{cidade}/{bairro}[/{idLocal}]", "LocalController@cadastrarLocal");

/* Categoria */

//Listar as Categorias
$router->get("categorias", "CategoriaController@listarCategoria");

//Cadastrar Categoria
$router->get("categoria/cadastrar/{nome}[/{idCategoria}]", "CategoriaController@cadastrarCategoria");

/* Cargo */

//Listar os Cargos
$router->get("cargos", "CargoController@listarCargo");

//Cadastrar um Cargo
$router->get("cargo/cadastrar/{nome}/{setor}[/{idCargo}]", "CargoController@cadastrarCargo");

/* Entorpecente */

//Listar os Entorpecentes
$router->get("entorpecentes", "EntorpecenteController@listarEntorpecente");

//Cadastrar um Entorpecente
$router->get("entorpecente/cadastrar/{nome}[/{idEntorpecente}]", "EntorpecenteController@cadastrarEntorpecente");

/* Notícias */

//Listar as Notícias
$router->get("feed/listar", "NoticiaController@listarNoticia");

//Cadastrar uma Notícia
$router->get("cadastrar/noticia/{titulo}/{corpo}/{referencia}/{imagem}/{categoria}/{usuario}[/{idNoticia}]", "NoticiaController@cadastrarNoticia");