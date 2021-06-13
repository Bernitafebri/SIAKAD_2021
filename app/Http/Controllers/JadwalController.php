<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Ruang;
use App\Models\Jadwal;
use App\Models\Dosen;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    { 
        $jadwal = Jadwal::with( 'kelas', 'matkul', 'dosen')->get();
        $hari = Hari::all();
        $ruang = Ruang::all();
        $dosen = Dosen::OrderBy('nama', 'asc')->get();
        $kelas = Kelas::OrderBy('nama_kelas', 'asc')->get();
        $matkul = MataKuliah::OrderBy('id', 'asc')->get();
        return view('admin.jadwal.index', compact('jadwal', 'kelas', 'matkul', 'ruang', 'hari', 'dosen'));
    }

    public function jadwalMhs()
    { 
        $jadwal = Jadwal::with( 'kelas', 'matkul', 'dosen', 'ruang', 'hari')->get();
        return view('mahasiswa.jadwal', compact('jadwal'));
    }

    public function jadwalDosen()
    { 
        $jadwal = Jadwal::with( 'kelas', 'matkul', 'dosen', 'ruang', 'hari')->get();
        return view('dosen.jadwal', compact('jadwal'));
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

        Jadwal::create(
            [
                'hari_id' => $request->hari_id,
                'kelas_id' => $request->kelas_id,
                'matkul_id' => $request->matkul_id,
                'dosen_id' => $request->dosen_id,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'ruang_id' => $request->ruang_id,
            ]
        );

        return redirect()->back()->with('success', 'Data jadwal berhasil diperbarui!');
    }

    public function edit(Jadwal $jadwal)
    {
        $hari = Hari::all();
        $ruang = Ruang::all();
        $dosen = Dosen::OrderBy('nama', 'asc')->get();
        $kelas = Kelas::OrderBy('nama_kelas', 'asc')->get();
        $matkul = MataKuliah::OrderBy('id', 'asc')->get();
        return view('admin.jadwal.edit', compact('jadwal', 'kelas', 'matkul', 'ruang', 'hari', 'dosen'));
    }

    public function update(Request $request, Jadwal $jadwal) {
        $this->validate($request, [
            'hari_id' => 'required',
            'kelas_id' => 'required',
            'dosen_id' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'ruang_id' => 'required',
        ]);



        Jadwal::where('id', $jadwal->id)->update([
            'hari_id' => $request->hari_id,
            'kelas_id' => $request->kelas_id,
            'matkul_id' => $request->matkul_id,
            'dosen_id' => $request->dosen_id,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'ruang_id' => $request->ruang_id,
        ]);

        return redirect('/jadwals')->with('toast_success', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        Jadwal::destroy($id);
        return redirect('/jadwals')->with('toast_error', 'Data berhasil dihapus!');
    }
}
