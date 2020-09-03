<?php

namespace App\Http\Controllers;
use App\Artikel;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('artikels.index',
        ['artikels'=>$artikels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'titel' => 'required',
          'content' => 'required',
          'auteur' => 'required'
      ]);

      Artikel::create($request->all());

      return redirect()->route('artikels.index')
      ->with('success','Artikel is aangemaakt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Artikel $artikel)
     {
         return view('artikels.show',['artikel' => $artikel]);
      }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
          return view('artikels.edit',['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Artikel $artikel)
     {
          $request->validate([
              'titel' => 'required',
              'content' => 'required',
              'auteur' => 'required'
          ]);

          $artikel->update($request->all());

          return redirect()->route('artikels.index')
          ->with('success','Artikel succesvol geupdate');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(Artikel $artikel)
     {
         $artikel->delete();

         return redirect()->route('artikels.index')
         ->with('success','Artikel succesvol verwijderd');

     }
}
