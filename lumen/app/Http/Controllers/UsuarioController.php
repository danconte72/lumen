<?php

namespace App\Http\Controllers;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function cadastrarUsuario ($nome,$eMail,$sexo,$telefone,$CPF,$DataNasc) {

        return response()->json(
            [                 
                'id' => "1"
            ]);
    }
}
