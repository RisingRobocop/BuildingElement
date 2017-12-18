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
        $nazioni=Nazioni::select('id','nome_en','nome_it','nome_de')->orderby('ordine')->get();
        return view('admin.showNations')->with('nazioni',$nazioni);
    }

    /**
     * Show the form for creating a new resource.
     * mostra form di creazione nazioni
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('admin.showImages');

    }

    /**
     * Store a newly created resource in storage.
     * memorizza nuove nazioni nel database e salva immagini per la mappa e lo sfondo
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nazione=new Nazioni();
        $request->validate(['name_it'=>'required',
                          'name_en'=>'required',
                          'name_de'=>'required']);

        if ($request->hasFile('map') && $request->file('map')->isValid())
        {
          $nazione->mappa = $request->file('map')->store('','public');
        }

        if ($request->hasFile('background')&&$request->file('background')->isValid())
        {
            $nazione->sfondo = $request->file('background')->store('','public');
        }

        $nazione->nome_en=$request->input('name_en');
        $nazione->nome_it=$request->input('name_it');
        $nazione->nome_de=$request->input('name_de');
        $nazione->save();
        return redirect('admin/nations')->with('status', 'nation created.');

    }

    public function sort(Request $request)
    {

      $items=$request->input('item');
      $i=0;
      foreach ($items as $id)
      {
        $nazione= Nazioni::where('id',$id)->first();
        $nazione->ordine=$i;
        $nazione->save();
        $i++;
      }
      return response()->json(['response' => 'done']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nazioni  $nazioni
     * @return \Illuminate\Http\Response
     */
    public function show(Nazioni $nazioni)
    {

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
