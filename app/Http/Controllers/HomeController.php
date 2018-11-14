<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends ViewCompilingController
{
     public function index() {
////        dd(session()->all());
//        $this->viewData['page_title'] = "This is my admin dashboard";
        return $this->buildTemplate('home');
    }
//     public function index2() {
//////        dd(session()->all());
////        $this->viewData['page_title'] = "This is my admin dashboard";
//        return view('Registration');
//    }
}
