<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class UsuarioController extends BaseController
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
