<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {

    }
    public function home()
    {
      return view('home/index',['inHome'=>true]);
    }

    public function about()
    {
      return view('home/about-us');
    }
}
