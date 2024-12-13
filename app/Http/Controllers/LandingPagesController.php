<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    public function index(){
        return view('LandingPage.index');
    }

    public function login(){
        return view('LandingPage.signup');
    }

    public function chekticket(){
        return view('LandingPage.check');
    }

    public function createticket(){
        return view('LandingPage.createticket');
    }

    public function detailticket(){
        return view('LandingPage.signup');
    }
}
