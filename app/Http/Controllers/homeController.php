<?php

namespace App\Http\Controllers;

use App\Mail\RegistrationInfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Reflector;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('home.home');
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
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'date' => 'required|date',
            'telephone' => 'required|string|regex:/^\+?[0-9]{10,15}$/',
            'email' => 'required|email|max:255',
            'secteur_activite' => 'required|string|max:255',
            'code_postal' => 'required|string|max:15',
            'ville' => 'required|string|max:255',
            'pays' => 'required|string|max:255',
            'commentaire' => 'nullable|string|max:1000',
            'certifie_majeur' => 'accepted', // Valide uniquement si la case est cochée
        ]);

        Mail::to("fanuelperse@gmail.com")->send(new RegistrationInfoMail($validatedData));

        return back()->with('success', 'Formulaire soumis avec succès et e-mail envoyé!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('home.detail')->with(compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
