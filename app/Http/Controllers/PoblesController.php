<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poble;

class PoblesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Poble::query();
    
        if ($request->has('search')) {
            $query->where('municipi', 'like', '%' . $request->input('search') . '%');
        }
    
        $pobles = $query->get();
    
        return view('index', compact('pobles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'municipi' => 'required|string|max:255',
            'comarca' => 'required|string|max:255',
            'provincia' => 'required|string|max:255',
            'descripcio' => 'nullable|string',
            'imatge' => 'nullable|url',
        ]);

        Poble::create($request->all());
        return redirect()->route('index')->with('success', 'Poble creat correctament.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $poble = Poble::findOrFail($id);
        return view('show', compact('poble'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $poble = Poble::findOrFail($id);
        return view('edit', compact('poble'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'municipi' => 'required|string|max:255',
            'comarca' => 'required|string|max:255',
            'provincia' => 'required|string|max:255',
            'descripcio' => 'nullable|string',
            'imatge' => 'nullable|url',
        ]);

        $poble = Poble::findOrFail($id);
        $poble->update($request->all());
        return redirect()->route('index')->with('success', 'Poble actualitzat correctament.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poble = Poble::findOrFail($id);
        $poble->delete();
        return redirect()->route('index')->with('success', 'Poble eliminat correctament.');
    }
}
