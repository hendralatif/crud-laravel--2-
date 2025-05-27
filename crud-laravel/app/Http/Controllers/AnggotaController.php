<?php
namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::paginate(5);
        return view('anggotas.index', compact('anggotas'));
    }

    public function create()
    {
        return view('anggotas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:255',
            'judul_buku' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Anggota::create($request->all());
        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil ditambahkan!');
    }

    public function edit(Anggota $anggota)
    {
        return view('anggotas.edit', compact('anggota'));
    }

    public function update(Request $request, Anggota $anggota)
    {
        $request->validate([
    'nama' => 'required|max:255',
    'judul_buku' => 'required',
    'alamat' => 'required',
    'telepon' => 'required',
]);


        $anggota->update($request->all());
        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil diperbarui!');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        return redirect()->route('anggotas.index')->with('success', 'Anggota berhasil dihapus!');
    }
}
