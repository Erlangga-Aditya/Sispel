<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use App\Models\Training;
use Illuminate\Http\Request;

class CitizenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Citizen::with('training')->latest();

        // Filter by Training
        if ($request->has('training_id') && $request->training_id != '') {
            $query->where('training_id', $request->training_id);
        }

        // Search by Name or NIK
        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('nik', 'like', "%{$search}%");
            });
        }

        $citizens = $query->get();
        $trainings = Training::all(); // For filter dropdown in view if needed
        return view('citizens.index', compact('citizens', 'trainings'));
    }

    public function create()
    {
        $trainings = Training::all();
        return view('citizens.create', compact('trainings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|unique:citizens,nik',
            'name' => 'required',
            'training_id' => 'required|exists:trainings,id',
        ], [
            'nik.unique' => 'NIK sudah pernah mengikuti pelatihan.',
        ]);

        Citizen::create($request->all());

        return redirect()->route('citizens.index')->with('success', 'Pendaftaran berhasil!');
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
