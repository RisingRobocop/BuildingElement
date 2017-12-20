<?php

namespace App\Http\Controllers;

use App\Immagine;
use App\Nazioni;
use Illuminate\Http\Request;

class ImmaginiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $nation_id)
    {
        $immagine=new Immagine();
        $immagine->nazioni_id=$nation_id;
        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
          $immagine->indirizzo = $request->file('image')->store($nation_id,'public');
          $immagine->save();
          return redirect()->back();

        }
        return redirect()->back();
    }

    public function sort(Request $request)
    {

      $items=$request->input('item');
      $i=0;
      foreach ($items as $id)
      {
        $immagine= Immagine::where('id',$id)->first();
        $immagine->ordine=$i;
        $immagine->save();
        $i++;
      }
      return response()->json(['response' => 'done']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Immagine::destroy($id);
        return response()->json(['response' => 'done']);
    }
}
