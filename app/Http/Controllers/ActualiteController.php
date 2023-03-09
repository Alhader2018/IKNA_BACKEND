<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Actualite;
use App\Http\Requests\StoreActualiteRequest;
use App\Http\Requests\UpdateActualiteRequest;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('actualites.index',['actualites'=>Actualite::all()]);
    }
    public function index_ressource(Request $request){
        $id=$request->id;
        if ($id) {
            $actualite = Actualite::find($id);  // find the actualite record with the given ID
            if (!$actualite) {
                return response()->json(['error' => 'Actualite not found'], 404);  // return 404 if the actualite is not found
            }
            return response()->json(['data' => $actualite]);  // return the actualite as JSON if found
        }
        $actualites = Actualite::all();  // retrieve all actualites if no ID is provided
        return response()->json(['data' => $actualites]);  // return all actualites as JSON
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actualites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreActualiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
        ]);
        $path="";
         if($request->file('image')!=null){
                $path = $request->file('image')->store('images', 'uploads');
                $url=explode("/",$path);
            }
        $actualites=new Actualite;
        $actualites->titre=$request->titre;
        if(isset($url)){$actualites->logo= $url[1];} 
        $actualites->description=$request->description;
        $actualites->save();
    
        return redirect()->route('voir_actualites',$actualites->id)->with('success', 'actualité créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $actualites=Actualite::where('id','=',$request->id)->get();
        return view('actualites.show',['actualites'=>$actualites,'upload'=>env('APP_UPLOAD')]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('actualites.edit',['actualites'=>Actualite::where('id','=',$request->id)->get(),'upload'=>env('APP_UPLOAD')]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateActualiteRequest  $request
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|max:255',
        ]);
        $path="";
        if($request->file('image')!=null){
            $path = $request->file('image')->store('images', 'uploads');
            $url=explode("/",$path);
        }
        if(isset($url))
        {
            $actualites=Actualite::where('id','=',$request->id)->update([
                'titre'=>$request->titre,
                'logo'=>$url[1],
                'description'=>$request->description
            ]);
        }
        else
        {
            $actualites=Actualite::where('id','=',$request->id)->update([
                'titre'=>$request->titre,
                'description'=>$request->description
            ]);
        }
        return redirect()->route('voir_actualites',$request->id)->with('success', 'actualité modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Actualite::where('id','=',$request->id)->delete();
        return redirect()->route('index_actualites',$request->actualites_id)->with('success', 'actualité supprimé avec succès');
    }
}
