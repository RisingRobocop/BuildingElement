<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nazioni;
use App\Immagine;


//Controller che gestisce il front-end "vetrina"
class HomeController extends Controller
{
    //ritorna view home
    public function home()
    {
      return view('home/index');
    }
    //ritorna view about
    public function about()
    {
      return view('home/about-us');
    }
    //ritorna view contact
    public function contact()
    {
      return view('home/contact-us');
    }
    //ritorna view projects
    public function projects()
    {
      $nazioni=Nazioni::get();
      return view('home/projects')->with('nazioni',$nazioni);
    }
    //ritorna view services
    public function services()
    {
      return view('home/services');
    }
}
