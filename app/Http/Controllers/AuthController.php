<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    //salva l'utente nel database
    public function store(Request $request)
    {
        //
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
