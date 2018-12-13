<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class NoticiaController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function listarNoticia () {
        // return response()->json(
        // $noticias = [
        // {
        //     "titulo": "A Maconha na Atualidade",
        //     "corpo": "Uma droga muito comum entre os jovens...",     
        //     "categoria" : [
        //             {
        //          "nome": "maconha"   
        //             },
        //             {
        //          "nome": "cocaína"  
        //     ]  
        // ]
        return app('db')->select("SELECT idNoticia as id, titulo, corpo, data, referencia, hora, imagem, categoria, usuario FROM noticia");
    }

    public function cadastrarNoticia ($titulo,$corpo,$referencia,$imagem,$categoria,$usuario,$idNoticia=null) {
        // return response()->json(
        // $cadastrar_nova_noticia  = [
        // { 
        //     "titulo": "Cocaína faz Mal",
        //     "corpo": "Uma drogra que causa um grande estrago...",
        //     "categoria": [
        //             {
        //                 "nome": "cocaína"   
        //             },
        //             {
        //                 "nome": "cocaína"      
        //             }
        //         ],
        //         "autor": "AZInformática"    
        //     },
        // ]
        // return app('db')->select("SELECT idNoticia as id FROM noticia");
        if ($idNoticia == null) {
            $query = "INSERT INTO noticia (titulo, corpo, referencia, imagem, categoria, usuario) VALUES (";
            $query .= "'" . $titulo . "','" . $corpo . "','" . $referencia . "','" . $imagem . "'," . $categoria . "," . $usuario . ");";
            // $query = "SELECT currval(pg_get_serial_sequence('entorpecente','idEntorpecente')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE noticia SET titulo = '" . $titulo . "', corpo = '" . $corpo . "', data = " . $data . ", referencia = '" . $referencia . "', hora = " . $hora . ", imagem = '" . $imagem . "', categoria = " . $categoria . ", usuario = " . $usuario . " WHERE idNoticia = " . $idNoticia . ");";
            return app('db')->select($query);
        }
    }
}