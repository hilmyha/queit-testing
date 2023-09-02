<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.departements.index', [
            'departements' => Departement::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.departements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3', 'max:255'],
        ]);

        $status = $request->status ? true : false;
        $validated['status'] = $status;

        Departement::create($validated);

        return redirect()->route('departements.index')->with('success', 'Departement created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        return view('admin.departements.edit', [
            'departement' => $departement
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3', 'max:255'],
        ]);

        $status = $request->status ? true : false;
        $validated['status'] = $status;

        $departement->update($validated);

        return redirect()->route('departements.index')->with('success', 'Departement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        $departement->delete();

        return redirect()->route('departements.index')->with('success', 'Departement deleted successfully');
    }
}
