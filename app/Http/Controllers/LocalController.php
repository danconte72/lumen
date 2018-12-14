<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Laravel\Lumen\Routing\Controller as BaseController;

class LocalController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function listarLocal ()
    {
        return app('db')->select("SELECT idLocal as id, cidade, bairro FROM local;");
    }
    
    public function cadastrarUsuario ($cidade,$bairro,$idLocal=null)
    {
        if ($idLocal == null) {
            $query = "INSERT INTO local (cidade, bairro) VALUES (";
            $query .= "'" . $cidade . "','" . $bairro . "');";
            // $query = "SELECT currval(pg_get_serial_sequence('local','idLocal')) as id";
            return app('db')->select($query);
        } else {
            $query = "UPDATE local SET cidade = '" . $cidade . "', bairro = '" . $bairro . "' WHERE idLocal = " . $idLocal . ";";
            return app('db')->select($query);
        }
    }
}