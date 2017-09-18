<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home()
  {
    $test_array = [1,2,3,4,5];
    return view('welcome',compact('test_array'));
  }
}
