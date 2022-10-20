<?php

namespace App\Http\Controllers;
use App\Models\Chercheur;
use App\Models\Personne;

use Illuminate\Http\Request;

class chercheurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listechercheur=Chercheur::all();
       
        return view('admin.Gestion.indexchecheur', ['listechercheur'=> $listechercheur]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $personne=Personne::All();
       return view('admin.Gestion.createchercheur', ['pers' =>$personne]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
         $Chercheur= Chercheur::create([
        'rolec' =>$request->input('rolec'),
        'domaine' =>$request->input('Domaine'),
        'vacataire' =>$request->input('vacation'),
        'article' =>$request->input('article'),
        
    ]);

   $Personne= Personne::find($request->input('personne_id'));
   $Personne->personneable_type = 'App\Models\Chercheur';
   $Personne->personneable_id = $Chercheur->id;
   $Personne->save();
   return redirect('cvs/chercheurliste');
 

        //return $Chercheur;  
        
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
     $chercheur=Chercheur::find($id);
     return view('admin.Gestion.editchercheur', ['chercheur' =>$chercheur]);
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
        $chercheur=Chercheur::find($id);
        $chercheur->rolec=$request->input('rolec');
        $chercheur->save();
        return redirect('cvs/chercheurliste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chercheur=Chercheur::find($id);
        $chercheur->delete();
        return redirect('cvs/chercheurliste');
    }
}
