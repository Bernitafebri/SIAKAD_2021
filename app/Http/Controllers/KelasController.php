<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;
use App\Models\Kelas;
use App\Models\Dosen;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    //'matkul_id', 'nama_kelas', 'dosen_id'
    public function index()
    {
        $kelas = Kelas::with('dosen', 'matkul')->get(); 
        $dosen = Dosen::all();
        $matkul = MataKuliah::OrderBy('id', 'asc')->get();
        return view('admin.kelas.index', compact('kelas', 'matkul', 'dosen'));
    }

    public function store(Request $request )
    {
        $this->validate($request, [
            'matkul_id' => 'required',
            'nama_kelas' => 'required',
            'dosen_id' => 'required',
        ]);

        Kelas::Create(
            [
                'matkul_id' => $request->matkul_id,
                'nama_kelas' => $request->nama_kelas,
                'dosen_id' => $request->dosen_id,
            ]
        );

        return redirect()->back()->with('success', 'Data kelas berhasil diperbarui!');
    }

    public function edit(Kelas $kelas)
    {
        $dosen = Dosen::all();
        $matkul = MataKuliah::OrderBy('id', 'asc')->get();
        return view('admin.kelas.edit', compact('kelas', 'matkul', 'dosen'));
    }

    public function update(Request $request, Kelas $kelas) {
        $this->validate($request, [
            'matkul_id' => 'required',
            'nama_kelas' => 'required',
            'dosen_id' => 'required',
        ]);


        Kelas::where('id', $kelas->id)->update([
            'matkul_id' => $request->matkul_id,
            'nama_kelas' => $request->nama_kelas,
            'dosen_id' => $request->dosen_id,
        ]);

        return redirect('/kelas')->with('toast_success', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        Kelas::destroy($id);
        return redirect('/kelas')->with('toast_error', 'Data berhasil dihapus!');
    }
}
