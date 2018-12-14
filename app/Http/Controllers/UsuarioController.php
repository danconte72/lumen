<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class UsuarioController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function listarUsuarios ()
    {
        return app('db')->select("SELECT idUsuario as id, nome, eMail as eMail, login, sexo, telefone, CPF, dataNasc FROM usuario");
    }
    
    public function cadastrarUsuario ($nome,$email,$login,$senha,$sexo,$telefone,$cpf,$datanasc,$idUsuario=null)
    {
        if ($idUsuario == null) {
            $query = "INSERT INTO usuario (nome, email, login, senha, sexo, telefone, cpf, datanasc) VALUES (";
            $query .= "'" . $nome . "','" . $email . "','" . $login . "','" . $senha . "'," . $sexo . ",'" . $telefone . "','" . $cpf . "','" . $datanasc . "');";
            // $query = "SELECT currval(pg_get_serial_sequence('usuario','idUsuario')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE usuario SET nome = '" . $nome . "', email = '" . $email . "', login = '" . $login . "', senha = '" . $senha . "', sexo = " . $sexo . ", telefone = '" . $telefone . "', cpf = '" . $cpf . "', datanasc = '" . $datanasc . "' WHERE idUsuario = " . $idUsuario . ";";
            return app('db')->select($query);
        }
    }
}