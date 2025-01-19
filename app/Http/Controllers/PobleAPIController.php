<?php

namespace App\Http\Controllers;

use App\Models\Poble;
use Illuminate\Http\Request;

class PobleAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Poble::all();
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
        Poble::create($request->all());
        return ['created' => true];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Poble::find($id);
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
        $alumne = Poble::find($id);
        $alumne->update($request->all());
        return ['updated' => true];    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Poble::destroy($id);
        return ['deleted' => true];    
    }
}
