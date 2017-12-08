<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function showlogin()
    {
      return view('auth/login');
    }

    //prova ad autenticare
    public function login(Request $request)
    {
      if (Auth::attempt(['name' => $request->user, 'password' => $request->password],$request->remember)) {
            // autenticazione passata...
            return redirect('/');
        }
      return redirect('/login');
    }

    //chiude la sessione
    public function logout(Request $request)
    {
      Auth::logout();
      return redirect('/');
    }
}
