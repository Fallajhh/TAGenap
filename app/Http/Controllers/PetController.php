<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Owner;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::with('owner')->get();
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        $owners = Owner::all();
        return view('pets.create', compact('owners'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'owner_id' => 'required|exists:owners,id',
            'name' => 'required',
            'species' => 'required',
            'breed' => 'nullable',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
        ]);

        Pet::create([
            'owner_id'   => $request->owner_id,
            'name'       => $request->name,
            'species'    => $request->species,
            'breed'      => $request->breed,
            'gender'     => $request->gender,
            'birth_date' => $request->birth_date,
        ]);

        return redirect()->route('pets.index')->with('success', 'Data hewan berhasil ditambahkan.');
    }

    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    public function edit(Pet $pet)
    {
        $owners = Owner::all();
        return view('pets.edit', compact('pet', 'owners'));
    }

    public function update(Request $request, Pet $pet)
    {
        $request->validate([
            'owner_id' => 'required|exists:owners,id',
            'name' => 'required',
            'species' => 'required',
            'breed' => 'nullable',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
        ]);

        $pet->update([
            'owner_id'   => $request->owner_id,
            'name'       => $request->name,
            'species'    => $request->species,
            'breed'      => $request->breed,
            'gender'     => $request->gender,
            'birth_date' => $request->birth_date,
        ]);

        return redirect()->route('pets.index')->with('success', 'Data hewan berhasil diperbarui.');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Data hewan berhasil dihapus.');
    }
}
