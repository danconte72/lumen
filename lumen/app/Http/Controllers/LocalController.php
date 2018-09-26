<?php

namespace App\Http\Controllers;

class LocalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function cadastrarLocal ($cidade,$bairro) {

        return response()->json(
            [                 
                'id' => "1"
            ]);
    }
}
