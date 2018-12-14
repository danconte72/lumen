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
    
    public function listarUsuarios () {
        // $usuarios = [
        //     [ 
        //         "id" => "000001",
        //         "nome" => "volmar",
        //         "eMail" => "volmar@gmail.com",
        //         "sexo" => "Masculino",
        //         "telefone" => "49 3567-0000",
        //         "CPF" => "000.111.222-33",
        //         "DataNasc" => "24-12-1924"    
        //     ],  
        //     [
        //         "id" => "000002",
        //         "nome" => "guilherme",
        //         "eMail" => "guilhermer@gmail.com",
        //         "sexo" => "Masculino",
        //         "telefone" => "49 3567-1111",
        //         "CPF" => "012.345.678-90",
        //         "DataNasc" => "05-10-1998"
        //     ] 
        // ];
        return app('db')->select("SELECT idUsuario as id, nome, eMail as eMail, login, sexo, telefone, CPF, dataNasc FROM usuario");
    }
    
    public function cadastrarUsuario ($nome,$email,$login,$senha,$sexo,$telefone,$cpf,$datanasc,$idUsuario=null) {
        // return response()->json(
        //     [                 
        //         'id' => "|".$nome."|".$email."|".$login."|".$senha."|".$sexo."|".$telefone."|".$cpf."|".$datanasc
        //     ]);
        // return app('db')->select("SELECT idUsuario as id FROM usuario");
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