<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Se è stato caricato un file, salvalo e ottieni il percorso
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('images', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        // Creazione di un nuovo personaggio
        Character::create($validatedData);

        // Redirect alla pagina index con un messaggio di successo
        return redirect()->route('characters.index')->with('success', 'Character added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'class_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_url' => 'nullable|url',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Se è stato caricato un nuovo file, salvalo e ottieni il percorso
        if ($request->hasFile('image_file')) {
            $imagePath = $request->file('image_file')->store('images', 'public');
            $validatedData['image_path'] = $imagePath;
        }

        // Aggiorna i dati del personaggio
        $character->update($validatedData);

        // Redirect alla pagina index con un messaggio di successo
        return redirect()->route('characters.index')->with('success', 'Character updated successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();

        return redirect()->route('characters.index')->with('success', 'Character deleted successfully.');
    }
}
