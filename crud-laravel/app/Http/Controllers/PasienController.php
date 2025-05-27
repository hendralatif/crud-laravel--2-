<?php
namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::paginate(5);
        return view('pasiens.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasiens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Pasien::create($request->all());
        return redirect()->route('pasiens.index')->with('success', 'Pasien berhasil ditambahkan!');
    }

    public function edit(Pasien $pasien)
    {
        return view('pasiens.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $pasien->update($request->all());
        return redirect()->route('pasiens.index')->with('success', 'Data pasien diperbarui!');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();
        return redirect()->route('pasiens.index')->with('success', 'Pasien dihapus!');
    }
}
