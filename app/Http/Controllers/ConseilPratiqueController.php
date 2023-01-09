<?php

namespace App\Http\Controllers;

use App\Models\ConseilPratique;
use App\Http\Requests\StoreConseilPratiqueRequest;
use App\Http\Requests\UpdateConseilPratiqueRequest;

class ConseilPratiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConseilPratiqueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConseilPratiqueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function show(ConseilPratique $conseilPratique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function edit(ConseilPratique $conseilPratique)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConseilPratiqueRequest  $request
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConseilPratiqueRequest $request, ConseilPratique $conseilPratique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConseilPratique  $conseilPratique
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConseilPratique $conseilPratique)
    {
        //
    }
}
