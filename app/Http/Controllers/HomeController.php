<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //la fonction qui retourne la page home.blade.php
    public function home()
    {
        return view('home.home');
    }

    //la fonction qui retourne la page about.blade.php
    public function about()
    {
        return view('home.about');
    }

    public function createMission()
    {
        return view('home.createMission');
    }

}

