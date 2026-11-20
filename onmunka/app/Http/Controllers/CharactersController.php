<?php

namespace App\Http\Controllers;

use App\Models\characters;
use App\Http\Requests\StorecharactersRequest;
use App\Http\Requests\UpdatecharactersRequest;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(characters::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecharactersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(characters $characters)
    {
        return response()->json($characters);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(characters $characters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecharactersRequest $request, characters $characters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(characters $characters)
    {
        //
    }
}
