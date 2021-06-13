<?php

namespace App\Http\Controllers;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index()
    {
        $matkuls = MataKuliah::all();
        return view('admin.matkul.index', compact('matkuls'));
    }

    public function create()
    {
        return view('admin.matkul.tambah');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'kode' => 'required',
                'nama_matkul' => 'required',
                'sks' => 'required',
                'semester' => 'required',
            ],
            [
                'kode.required' => 'Anda belum memasukkan kode!',
                'nama_matkul.required' => 'Anda belum memasukkan nama matkul!',
                'sks.required' => 'Anda belum memasukkan sks!',
                'semester.required' => 'Anda belum memasukkan semester!',
            ]
        );

        MataKuliah::create([
            'kode' => $request->kode,
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect('/matkul')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(MataKuliah $matkul)
    {
        return view('admin.matkul.edit', compact('matkul'));
    }


    public function update(Request $request, MataKuliah $matkul) {
        $request->validate(
            [
                'kode' => 'required',
                'nama_matkul' => 'required',
                'sks' => 'required',
                'semester' => 'required',
            ],
            [
                'kode.required' => 'Anda belum memasukkan kode!',
                'nama_matkul.required' => 'Anda belum memasukkan nama matkul!',
                'sks.required' => 'Anda belum memasukkan sks!',
                'semester.required' => 'Anda belum memasukkan semester!',
            ]
        );


        MataKuliah::where('id', $matkul->id)->update([
            'kode' => $request->kode,
            'nama_matkul' => $request->nama_matkul,
            'sks' => $request->sks,
            'semester' => $request->semester,
        ]);

        return redirect('/matkul')->with('toast_success', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        $matkul = MataKuliah::find($id);

        MataKuliah::destroy($id);
        return redirect('/matkul')->with('toast_error', 'Data berhasil dihapus!');
    }


}
