<?php

namespace App\Http\Controllers;

use App\Models\AppelCandidature;
use Illuminate\Http\Request;
use App\Models\Formation;

class AppelCandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appelCandidatures = AppelCandidature::all();
        return view('appelCandidatures.index', compact('appelCandidatures'));
    }

    /**
     * create the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {   
        $formations = Formation::all();
        return view('appelCandidatures.create', [
            'formations' => $formations
        ]);   
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        AppelCandidature::create($request->all());
    
        return redirect()->route('appels.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppelCandidature  $appelCandidature
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appelCandidature = AppelCandidature::find($id);
        return view('appelCandidatures.show', compact('appelCandidature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppelCandidature  $appelCandidature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        AppelCandidature::find($id);
        AppelCandidature::update($request->all());
        return redirect()->route('appelCandidatures.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppelCandidature  $appelCandidature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AppelCandidature::find($id);
        AppelCandidature::destroy($id);
        return redirect()->route('appelCandidatures.index');
    }
}







