<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function react()
  {
    return view('react_test');
  }
  public function test()
  {
    return view('react_test2');
  }
}
