<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class AuditController extends BaseController
{
    private $resposta = [];
    private $perguntas =
    [
        "1" => [
            "enunciado" => "Com que freqüência você consome bebidas alcoólicas (cerveja, vinho, cachaça, etc.)?",
            "respostas" => [
                "0" => "Nunca",
                "1" => "Uma vez por mês ou menos",
                "2" => "2 a 4 vezes por mês",
                "3" => "2 a 3 vezes por semana",
                "4" => "4 ou mais vezes por semana"
            ]
        ],
        "2" => [
            "enunciado" => " Quantas doses, contendo álcool, você consome num dia em que normalmente bebe?",
            "respostas" => [
                "1" => "1 a 2",
                "2" => "3 a 4",
                "3" => "5 a 6",
                "4" => "7 a 9",
                "5" => "10 ou mais"
            ]
        ],
        "3" => [
            "enunciado" => "Com que freqüência que você consome 6 ou mais doses de bebida alcoólica em uma única ocasião?",
            "respostas" => [
                "0" => "Nunca",
                "1" => "Menos que mensalmente",
                "2" => "Mensalmente",
                "3" => "Semanalmente",
                "4" => "Diariamente ou quase diariamente"
            ]
        ],
        "4" => [
            "enunciado" => "Com que freqüência, durante os últimos doze meses, você percebeu que não conseguia parar de beber uma vez que havia começado?",
            "respostas" => [
                "0" => "Nunca",
                "1" => "Menos que mensalmente",
                "2" => "Mensalmente",
                "3" => "Semanalmente",
                "4" => "Diariamente ou quase diariamente"
            ]
        ],
        "5" => [
            "enunciado" => "Com que freqüência, durante os últimos doze meses, você deixou de fazer algo ou atender a um compromisso devido ao uso de bebidas alcoólicas?",
            "respostas" => [
                "0" => "Nunca",
                "1" => "Menos que mensalmente",
                "2" => "Mensalmente",
                "3" => "Semanalmente",
                "4" => "Diariamente ou quase diariamente"
            ]
        ],
        "6" => [
            "enunciado" => "Com que freqüência, durante os últimos doze meses, você precisou de uma primeira dose pela manhã para sentir-se melhor depois de uma bebedeira?",
            "respostas" => [
                "0" => "Nunca",
                "1" => "Menos que mensalmente",
                "2" => "Mensalmente",
                "3" => "Semanalmente",
                "4" => "Diariamente ou quase diariamente"
            ]
        ],
        "7" => [
            "enunciado" => "Com que freqüência você sentiu-se culpado ou com remorso depois de beber?",
            "respostas" => [
                "0" => "Nunca",
                "1" => "Menos que mensalmente",
                "2" => "Mensalmente",
                "3" => "Semanalmente",
                "4" => "Diariamente ou quase diariamente"
            ]
        ],
        "8" => [
            "enunciado" => "Com que freqüência, durante os últimos doze meses, você não conseguiu lembrar-se do que aconteceu na noite anterior porque havia bebido?",
            "respostas" => [
                "0" => "Nunca",
                "1" => "Menos que mensalmente",
                "2" => "Mensalmente",
                "3" => "Semanalmente",
                "4" => "Diariamente ou quase diariamente"
            ]
        ],
        "9" => [
            "enunciado" => "Você ou outra pessoa já se machucou devido a alguma bebedeira sua?",
            "respostas" => [
                "0" => "Nunca",
                "2" => " Sim, mas não nos últimos 12 meses ",
                "4" => " Sim, nos últimos 12 meses"
            ]
        ],
        "10" => [
            "enunciado" => "Algum parente, amigo, médico ou outro profissional de saúde mostrou-se preocupado com seu modo de beber ou sugeriu que você diminuísse a quantidade?",
            "respostas" => [
                "0" => "Nunca",
                "2" => " Sim, mas não nos últimos 12 meses ",
                "4" => " Sim, nos últimos 12 meses"
            ]
        ]
    ];

    public function listarPorId($id)
    {
        return $this -> perguntas[$id]["respostas"];
    }

    public function listarTodasPerguntas()
    {
        $resultado =[];
        $cont = 1;
        foreach ($this -> perguntas as $pergunta) {
            $resultado[$cont] = $pergunta["enunciado"];
            $cont++;
        }
        return $resultado;
    }

    public function responder($idPerg, $idResp){
        $this -> resposta[$idPerg] = $idResp;
        return $this -> resposta; 
    }
    
    public function responderTodas($arrayPerguntas, $arrayRespostas){
        $perguntas = explode(",",$arrayPerguntas);
        $respostasLocais = explode(",",$arrayRespostas);
        $cont = 0;
        foreach($perguntas as $pergunta) {
            $this ->responder($perguntas[$cont], $respostasLocais[$cont]);
            $cont++;
        }
    return $this ->resposta;
    }

    public function calcular($arrayPerguntas, $arrayRespostas){
        $perguntas = explode(",",$arrayPerguntas);
        $respostas = explode(",",$arrayRespostas);
        $tamanhoPer = count($perguntas);
        $tamanhoRes = count($respostas);
        if ($tamanhoPer <> $tamanhoRes){
            return response() -> json(
                [
                    'resposta' => "Numero de respostas diferentes do numero de perguntas!"
                ] );
        }else{
            $respostasLocais = $this -> responderTodas($arrayPerguntas, $arrayRespostas);
            $resultado = 0;
            foreach($perguntas as $pergunta) {
                $resultado = $resultado + $respostasLocais[$pergunta];
            }
            if ($resultado <= 7) {
                return response() -> json(
                    [
                        'resultado' => $resultado,
                        'resposta' => "Consumo de baixo risco ou abstêmios!"
                    ] );     
            } else if($resultado >= 8 & $resultado <=15) {
                return response() -> json(
                    [
                        'resultado' => $resultado,
                        'resposta' => "Consumo de risco!"
                    ] );
            }else if($resultado >= 16 & $resultado <=19) {
                return response() -> json(
                    [
                        'resultado' => $resultado,
                        'resposta' => "Uso nocivo ou consumo de alto risco!"
                    ] );
            }else if($resultado <=20) {
                return response() -> json(
                    [
                        'resultado' => $resultado,
                        'resposta' => "Provável dependência!"
                    ] );
            }
        }
    }  
}
