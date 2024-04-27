<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // public function home(){
    //     return view('welcome');
    // }

    public function history(){
        return view('history');
    }

    public function prova(){
        return view('prova');
    }

}
