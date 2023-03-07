<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function firstService()
    {
        return view('Services.firstServices');
    }
    public function secondService()
    {
        return view('Services.secondServices');
    }
    public function thirdService()
    {
        return view('Services.thirdServices');
    }
    public function fourthService()
    {
        return view('Services.fourthServices');
    }
    public function fifthService()
    {
        return view('Services.fifthServices');
    }
    public function sixthService()
    {
        return view('Services.sixthServices');
    }
}
