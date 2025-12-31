<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
Use App\Http\Controllers\Controller;
Use App\Http\Requests\StoreSubjectRequest;
use App\Http\Requests\UpdateSubjectRequest;
use Illuminate\Validation\Rule;




class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return response()->json($subjects);
        

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubjectRequest $request)
    {
        $subject=Subject::create($request->validated());
        return response()->json([
            'message' => 'Matière créée avec succès',
            'subject' => $subject
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Subject $subject)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
    $subject->update($request->validated());

        return response()->json([
            'message' => 'Matière mise à jour',
            'data' => $subject
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subject $subject)
    {
        
        $subject->delete();

        return response()->json([
            'message' => 'Matière supprimée'
        ]);
    }
}
