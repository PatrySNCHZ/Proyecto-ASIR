<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller {

    public function inicio() {

        return view('welcome');
    }

    //public function crud() {

    //    return view('welcomecrud');
    // }

    public function notices() {

        return view('notices');
    }

    public function articles() {

        return view('articles');
    }

    public function gotw() {

        return view('gotw');
    }

    public function contactus() {

        return view('contactus');
    }

}

;




