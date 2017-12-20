<?php

namespace App\Http\Controllers;

use App\Nazioni;
use App\Immagine;
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
        $nazione=new Nazioni();
        $request->validate(['name_it'=>'required',
                          'name_en'=>'required',
                          'name_de'=>'required']);

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
    public function show($nation_id)
    {
        $nazione=Nazioni::select('id','nome_en','nome_it','nome_de','sfondo','mappa')->where('id',$nation_id)->first();
        if($nazione==null)
          return redirect('admin/nations');
        $immagini=Immagine::where('nazioni_id','=',$nation_id)->orderby('ordine')->get();
        return view('admin.nation')
                ->with('nazione',$nazione)
                ->with('immagini',$immagini);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nazioni  $nazioni
     * @return \Illuminate\Http\Response
     */
    public function update($nation_id,Request $request)
    {
       if($request->has('delete'))
          return $this->destroy($nation_id);

       $nazione=Nazioni::where('id',$nation_id)->first();
       if($request->has('image-id'))
       {
         $immagine=Nazioni::where('id',$nation_id)->first()->immagini()->where('id',$request->input('image-id'))->first();
         if($request->input('map')!=null)
          $nazione->mappa=$immagine->indirizzo;
         if($request->input('background')!=null)
           $nazione->sfondo=$immagine->indirizzo;
        $nazione->save();
        return redirect()->back();

       }
       $request->validate(['name_it'=>'required',
                         'name_en'=>'required',
                         'name_de'=>'required']);
       $nazione->nome_it=$request->input('name_it');
       $nazione->nome_de=$request->input('name_de');
       $nazione->nome_en=$request->input('name_en');
       $nazione->save();
       return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nazioni  $nazioni
     * @return \Illuminate\Http\Response
     */
    public function destroy($nation_id)
    {
       $nazione=Nazioni::where('id',$nation_id)->first();
       foreach ( $nazione->immagini as $immagine) {
         Storage::disk('public')->delete($immagine->indirizzo);
       }
       Nazioni::destroy($nation_id);
       return redirect('admin/nations')->with('status', 'nation deleted');
    }
}
