<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCageRequest;
use App\Http\Requests\UpdateCageRequest;
use App\Models\Cage;

class CageController extends Controller
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
     * @param  \App\Http\Requests\StoreCageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cage  $cage
     * @return \Illuminate\Http\Response
     */
    public function show(Cage $cage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cage  $cage
     * @return \Illuminate\Http\Response
     */
    public function edit(Cage $cage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCageRequest  $request
     * @param  \App\Models\Cage  $cage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCageRequest $request, Cage $cage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cage  $cage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cage $cage)
    {
        //
    }
}
