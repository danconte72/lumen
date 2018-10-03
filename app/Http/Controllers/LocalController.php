<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class LocalController extends BaseController
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
