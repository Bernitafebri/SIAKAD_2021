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
        $kelas = Kelas::all();
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

        $dosen = Dosen::findorfail($request->dosen_id);
        $dosen = MataKuliah::findorfail($request->matkul_id);
        Kelas::updateOrCreate(
            [
                'id' => $request->kelas_id
            ],
            [
                'matkul_id' => $request->matkul_id,
                'nama_kelas' => $request->nama_kelas,
                'dosen_id' => $request->dosen_id,
            ]
        );

        return redirect()->back()->with('toast_success', 'Data kelas berhasil diperbarui!');
    }
}
