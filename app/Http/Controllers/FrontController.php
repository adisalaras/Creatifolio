<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function details(){
        return view('front.details');
    }
    public function book(){
        return view('front.book');
    }
}
