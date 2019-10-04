<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class ControllerPlace extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $places = Place::all();
      $titolo = "Place";

      return view('indexPlace', compact('places', 'titolo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $titolo = "Place";

      return view('createPlace', compact('titolo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $datiVerificati = $request -> validate([
        'name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'nation' => 'required'
      ]);
      $place = Place::create($datiVerificati);

      return redirect('/indexPlace');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // $place = Place::findOrFail($id);
      // $titolo = "Place";
      //
      // return view('editPlace', compact('place', 'titolo'));
      $place = Place::findOrFail($id);
      $titolo = "Place";

      return view('editPlace', compact('place', 'titolo'));

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
      $datiVerificati = $request -> validate([
        'name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'nation' => 'required'
      ]);
      Place::whereId($id) -> update($datiVerificati);

      return redirect('/indexPlace');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $place = Place::findOrFail($id);
      $place -> delete();

      return redirect('/indexPlace');
    }
}
