<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();
        return view('perusahaan.index', compact('perusahaans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perusahaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
        $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'email' => 'required|email',
        'telepon' => 'required',
        ]);
        Perusahaan::create($request->all());
        return redirect()->route('perusahaan.index')
        ->with('success', 'Perusahaan berhasil ditambahkan.');
        }

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
    public function edit(Perusahaan $perusahaan)
    {
        return view('perusahaan.edit', compact('perusahaan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perusahaan $perusahaan)
    {
        $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'email' => 'required|email',
        'telepon' => 'required',
        ]);
        $perusahaan->update($request->all());
        return redirect()->route('perusahaan.index')
        ->with('success', 'Data perusahaan berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perusahaan $perusahaan)
    {
         $perusahaan->delete();
         // Redirect ke halaman index dengan pesan sukses
         return redirect()->route('perusahaan.index')
         ->with('success', 'Perusahaan berhasil dihapus.');
    }
}
