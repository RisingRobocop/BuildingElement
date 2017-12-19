<?php

namespace App\Http\Controllers;

use App\Immagine;
use App\Nazioni;
use Illuminate\Http\Request;

class ImmaginiController extends Controller
{

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
