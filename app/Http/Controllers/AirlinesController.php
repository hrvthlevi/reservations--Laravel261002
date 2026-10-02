<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAirlinesRequest;
use App\Http\Requests\UpdateAirlinesRequest;
use App\Models\Airlines;

class AirlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Airlines::al();
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
    public function store(StoreAirlinesRequest $request)
    {
        $record = new Airlines();
        $record->fill($request->all())->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Airlines $airlines)
    {
        return $airlines;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Airlines $airlines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAirlinesRequest $request, Airlines $airlines)
    {
        $airlines->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Airlines $airlines)
    {
        $airlines->delete();
    }
}
