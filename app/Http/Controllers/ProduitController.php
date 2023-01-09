<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Http\Requests\StoreProduitRequest;
use App\Http\Requests\UpdateProduitRequest;
use App\Http\Resources\ProduitResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return ProduitResource::collection(Produit::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            $produit =new Produit();
            $produit->title=$request->title;
            $produit->description=$request->description;
            $produit->logo=$request->logo;
            $produit->auteur=$request->auteur;
            $produit->save();
            $path = $request->file('avatar')->store('avatars');
        return new ProduitResource($produit);
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return new ProduitResource(Produit::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProduitRequest  $request
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProduitRequest $request, Produit $produit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $produit)
    {
        //
    }
}
