<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Contract\Firestore;
use App\Models\Cours;
use App\Models\LigneCours;
use App\Http\Requests\StoreCoursRequest;
use App\Http\Requests\UpdateCoursRequest;
use Illuminate\Http\Request;
class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return view('cours.index',['cours'=>Cours::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoursRequest  $request
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
        $cours=new Cours;
        $cours->titre=$request->titre;
        $cours->logo=$path;
        $cours->description=$request->description;
        $cours->save();
    
        return redirect()->route('voir_cours',$cours->id)->with('success', 'Cours créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $cours=Cours::where('id','=',$request->id)->get();
        $ligneCours=LigneCours::where('cours_id','=',$request->id)->get();
        return view('cours.show',['cours'=>$cours,'lignecours'=>$ligneCours]);
        
    }
  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('cours.edit',['cours'=>Cours::where('id','=',$request->id)->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoursRequest  $request
     * @param  \App\Models\Cours  $cours
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
       $cours=Cours::where('id','=',$request->id)->update([
            'titre'=>$request->titre,
            'logo'=>$path,
            'description'=>$request->description
        ]);
        return redirect()->route('voir_cours',$request->id)->with('success', 'Cours modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cours  $cours
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=explode('-',$request->id);
        switch ($id[0]) {
            case 'Cours':
                Cours::where('id','=',$request->cours_id)->delete();
                LigneCours::where("cours_id","=",$request->cours_id)->delete();
                return redirect()->route('index_cours',$request->cours_id)->with('success', 'Cours supprimé avec succès');
                break;
            
            case 'LigneCours':
                LigneCours::where("id","=",$id[1])->delete();
                return redirect()->route('voir_cours',$request->cours_id)->with('success', 'Ligne Cours supprimé avec succès');
                break;
        }
        return $id[0];

    }
}
