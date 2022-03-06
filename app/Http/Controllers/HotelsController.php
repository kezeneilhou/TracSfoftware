<?php

namespace App\Http\Controllers;

use App\Models\Hotels;
use App\Models\LiasonOfficer;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $liason = LiasonOfficer::all();
      $datas = Hotels::all();
      return view('backend.hotels.index',[
        'pageTitle' => 'Hotels',
        'datas' => $datas,
        'liason' => $liason,
      ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hotels::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function show(Hotels $hotels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotels $hotels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotels $hotels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotels $hotels)
    {
        //
    }
}
