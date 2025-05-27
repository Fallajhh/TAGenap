<?php

namespace App\Http\Controllers;

use App\Models\Veterinarian;
use Illuminate\Http\Request;

class VeterinarianController extends Controller
{
    public function index()
    {
        $vets = Veterinarian::all();
        return view('vets.index', compact('vets'));
    }

    public function create()
    {
        return view('vets.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'nullable',
            'phone' => 'required',
        ]);

        Veterinarian::create($request->all());

        return redirect()->route('vets.index')->with('success', 'Dokter hewan berhasil ditambahkan.');
    }

    public function show(Veterinarian $vet)
    {
        return view('vets.show', compact('vet'));
    }

    public function edit(Veterinarian $vet)
    {
        return view('vets.edit', compact('vet'));
    }

    public function update(Request $request, Veterinarian $vet)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'nullable',
            'phone' => 'required',
        ]);

        $vet->update($request->all());

        return redirect()->route('vets.index')->with('success', 'Data dokter diperbarui.');
    }

    public function destroy(Veterinarian $vet)
    {
        $vet->delete();
        return redirect()->route('vets.index')->with('success', 'Data dokter dihapus.');
    }
}

