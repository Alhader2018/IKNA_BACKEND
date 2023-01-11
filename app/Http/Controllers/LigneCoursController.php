<?php

namespace App\Http\Controllers;
use App\Models\LigneCours;
use Illuminate\Http\Request;

class LigneCoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cours_id=$request->cours_id;
        return view('lignecours.create',['cours_id'=>$cours_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
        ]);
        $path="";
        if($request->file('image')!=null){
            $file = $request->file('image');
            $path = $file->store('image','public');
            $path=explode("/",$path);
            $path=$path[1];
        }
        $cours=new LigneCours;
        $cours->titre=$request->titre;
        $cours->cours_id=$request->cours_id;
        $cours->logo=$path;
        $cours->description=$request->description;
        $cours->save();
    
        return redirect()->route('voir_cours',$request->cours_id)->with('success', 'Cours créé avec succès');
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
    public function edit(Request $request)
    {
        return view('lignecours.edit',['lignecours'=>LigneCours::where('id','=',$request->id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
        ]);
        $path="";
        if($request->file('image')!=null){
            $file = $request->file('image');
            $path = $file->store('image','public');
            $path=explode("/",$path);
            $path=$path[1];
        }
       $cours=LigneCours::where('id','=',$request->id)->update([
            'titre'=>$request->titre,
            'logo'=>$path,
            'description'=>$request->description
        ]);
        return redirect()->route('voir_cours',$request->cours_id)->with('success', 'Cours modifié avec succès');
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
