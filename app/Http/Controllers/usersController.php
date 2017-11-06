<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller {

    public function getUsers() {

        $usuarios = [
            0 => [
                'usuario' => 'João',
                'funcao' => 'administrador'
            ],
            1 => [
                'usuario' => 'Maria',
                'funcao' => 'moderador'
            ],
            2 => [
                'usuario' => 'José',
                'funcao' => 'usuario'
            ]
        ];

        return view('usuarios', compact('usuarios'));
    }

}