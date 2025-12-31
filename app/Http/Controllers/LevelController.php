<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLevelRequest;
use App\Http\Requests\UpdateLevelRequest;
use Illuminate\Validation\Rule;


class LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $levels = Level::all();
        return response()->json($levels);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLevelRequest $request)
    {
        $level = Level::create($request->validated());
        return response()->json([
            'message' => 'Niveau créé avec succès',
            'level' => $level
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLevelRequest $request, Level $level)
    {
        $level->update($request->validated());
        return response()->json([
            'message' => 'Niveau mis à jour avec succès',
            'level' => $level
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Level $level)
    {
        $level->delete();
        return response()->json([
            'message' => 'Niveau supprimé avec succès'
        ], 200);
    }
}
