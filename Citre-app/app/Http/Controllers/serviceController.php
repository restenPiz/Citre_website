<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    public function firstService()
    {
        return view('services.firstServices');
    }
    public function secondService()
    {
        return view('services.secondServices');
    }
    public function thirdService()
    {
        return view('services.thirdServices');
    }
    public function fourthService()
    {
        return view('services.fourthServices');
    }
    public function fifthService()
    {
        return view('services.fifthServices');
    }
    public function sixthService()
    {
        return view('services.sixthServices');
    }
}
