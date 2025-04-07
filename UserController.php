<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getusuarios(){

        $usuarios =  
        [
            ["id" => "1", "nome" => "gaberil", "grupo" => "Mago"],
            ["id" => "2", "nome" => "leo", "grupo" => "Cavaleiro"],
            ["id" => "3", "nome" => "lucas", "grupo" => "Arqueiro"],
            ["id" => "4", "nome" => "grabiel", "grupo" => "Ladino"],
            ["id" => "5", "nome" => "ares", "grupo" => "Mago"],
            ["id" => "6", "nome" => "aries", "grupo" => "Curandeiro"],
            ["id" => "7", "nome" => "2121", "grupo" => "Guerreiro"],
            ["id" => "8", "nome" => "wadasda", "grupo" => "Assassino"],
            ["id" => "9", "nome" => "art", "grupo" => "Lançador de Facas"],
            ["id" => "10", "nome" => "igris", "grupo" => "Defensor"]
        ];

    return response()->json($usuarios);
}
}
