<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validazione dei dati
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'species' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        // Creazione di un nuovo animale
        Animal::create($validatedData);

        // Redirect alla pagina index con un messaggio di successo
        return redirect()->route('animals.index')->with('success', 'Animal added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return view('animals.show', compact('animal'));
    }

    // Altri metodi...
}
