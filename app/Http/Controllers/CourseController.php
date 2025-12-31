<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Validation\Rule;



class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $course=Course::create($request->validated());
        return response()->json([
            'message' => 'Cours créé avec succès',
            'course' => $course
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return response()->json([
            'message' => 'Cours mis à jour avec succès',
            'course' => $course
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return response()->json([
            'message' => 'Cours supprimé avec succès'
        ], 200);
    }
}
