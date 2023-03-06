<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function firstService()
    {
        return view('services.firstService');
    }
}
