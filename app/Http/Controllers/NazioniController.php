<?php

namespace App\Http\Controllers;

use App\Nazioni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NazioniController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     * mostra tutte le nazioni
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.nations');
    }

    /**
     * Show the form for creating a new resource.
     * mostra form di creazione nazioni
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('admin.createNation');

    }

    /**
     * Store a newly created resource in storage.
     * memorizza nuove nazioni nel database e salva immagini per la mappa e lo sfondo
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('sfondo') && $request->file('sfondo')->isValid())
        {
          $path = $request->photo->store('','public');
          dd('path');
        }

        $request->validate(['nome_it'=>'required',
                          'nome_en'=>'required',
                          'nome_de'=>'required',
                          'platform_id'=>'required']);
        $nazione->nome_it=$request->input('nome_it');
        $nazione->nome_en=$request->input('nome_en');
        $nazione->nome_de=$request->input('nome_de');
        $party->slots=$request->input('slots');
        $party->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nazioni  $nazioni
     * @return \Illuminate\Http\Response
     */
    public function show(Nazioni $nazioni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nazioni  $nazioni
     * @return \Illuminate\Http\Response
     */
    public function edit(Nazioni $nazioni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nazioni  $nazioni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nazioni $nazioni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nazioni  $nazioni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nazioni $nazioni)
    {
        //
    }
}
