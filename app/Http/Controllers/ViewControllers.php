<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewControllers extends Controller
{
    public function home(){
        return view('Layout/Pages/home');
            }
            public function concours(){
        return view('Layout/Pages/concours');
            }
            public function profiles(){
        return view('Layout/Pages/profiles');
            }
            public function connexion(){
        return view('Layout/Pages/connexion');
            }
            public function inscription(){
        return view('Layout/Pages/inscription');
            }
}
