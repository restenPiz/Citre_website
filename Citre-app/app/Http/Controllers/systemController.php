<?php

namespace App\Http\Controllers;

use Request;

class systemController extends Controller
{
    //Inicio dos meus metodos
    public function sendEmail()
    {
        $data = array(
            $nome=Request::input('nome'),
            $apelido=Request::input('apelido'),
            $email=Request::input('email'),
            $mensagem=Request::input('mensagem'),
        );

        Mail::to(Request::input('email'))->send(new SendMail($data));
        return new \App\Mail\newLaravelTips();
    }
}
