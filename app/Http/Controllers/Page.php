<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page extends Controller{

  public function new(){

      return view('new');
  }

}
