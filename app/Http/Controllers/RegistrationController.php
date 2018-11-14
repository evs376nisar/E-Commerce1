<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;

class RegistrationController extends ViewCompilingController {
    public function index() {
      return $this->buildTemplate('Registration');
    }
}
