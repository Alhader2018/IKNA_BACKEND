<?php

namespace App\Http\Controllers;

use App\Models\LigneCours;
use App\Http\Requests\StoreLigneCoursRequest;
use App\Http\Requests\UpdateLigneCoursRequest;

class LigneCoursController extends Controller
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
     * @param  \App\Http\Requests\StoreLigneCoursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLigneCoursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LigneCours  $ligneCours
     * @return \Illuminate\Http\Response
     */
    public function show(LigneCours $ligneCours)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LigneCours  $ligneCours
     * @return \Illuminate\Http\Response
     */
    public function edit(LigneCours $ligneCours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLigneCoursRequest  $request
     * @param  \App\Models\LigneCours  $ligneCours
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLigneCoursRequest $request, LigneCours $ligneCours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LigneCours  $ligneCours
     * @return \Illuminate\Http\Response
     */
    public function destroy(LigneCours $ligneCours)
    {
        //
    }
}
