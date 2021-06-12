<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Ruang;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $hari = Hari::all();
        $kelas = Kelas::OrderBy('nama_kelas', 'asc')->get();
        $ruang = Ruang::all();
        $matkul = MataKuliah::OrderBy('id', 'asc')->get();
        return view('admin.jadwal.index', compact('hari', 'kelas', 'matkul', 'ruang'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'hari_id' => 'required',
            'kelas_id' => 'required',
            'dosen_id' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruang_id' => 'required',
        ]);

        $dosen = Dosen::findorfail($request->dosen_id);
        Jadwal::updateOrCreate(
            [
                'id' => $request->jadwal_id
            ],
            [
                'hari_id' => $request->hari_id,
                'kelas_id' => $request->kelas_id,
                'matkul_id' => $guru->matkul_id,
                'dosen_id' => $request->dosen_id,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'ruang_id' => $request->ruang_id,
            ]
        );

        return redirect()->back()->with('toast_success', 'Data jadwal berhasil diperbarui!');
    }
}
