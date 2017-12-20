<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nazioni;
use App\Immagine;
use App;
use Session;


//Controller che gestisce il front-end "vetrina"
class HomeController extends Controller
{
    //ritorna view home
    public function home(Request $request)
    {

      return view('home/index');
    }
    //ritorna view about
    public function about(Request $request)
    {
      return view('home/about-us');
    }
    //ritorna view contact
    public function contact(Request $request)
    {
      return view('home/contact-us');
    }
    //ritorna view projects
    public function projects(Request $request)
    {
      $nazioni=Nazioni::get();
      return view('home/projects')->with('nazioni',$nazioni);
    }
    //ritorna view services
    public function services(Request $request)
    {
      return view('home/services');
    }

    public function setLocale(Request $request)
    {
      $locale=strtolower($request->input('locale'));
      if($locale != 'de' && $locale != 'en' && $locale != 'it')
        $locale='en';

      Session::put('locale', $locale);
      return Redirect()->back();
    }
}
