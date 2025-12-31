<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactMessageRequest;
use App\Http\Requests\UpdateContactMessageRequest;
use Illuminate\Validation\Rule;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $contactMessages = ContactMessage::all();
      return response()->json($contactMessages);  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact=ContactMessage::create($request->validated());
        return response()->json([
            
            'message' => 'Message envoyé avec succès',
            'contact' => $contact
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactMessage $contactMessage)
    {
 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactMessage $contactMessage)
    {
        $contactMessage->update($request->validated());
        return response()->json([
            'message' => 'Message mis à jour avec succès',
            'contactMessage' => $contactMessage
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        return response()->json([
            'message' => 'Message supprimé avec succès'
        ], 200);
    }
}
