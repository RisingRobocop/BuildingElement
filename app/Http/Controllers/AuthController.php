<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{

    //tranne il logout tutti i metodi possono esere chiamati solo se non si è loggati
    public function __construct()
    {
       $this->middleware('guest')->except('logout');
    }

    //mostra la form di registrazione per creare un utente
    public function create()
    {
        //
        return view('auth/register');
    }

    //salva l'utente nel database
    public function store(Request $request)
    {
        //
        $request->validate(['name'=>'required',
                          'password'=>'required']);
      $user=new User();
      $user->name=$request->name;
      $user->password=bcrypt($request->password);
      $user->save();
          dd('done');
      redirect('/');
    }

    //mostra la form di login
    public function Showlogin()
    {

    }

    //prova ad autenticare
    public function loginAttempt(Request $request)
    {

    }

    //chiude la sessione
    public function logout(Request $request)
    {

    }
}
