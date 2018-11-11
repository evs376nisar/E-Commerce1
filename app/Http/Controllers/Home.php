<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
     public function index() {
////        dd(session()->all());
//        $this->viewData['page_title'] = "This is my admin dashboard";
        return view('home');
    }
     public function index2() {
////        dd(session()->all());
//        $this->viewData['page_title'] = "This is my admin dashboard";
        return view('Registration');
    }
}
