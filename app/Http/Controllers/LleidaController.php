<?php

namespace App\Http\Controllers;

use App\Models\Girona;
use App\Models\Lleida;
use Illuminate\Http\Request;

class LleidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Lleida::query();
    
        // Lógica de búsqueda
        if ($request->has('search') && !empty($request->search)) {
            $query->where('nom', 'like', '%' . $request->search . '%');
        }
    
        $lleida = $query->paginate(10);  // Paginación de resultados
        return view('lleida', compact('lleida'));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
