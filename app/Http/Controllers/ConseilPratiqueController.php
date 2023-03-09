<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ConseilPratique;
use App\Http\Requests\StoreConseilPratiqueRequest;
use App\Http\Requests\UpdateConseilPratiqueRequest;
use App\Http\Resources\ConseilsResource;
class ConseilPratiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conseilspratiques = ConseilPratique::all();
        $upload=env('APP_UPLOAD');
        return view('conseilspratiques.index', compact('conseilspratiques'),compact('upload'));
    }

    public function indexRessource()
    {
        $cours = ConseilPratique::all();
        return ConseilsResource::collection($cours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conseilspratiques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConseilPratiqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $conseilpratique=new ConseilPratique;
        $path="";
        if($request->file('photo')!=null){
            $path = $request->file('photo')->store('images', 'uploads');
            $url=explode("/",$path);
        }
        if(isset($url)){$conseilpratique->photo= $url[1];} 
        $conseilpratique->name= $request->name;
        $conseilpratique->description= $request->description;
        $conseilpratique->save();
        return redirect()->route('conseilspratiques.index')->with('success', 'Conseil Pratique ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $conseilpratique= ConseilPratique::where('id','=',$request->id)->get();
        return view('conseilspratiques.show',compact('conseilpratique'));
    }
    public function showRessource(Request $request)
    {
        $cours = ConseilPratique::where('id','=',$request->id)->get();
        return ConseilsResource::collection($cours);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function edit(ConseilPratique $conseilpratique)
    {
        $upload=env('APP_UPLOAD');
        return view('conseilspratiques.edit', compact('conseilpratique'),compact('upload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConseilPratiqueRequest  $request
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $validatedData = $request->validate([
                'name' => 'required|max:255',
                'description' => 'required',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $conseilpratique = ConseilPratique::findOrFail($request->id);
            if($request->file('photo')!=null){
                $path = $request->file('photo')->store('images', 'uploads');
                $url=explode("/",$path);
            }
            if(isset($url)){$conseilpratique->photo= $url[1];} 
            $conseilpratique->name = $request->name;
            $conseilpratique->description = $request->description;
            $conseilpratique->save();
        
            return redirect()->route('conseilspratiques.index')->with('success', 'Conseil Pratique modifié avec succès!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        ConseilPratique::where('id',$request->id)->delete();
        return redirect()->route('conseilspratiques.index',$request->cours_id)->with('success', 'Conseil supprimé avec succès');
    
    }
    public function index_ressource()
    {
        $user = User::findOrFail($id);
        return response()->json(['user' => $user]);
    }

}
