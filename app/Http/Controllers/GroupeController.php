<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\Permission;
class GroupeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     public function index()
     {
         return view('groupe.index',['groupe'=>Groupe::all()]);
     }
     
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
      
     public function create()
     {
       
         return view('groupe.create');
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \App\Http\Requests\StoreGroupeRequest  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'libellé' => 'required|max:255',
             'code' => 'required|max:255',
         ]);
         $groupe=new Groupe;
         $groupe->code=$request->code;
         $groupe->libellé=$request->libellé;
         if($groupe->save()){
            $pages=["medecin","user","rapport","cours","conseil","suggestions","actualites","sage_femme","cpn"];
            foreach ($pages as $p) {
                $permission=new Permission;
                $permission->pages=$p;
                $permission->groupe= $groupe->code;
                $permission->permission="off";
                $permission->save();
            }
            return redirect()->route('voir_groupe',$groupe->id)->with('success', 'Groupe créé avec succès');
         }
     
         
     }
   
     public function storePermission(Request $request){
        
        $permission=Permission::where('pages','=',$request->page)
        ->where('groupe','=',$request->groupe)
        ->first();
        if(!empty($permission))
        {
            $permission->permission=$request->permission;
            $permission->save();
        }
        else
        {
            $permission=new Permission;
            $permission->groupe=$request->groupe;
            $permission->pages=$request->page;
            $permission->permission=$request->permission;
            $permission->save();
        }
     
            return 1;
      
     } 
 
     /**
      * Display the specified resource.
      *
      * @param  \App\Models\Groupe  $groupe
      * @return \Illuminate\Http\Response
      */
     public function show(Request $request)
     {
         $groupe=Groupe::where('id','=',$request->id)->get();
         $permission=Permission::where('groupe','=',$groupe[0]->code)->get();
         return view('groupe.show',['groupe'=>$groupe,'permission'=>$permission]);
         
     }
   
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Models\Groupe  $groupe
      * @return \Illuminate\Http\Response
      */
     public function edit(Request $request)
     {
         return view('groupe.edit',['groupe'=>Groupe::where('id','=',$request->id)->get()]);
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \App\Http\Requests\UpdateGroupeRequest  $request
      * @param  \App\Models\Groupe  $groupe
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request)
     {
         $validatedData = $request->validate([
             'libellé' => 'required|max:255',
         ]);
        
        $groupe=Groupe::where('id','=',$request->id)->update([
             'code'=>$request->code,
             'libellé'=>$request->libellé
         ]);
         return redirect()->route('voir_groupe',$request->id)->with('success', 'Groupe modifié avec succès');
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Models\Groupe  $groupe
      * @return \Illuminate\Http\Response
      */
     public function destroy(Request $request)
     {
                  $id=explode($request->id);
       
                 Groupe::where('id','=',$id)->delete();
                 return redirect()->route('index_groupe',$request->groupe_id)->with('success', 'Groupe supprimé avec succès');
              
 
     }
}
