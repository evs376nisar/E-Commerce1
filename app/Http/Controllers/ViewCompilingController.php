<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewCompilingController extends Controller {

    public function buildTemplate($pagename = '') {
//        dd($pagename);
        $data = array();
//        dd($data);
        $section = config('pages.'.$pagename.'.section');
        dd($pagename);
        $data['sections'] = $sections;
//        dd($data['sections']);
        return view('lyouts.'.config('pages.'.$pagename.'.lyouts'), $data);
//        dd($data);
//        return view('lyouts.'.config('pages.' . $pagename . '.layout'), $data);
    }

}
