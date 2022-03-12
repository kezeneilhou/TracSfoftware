<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\LiasonOfficer;
use App\Models\Driver;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datas = Applicants::all();
      $liason = LiasonOfficer::all();
      $driver = Driver::all();
      return view('backend.applicants.index',[
        'datas' => $datas,
        'liason' => $liason,
        'drivers' => $driver,
        'pageTitle' => 'Participants Data',
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
        Applicants::create($request->all());
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function show(Applicants $applicants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicants $applicants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicants $applicants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicants  $applicants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicants $applicants)
    {
        //
    }
}
