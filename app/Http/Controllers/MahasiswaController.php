<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(): View
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create(): View
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate form
        $this->validate($request, [
            'nim'            => 'required|integer',
            'nama'           => 'required|string',
            'alamat'         => 'required|string',
            'nomorhp'        => 'required|integer',
            'motivasikuliah' => 'required|string',
        ]);

        // Create Mahasiswa
        Mahasiswa::create([
            'nim'            => $request->nim,
            'nama'           => $request->nama,
            'alamat'         => $request->alamat,
            'nomorhp'        => $request->nomorhp,
            'motivasikuliah' => $request->motivasikuliah,
        ]);

        // Redirect to index
        return redirect()->route('mahasiswas.index')->with(['success' => 'Data Mahasiswa Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        //get post by ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        //render view with post
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function edit(string $id): View
    {
        // Get mahasiswa by ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Render view with mahasiswa
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    /**
     * Update Mahasiswa
     *
     * @param  Request  $request
     * @param  string  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Validate form
        $this->validate($request, [
            'nim'            => 'required|integer',
            'nama'           => 'required|string',
            'alamat'         => 'required|string',
            'nomorhp'        => 'required|integer',
            'motivasikuliah' => 'required|string',
        ]);

        // Get mahasiswa by ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Update mahasiswa
        $mahasiswa->update([
            'nim'            => $request->nim,
            'nama'           => $request->nama,
            'alamat'         => $request->alamat,
            'nomorhp'        => $request->nomorhp,
            'motivasikuliah' => $request->motivasikuliah,
        ]);

        // Redirect to index
        return redirect()->route('mahasiswas.index')->with(['success' => 'Data Mahasiswa Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        //get mahasiswa by ID
        $mahasiswa = Mahasiswa::findOrFail($id);
    
        //delete mahasiswa
        $mahasiswa->delete();
    
        //redirect to index
        return redirect()->route('mahasiswas.index')->with(['success' => 'Data Mahasiswa Berhasil Dihapus!']);
    }
    
}
