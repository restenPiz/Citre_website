<?php

namespace App\Http\Controllers;

use Request;

class systemController extends Controller
{
    //Inicio dos meus metodos
    public function sendEmail()
    {
        $nome=Request::input('nome');
        $apelido=Request::input('apelido');
        $email=Request::input('email');
        $mensagem=Request::input('mensagem');

        return new \App\Mail\newLaravelTips();
    }
}
