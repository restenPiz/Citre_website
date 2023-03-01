<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class systemController extends Controller
{
    //Inicio dos meus metodos
    public function sendEmail()
    {
        return new \App\Mail\newLaravelTips();
    }
}
