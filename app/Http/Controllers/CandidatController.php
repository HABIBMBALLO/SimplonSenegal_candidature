<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //pagination
        $candidats = Candidat::paginate(2);
        return view('candidat.index', compact('candidats'));
        // $candidats = Candidat::paginate(5);
        //  return view('candidat.index', compact('candidats'));
        
    }

    /**
     * create the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {   
        $formations = Formation::all();
        return view('candidat.create', [
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
        // $id = Auth::id();
        // dd($id);

        // creer une fonction pour recuperer le type de formation et le nom de la formation pour l'enregistrer dans la table appelCandidature 
        
        //fonction pour editer le nom de la formation
        // $formation = str_replace(' ', '_', $formation);
        // $formation = strtolower($formation);
        // $formation = ucfirst($formation);
        // $formation = $formation . '_' . $request->input('niveau');
        // dd($formation);
        // $request->merge(['formation' => $formation]);
        // $candidat = Candidat::create($request->all());
        // return redirect()->route('candidats.create')->withStatus('Candidat successfully registered.');
        //methode validate

         $validate = $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'cni' => 'required',
            'dateNaissance' => 'required',
            'lieuNaissance' => 'required',
            'niveauEtude' => 'required',
        ]);

        $candidat= candidat::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'cni' => $request->cni,
            'dateNaissance' => $request->dateNaissance,
            'lieuNaissance' => $request->lieuNaissance,
            'niveauEtude' => $request->niveauEtude,
            'user_id' => Auth::id(),
        ]);


        return redirect()->route('candidats.create')
            ->withStatus('Candidat successfully registered.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidat = Candidat::find($id);
        
        return view('candidat.index',
         [
        'candidats'=>$candidat
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $candidat = Candidat::find($id);
        $candidat->update($request->all());
        return redirect()->route('candidats.show', $candidat->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidat  $candidat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidat = Candidat::find($id);
        $candidat->delete();
        return redirect()->route('candidats.index');
    }
}
