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
        // Recupera tutti gli animali dal database
        $animals = Animal::all();
        // Ritorna la vista 'animals.index' con i dati degli animali
        return view('animals.index', compact('animals'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        // Ritorna la vista 'animals.show' con i dati dell'animale specificato
        return view('animals.show', compact('animal'));
    }

    // Altri metodi...
}
