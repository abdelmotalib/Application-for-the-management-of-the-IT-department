<?php

namespace App\Http\Controllers;
use App\Models\Chercheur;
use App\Models\Personne;

use Illuminate\Http\Request;

class PersonneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listepersonne=Personne::all();
        return view('admin.Gestion.index', ['personne' =>$listepersonne]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('cv.storepersonne');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personne = Personne::create([
                      
            'firstname' =>  $request->input('firstname'),
            'lastname' =>  $request->input('lastname'),
            'mail' =>  $request->input('mail'),
            'adresse' =>  $request->input('adresse'),
            'phone' =>  $request->input('phone'),
            'image' =>  $request->input('image'),
            
        ]);
            
        return redirect('cvs/info');
        
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
        $personne=Personne::find($id);
        return view('admin.Gestion.edite', ['personne' =>$personne]);
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
        $persone=Personne::find($id);
        $persone->firstname=$request->input('firstname');
        $persone->lastname=$request->input('lastname');
        $persone->mail=$request->input('mail');
        $persone->adresse=$request->input('adresse');
        $persone->phone=$request->input('phone');
        $persone->image=$request->input('image');
        $persone->save();
        return redirect('cvs/info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perso=Personne::find($id);
        $perso->delete();
        return redirect('cvs/info');
    }
}
