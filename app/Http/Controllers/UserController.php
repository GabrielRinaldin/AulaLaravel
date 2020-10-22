<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        return view('usuarios',
            [
                'texto' => 'Lista de usuarios',
                'checagem' => false,
                'usuarios' => ['usuario1', 'usuario2', 'usuario3', 'usuario4']
            ]);
    }

}

