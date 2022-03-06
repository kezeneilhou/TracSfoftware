<?php

namespace App\Http\Controllers;

use App\Models\LiasonOfficer;
use Illuminate\Http\Request;

class LiasonOfficerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = LiasonOfficer::all();
        return view('backend.liason.index',[
          'datas' => $datas,
          'pageTitle' => 'Liason Officers',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      LiasonOfficer::create($request->all());
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LiasonOfficer  $liasonOfficer
     * @return \Illuminate\Http\Response
     */
    public function show(LiasonOfficer $liasonOfficer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LiasonOfficer  $liasonOfficer
     * @return \Illuminate\Http\Response
     */
    public function edit(LiasonOfficer $liasonOfficer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LiasonOfficer  $liasonOfficer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiasonOfficer $liasonOfficer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LiasonOfficer  $liasonOfficer
     * @return \Illuminate\Http\Response
     */
    public function destroy(LiasonOfficer $liasonOfficer)
    {
        //
    }
}
